<?php
header("Content-Type: application/json");

// Show PHP errors (dev mode only)
error_reporting(E_ALL);
ini_set("display_errors", 1);

$apiKey = "AIzaSyCNB8fXsMwHhWOFAOb_OrudET2UYG2k5N4"; // 🔑 Replace with your Gemini API key
$model = "gemini-2.0-flash"; // ✅ Correct model
$input = json_decode(file_get_contents("php://input"), true);
$userMessage = $input["message"] ?? "";

// 🔹 Load portfolio.json
$portfolioData = file_get_contents("portfolio.json");
$portfolioJson = json_decode($portfolioData, true);

$finalPrompt = "You are a helpful chatbot assistant for Jericho L. Maghilom’s portfolio website.

Rules:
- You are NOT Jericho. You are his assistant.
- If someone says 'hi' or any greeting, greet them back naturally.
- When sharing Jericho's contact info, format it cleanly and never repeat raw JSON data.
- Always reply in a conversational way, not like a data dump.
- If someone asks for social media, reply with clickable links.

Here is the portfolio information (use this only as reference, do NOT repeat it word-for-word):

" . json_encode($portfolioJson, JSON_PRETTY_PRINT) . "

Now, based on the visitor’s message below, give a natural, human-like response:

Visitor: $userMessage";


// 🔹 Function to call Gemini
function callGemini($apiKey, $model, $prompt) {
    $url = "https://generativelanguage.googleapis.com/v1beta/models/$model:generateContent?key=" . $apiKey;

    $data = [
        "contents" => [
            [
                "role" => "user",
                "parts" => [
                    ["text" => $prompt]
                ]
            ]
        ]
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For local dev

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}

// 🔹 Call Gemini API
$response = callGemini($apiKey, $model, $finalPrompt);

echo json_encode($response);
