<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Echo's Personal Website</title>
  <meta name="description" content="Portfolio of Jericho Maghilom (Echo), 4th-year IT student passionate about coding, system development, and web technologies.">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


  <style>
    /* Keyframe animations */
    @keyframes fadeUp {
      0% { opacity: 0; transform: translateY(40px) scale(0.95); }
      100% { opacity: 1; transform: translateY(0) scale(1); }
    }
    @keyframes fadeIn {
      0% { opacity: 0; transform: scale(0.9); }
      100% { opacity: 1; transform: scale(1); }
    }

    .animate-fadeUp {
      opacity: 0;
      animation: fadeUp 0.8s ease-out forwards;
    }
    .animate-fadeIn {
      opacity: 0;
      animation: fadeIn 1s ease-out forwards;
    }
    .delay-1 { animation-delay: 0.2s; }
    .delay-2 { animation-delay: 0.4s; }
    .delay-3 { animation-delay: 0.6s; }

    /* Scroll-animate (for continuous fade/slide while scrolling) */

  /* Slide-in from sides */
  .scroll-animate {
    opacity: 0;
    transform: translateX(-60px); /* start from left */
    transition: opacity 0.8s ease, transform 0.8s ease;
  }
  .scroll-animate.right {
    transform: translateX(60px); /* start from right */
  }
  .scroll-animate.visible {
    opacity: 1;
    transform: translateX(0);
  }

  .fade-in {
  opacity: 0;
  animation: fadeIn 1s forwards;
}
@keyframes fadeIn {
  to { opacity: 1; }
}

@keyframes slideInLeft {
    from {
      transform: translateX(-100px);
      opacity: 0;
    }
    to {
      transform: translateX(0);
      opacity: 1;
    }
  }

  @keyframes slideInRight {
    from {
      transform: translateX(100px);
      opacity: 0;
    }
    to {
      transform: translateX(0);
      opacity: 1;
    }
  }

  .animate-slideInLeft {
    animation: slideInLeft 0.8s ease-out forwards;
  }

  .animate-slideInRight {
    animation: slideInRight 0.8s ease-out forwards;
  }

  .dot {
  width: 6px;
  height: 6px;
  background-color: #9ca3af; /* Tailwind gray-400 */
  border-radius: 50%;
  display: inline-block;
  animation: blink 1.4s infinite both;
}
.dot:nth-child(2) { animation-delay: 0.2s; }
.dot:nth-child(3) { animation-delay: 0.4s; }

@keyframes blink {
  0%, 80%, 100% { opacity: 0; }
  40% { opacity: 1; }
}


  </style>
</head>
<body class="bg-gray-900 text-white scroll-smooth">

  <!-- Navbar -->
<nav class="fixed top-0 left-0 w-full z-50 bg-gray-800/80 backdrop-blur shadow-md">
  <div class="container mx-auto flex justify-between items-center p-4">
    <!-- Brand -->
    <h1 class="text-2xl font-extrabold text-blue-400 tracking-wide animate-fadeIn">
      Jericho(Echo)
    </h1>

    <!-- Hamburger Button (mobile) -->
    <button id="menu-btn" class="md:hidden text-gray-300 hover:text-blue-400 text-2xl focus:outline-none">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Nav Links -->
    <ul id="menu" class="hidden md:flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 font-medium absolute md:static top-16 left-0 w-full md:w-auto bg-gray-800 md:bg-transparent p-6 md:p-0 shadow-md md:shadow-none">
      <li><a href="#about" class="hover:text-blue-400 transition">About</a></li>
      <li><a href="#skills" class="hover:text-blue-400 transition">Skills</a></li>
      <li><a href="#education" class="hover:text-blue-400 transition">Education</a></li>
      <li><a href="#hobbies" class="hover:text-blue-400 transition">Hobbies</a></li>
      <li><a href="#contact" class="hover:text-blue-400 transition">Contact</a></li>
      <li><a href="#socialmedia" class="hover:text-blue-400 transition">Social Media</a></li>
    </ul>
  </div>
</nav>

<script>
  // Mobile menu toggle
  const menuBtn = document.getElementById('menu-btn');
  const menu = document.getElementById('menu');

  menuBtn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>


 <!-- Hero Section ------------------------------>
<section 
  class="relative h-screen flex items-center justify-center bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 overflow-hidden" 
  id="about"
>
  <!-- Animated background layer -->
  <div class="absolute inset-0 animate-gradient bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 opacity-70"></div>

  <!-- Floating glow orbs -->
  <div class="absolute w-72 h-72 bg-blue-500 rounded-full mix-blend-screen filter blur-3xl opacity-20 animate-orb"></div>
  <div class="absolute w-96 h-96 bg-cyan-400 rounded-full mix-blend-screen filter blur-3xl opacity-10 animate-orb delay-3000"></div>

  <!-- Content -->
  <div class="relative text-center max-w-2xl px-6 z-10">
    
    <!-- Profile photo -->
<div class="flex justify-center mb-6">
  <img 
    src="echo.jfif" 
    alt="Profile photo" 
     class="w-40 h-40 rounded-full border-4 border-blue-400 shadow-lg object-cover"
  >
</div>


    <h1 class="text-5xl font-extrabold text-white scroll-animate">
      Hi, I’m <span class="text-blue-400">Jericho L. Maghilom</span>
    </h1>
    
    <p class="mt-3 text-lg text-gray-400 italic scroll-animate">
      (But you can call me <span class="text-blue-300 font-semibold">Echo</span>)
    </p>
    
    <p class="mt-6 text-lg text-gray-300 leading-relaxed scroll-animate">
      I’m a <span class="text-blue-400 font-semibold">4th-year IT student</span> at 
      <span class="text-blue-400 font-semibold">Bestlink College of the Philippines</span>.  
      I love coding, and I’ve developed several project systems—both to improve my own skills and to help fellow students.
    </p>


<div class="flex space-x-6 justify-center mt-10">
  <!-- Advice Button -->
  <button onclick="openModal('adviceModal'); loadAdvice()" 
    class="animate-slideInLeft px-6 py-3 bg-gradient-to-r from-indigo-500 via-purple-500 to-indigo-600 
           hover:from-indigo-600 hover:to-purple-600 rounded-2xl shadow-lg shadow-indigo-900/40 
           transition transform hover:scale-110 hover:rotate-1 duration-300 ease-out">
    💡 Get Advice
  </button>

  <!-- Joke Button (gradient version) -->
  <button onclick="openModal('jokeModal'); loadJoke()" 
    class="animate-slideInRight px-6 py-3 bg-gradient-to-r from-pink-600 via-rose-500 to-pink-700 
           hover:from-pink-700 hover:via-rose-600 hover:to-pink-800 rounded-2xl shadow-lg shadow-pink-900/40 
           transition transform hover:scale-110 hover:-rotate-1 duration-300 ease-out">
    😂 Tell Me a Joke
  </button>
</div>

<!-- Advice Modal -->
<div id="adviceModal" class="hidden fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 transition-opacity duration-300">
  <div class="modal-content bg-gray-900/80 backdrop-blur-xl text-white rounded-3xl shadow-2xl p-8 max-w-md w-full relative border border-indigo-500/40 transform scale-90 opacity-0 transition-all duration-300 ease-out">
    <h2 class="text-2xl font-bold mb-4 text-indigo-400">💡 Random Advice</h2>
    <p id="adviceText" class="mb-6 text-lg italic text-gray-200">Loading...</p>
    <div class="flex justify-between">
      <button onclick="loadAdvice()" 
        class="px-5 py-2 bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 rounded-xl shadow-md transition transform hover:scale-105">
        🔄 Another One
      </button>
      <button onclick="closeModal('adviceModal')" 
        class="px-5 py-2 bg-gradient-to-r from-red-500 to-rose-600 hover:from-red-600 hover:to-rose-700 rounded-xl shadow-md transition transform hover:scale-105">
        ✖ Close
      </button>
    </div>
  </div>
</div>

<!-- Joke Modal -->
<div id="jokeModal" class="hidden fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 transition-opacity duration-300">
  <div class="modal-content bg-gray-900/80 backdrop-blur-xl text-white rounded-3xl shadow-2xl p-8 max-w-md w-full relative border border-pink-500/40 transform scale-90 opacity-0 transition-all duration-300 ease-out">
    <h2 class="text-2xl font-bold mb-4 text-pink-400">😂 Random Joke</h2>
    <p id="jokeText" class="mb-6 text-lg italic text-gray-200">Loading...</p>
    <div class="flex justify-between">
      <button onclick="loadJoke()" 
        class="px-5 py-2 bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 rounded-xl shadow-md transition transform hover:scale-105">
        🔄 Another One
      </button>
      <button onclick="closeModal('jokeModal')" 
        class="px-5 py-2 bg-gradient-to-r from-red-500 to-rose-600 hover:from-red-600 hover:to-rose-700 rounded-xl shadow-md transition transform hover:scale-105">
        ✖ Close
      </button>
    </div>
  </div>
</div>


<script>
  function openModal(id) {
  const modal = document.getElementById(id);
  const content = modal.querySelector('.modal-content');
  modal.classList.remove('hidden');
  setTimeout(() => {
    content.classList.remove('scale-90', 'opacity-0');
    content.classList.add('scale-100', 'opacity-100');
  }, 10);
}

function closeModal(id) {
  const modal = document.getElementById(id);
  const content = modal.querySelector('.modal-content');
  content.classList.remove('scale-100', 'opacity-100');
  content.classList.add('scale-90', 'opacity-0');
  setTimeout(() => {
    modal.classList.add('hidden');
  }, 300);
}

   
  

   // Advice API
    async function loadAdvice() {
      const adviceText = document.getElementById("adviceText");
      try {
        const res = await fetch("https://api.adviceslip.com/advice");
        const data = await res.json();
        adviceText.innerText = `"${data.slip.advice}"`;
      } catch {
        adviceText.innerText = "⚠️ Could not fetch advice!";
      }
    }

     // Joke API
    async function loadJoke() {
      const jokeText = document.getElementById("jokeText");
      try {
        const res = await fetch("https://official-joke-api.appspot.com/random_joke");
        const data = await res.json();
        jokeText.innerText = `😂 ${data.setup} \n\n👉 ${data.punchline}`;
      } catch {
        jokeText.innerText = "⚠️ Could not fetch a joke!";
      }
    }
</script>


  </div>
</section>




<style>
  /* Smooth animated gradient shimmer */
  @keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }
  .animate-gradient {
    background-size: 200% 200%;
    animation: gradientMove 12s ease infinite;
  }

  /* Floating orb animation */
  @keyframes orbFloat {
    0%, 100% { transform: translateY(0) translateX(0); }
    50% { transform: translateY(-40px) translateX(20px); }
  }
  .animate-orb {
    animation: orbFloat 10s ease-in-out infinite;
  }
  .delay-3000 {
    animation-delay: 3s;
  }
</style>



  

  <!-- Skills Section --------------------------------------------------------------------------------->
<section class="py-24 bg-gray-900 relative overflow-hidden" id="skills">
  <!-- Animated background -->
  <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 animate-gradient"></div>

  <div class="relative container mx-auto px-6 text-center">
    <h2 class="text-4xl font-extrabold text-blue-400 scroll-animate">Skills</h2>
    <p class="mt-3 text-gray-400 scroll-animate">Technologies I’ve learned and worked with</p>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-8 mt-14">
      
      <!-- PHP -->
      <div class="bg-gray-700 rounded-xl p-8 shadow-lg flex flex-col items-center justify-center scroll-animate hover:scale-105 transition-transform duration-300">
        <i class="devicon-php-plain colored text-6xl"></i>
        <h3 class="mt-4 text-xl font-semibold text-blue-300">PHP</h3>
      </div>

      <!-- JavaScript -->
      <div class="bg-gray-700 rounded-xl p-8 shadow-lg flex flex-col items-center justify-center scroll-animate hover:scale-105 transition-transform duration-300">
        <i class="devicon-javascript-plain colored text-6xl"></i>
        <h3 class="mt-4 text-xl font-semibold text-yellow-300">JavaScript</h3>
      </div>

      <!-- CSS -->
      <div class="bg-gray-700 rounded-xl p-8 shadow-lg flex flex-col items-center justify-center scroll-animate hover:scale-105 transition-transform duration-300">
        <i class="devicon-css3-plain colored text-6xl"></i>
        <h3 class="mt-4 text-xl font-semibold text-blue-400">CSS</h3>
      </div>

      <!-- MySQL -->
      <div class="bg-gray-700 rounded-xl p-8 shadow-lg flex flex-col items-center justify-center scroll-animate hover:scale-105 transition-transform duration-300">
        <i class="devicon-mysql-plain colored text-6xl"></i>
        <h3 class="mt-4 text-xl font-semibold text-green-400">MySQL</h3>
      </div>

      <!-- Tailwind -->
      <div class="bg-gray-700 rounded-xl p-8 shadow-lg flex flex-col items-center justify-center scroll-animate hover:scale-105 transition-transform duration-300">
        <i class="devicon-tailwindcss-plain colored text-6xl"></i>
        <h3 class="mt-4 text-xl font-semibold text-cyan-400">Tailwind CSS</h3>
      </div>

      <!-- Bootstrap -->
      <div class="bg-gray-700 rounded-xl p-8 shadow-lg flex flex-col items-center justify-center scroll-animate hover:scale-105 transition-transform duration-300">
        <i class="devicon-bootstrap-plain colored text-6xl"></i>
        <h3 class="mt-4 text-xl font-semibold text-purple-400">Bootstrap</h3>
      </div>

    </div>
  </div>
</section>

<style>
  @keyframes gradient {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }
  .animate-gradient {
    background-size: 200% 200%;
    animation: gradient 12s ease infinite;
    opacity: 0.3; /* soft effect */
  }
</style>


<!-- Education Section -------------------------------------------------------------------------------->
<section class="py-24 bg-gray-800" id="education">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-4xl font-extrabold text-blue-400 scroll-animate">Education</h2>
    <p class="mt-3 text-gray-400 scroll-animate">My academic journey through the years 🎓</p>

    <div class="mt-12 space-y-8 text-left max-w-3xl mx-auto">
      
      <!-- College -->
      <div class="bg-gray-700 rounded-xl p-6 shadow-lg scroll-animate hover:scale-105 transition-transform duration-300 hover:shadow-blue-500/30">
        <h3 class="text-2xl font-semibold text-blue-300">Bestlink College of the Philippines</h3>
        <p class="text-gray-400 italic">4th Year IT Student (Present)</p>
        <p class="mt-2 text-gray-200 text-sm leading-relaxed">Currently pursuing my Bachelor’s degree in Information Technology, focusing on software development, system design, and web technologies.</p>
      </div>

      <!-- Senior High School -->
      <div class="bg-gray-700 rounded-xl p-6 shadow-lg scroll-animate hover:scale-105 transition-transform duration-300 hover:shadow-green-500/30">
        <h3 class="text-2xl font-semibold text-green-300">Asia Pacific School of Arts and Sciences (APSAS)</h3>
        <p class="text-gray-400 italic">Senior High School – ICT Strand</p>
        <p class="mt-2 text-gray-200 text-sm leading-relaxed">Specialized in Information and Communications Technology, building a strong foundation in programming and IT fundamentals.</p>
      </div>

      <!-- Junior High School -->
      <div class="bg-gray-700 rounded-xl p-6 shadow-lg scroll-animate hover:scale-105 transition-transform duration-300 hover:shadow-yellow-500/30">
        <h3 class="text-2xl font-semibold text-yellow-300">Ernesto Rondon High School</h3>
        <p class="text-gray-400 italic">Junior High School</p>
        <p class="mt-2 text-gray-200 text-sm leading-relaxed">Completed my junior high school education with a focus on academics and extracurricular activities.</p>
      </div>

      <!-- Elementary -->
      <div class="bg-gray-700 rounded-xl p-6 shadow-lg scroll-animate hover:scale-105 transition-transform duration-300 hover:shadow-purple-500/30">
        <h3 class="text-2xl font-semibold text-purple-300">Project 6 Elementary School</h3>
        <p class="text-gray-400 italic">Elementary</p>
        <p class="mt-2 text-gray-200 text-sm leading-relaxed">Where my academic journey began, shaping my early love for learning and curiosity.</p>
      </div>

    </div>
  </div>
</section>



<!-- Hobbies & Interests Section ------------------------------------------------------------------------------------------>
<section class="py-24 bg-gray-900" id="hobbies">
  <div class="container mx-auto px-6 text-center">
    <!-- Title -->
    <h2 class="text-4xl font-extrabold text-blue-400 scroll-animate">Hobbies & Interests</h2>
    <p class="mt-3 text-gray-400 scroll-animate">A little more about what I enjoy beyond coding 🚀</p>

    <!-- Hobby Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-14">
      
      <!-- Hobby 1: Guitar -->
      <div class="bg-gray-800/90 hover:bg-gray-700 transition-all duration-300 rounded-2xl p-6 shadow-lg scroll-animate border border-gray-700">
        <div class="text-5xl mb-4">🎸</div>
        <h3 class="text-xl font-semibold text-blue-300">Playing Guitar</h3>
        <p class="mt-2 text-gray-300 text-sm">I enjoy playing guitar and expressing myself through music, whether acoustic or electric.</p>
      </div>

      <!-- Hobby 2: League of Legends -->
      <div class="bg-gray-800/90 hover:bg-gray-700 transition-all duration-300 rounded-2xl p-6 shadow-lg scroll-animate border border-gray-700">
        <div class="text-5xl mb-4">🖥️</div>
        <h3 class="text-xl font-semibold text-yellow-300">League of Legends (PC)</h3>
        <p class="mt-2 text-gray-300 text-sm">I love strategy and teamwork in competitive matches, especially when climbing the ranks.</p>
      </div>

      <!-- Hobby 3: Mobile Gaming -->
      <div class="bg-gray-800/90 hover:bg-gray-700 transition-all duration-300 rounded-2xl p-6 shadow-lg scroll-animate border border-gray-700">
        <div class="text-5xl mb-4">📱</div>
        <h3 class="text-xl font-semibold text-green-300">Mobile Games</h3>
        <p class="mt-2 text-gray-300 text-sm">Wild Rift, Mobile Legends, Honor of Kings, and Call of Duty Mobile keep me entertained on the go.</p>
      </div>

      <!-- Hobby 4: Local Music Artists -->
      <div class="bg-gray-800/90 hover:bg-gray-700 transition-all duration-300 rounded-2xl p-6 shadow-lg scroll-animate border border-gray-700">
        <div class="text-5xl mb-4">🎤</div>
        <h3 class="text-xl font-semibold text-purple-300">Local Artists</h3>
        <p class="mt-2 text-gray-300 text-sm">Arthur Nery, Hellmerry, Shantidope, O Side Mafia, Al James, and Supafly are always on my playlist.</p>
      </div>

      <!-- Hobby 5: Foreign Music Artists -->
      <div class="bg-gray-800/90 hover:bg-gray-700 transition-all duration-300 rounded-2xl p-6 shadow-lg scroll-animate border border-gray-700">
        <div class="text-5xl mb-4">🌍</div>
        <h3 class="text-xl font-semibold text-pink-300">Foreign Artists</h3>
        <p class="mt-2 text-gray-300 text-sm">Big fan of Bruno Mars, Taylor Swift, and Ed Sheeran for inspiration and good vibes.</p>
      </div>


    </div>

  </div>
</section>



  <!-- Contact Section --------------------------------------------------------------------------------------------------->
<section class="py-24 bg-gray-800" id="contact">
  <div class="container mx-auto px-6 text-center max-w-2xl">
    <h2 class="text-4xl font-extrabold text-blue-400 scroll-animate">Contact Me</h2>
    <p class="mt-4 text-gray-300 scroll-animate">I’d love to hear from you! Fill out the form below:</p>

    <!-- Contact Form -->
    <form action="https://formspree.io/f/mqadazoj" method="POST" 
      class="mt-10 space-y-6 scroll-animate bg-gray-700/80 backdrop-blur-md p-8 
             rounded-2xl shadow-2xl max-w-xl mx-auto border border-gray-600">

      <!-- Heading -->
      <h3 class="text-2xl font-bold text-blue-400 mb-4">Send Me a Message</h3>
      
      <!-- Name -->
      <input type="text" name="name" placeholder="Your Name"
        class="w-full p-4 rounded-lg bg-gray-900 text-white placeholder-gray-400 
               focus:ring-2 focus:ring-blue-500 outline-none transition transform focus:scale-[1.02]" 
        required>

      <!-- Email -->
      <input type="email" name="email" placeholder="Your Email"
        class="w-full p-4 rounded-lg bg-gray-900 text-white placeholder-gray-400 
               focus:ring-2 focus:ring-blue-500 outline-none transition transform focus:scale-[1.02]" 
        required>

      <!-- Message -->
      <textarea name="message" rows="5" placeholder="Your Message"
        class="w-full p-4 rounded-lg bg-gray-900 text-white placeholder-gray-400 
               focus:ring-2 focus:ring-blue-500 outline-none transition transform focus:scale-[1.02] resize-none" 
        required></textarea>

      <!-- Button -->
      <button type="submit"
        class="w-full py-3 rounded-lg bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 
               text-white font-semibold text-lg shadow-lg transition transform hover:scale-105 hover:shadow-blue-500/40">
        🚀 Send Message
      </button>
</form>

  </div>

  <section id="socialmedia">

  <!-- Social Links -->
  <div class="container mx-auto px-6 text-center mt-16">
    <p class="mt-3 text-gray-400 scroll-animate">Let’s stay in touch on social platforms</p>

    <div class="flex justify-center space-x-8 mt-8 scroll-animate">
      <!-- Facebook -->
      <a href="https://facebook.com/jerixhococs" target="_blank" 
         class="text-gray-400 hover:text-blue-500 transition duration-300 transform hover:scale-125 text-4xl">
        <i class="fab fa-facebook"></i>
      </a>

      <!-- Instagram -->
      <a href="https://instagram.com/jericho_lym" target="_blank" 
         class="text-gray-400 hover:text-pink-500 transition duration-300 transform hover:scale-125 text-4xl">
        <i class="fab fa-instagram"></i>
      </a>

      <!-- Email -->
      <a href="mailto:bossecho78@gmail.com" 
         class="text-gray-400 hover:text-green-400 transition duration-300 transform hover:scale-125 text-4xl">
        <i class="fas fa-envelope"></i>
      </a>
    </div>
  </div>
  </section>
</section>

 <!-- chatbot section------------------------------------------------------------------------------------>
  
 <!-- Chatbot Widget -->
<div class="fixed bottom-6 right-6 flex flex-col items-end z-50">
  <!-- Chat Window (now appears ABOVE the button) -->
  <div id="chatWindow" class="hidden flex flex-col w-80 h-96 mb-3 rounded-2xl 
      bg-gray-800 shadow-xl border border-gray-700 overflow-hidden">

    <!-- Header -->
    <div class="flex items-center justify-between p-3 
                bg-gradient-to-r from-indigo-500 via-purple-500 to-indigo-600 
                text-white">
      <h2 class="font-semibold text-lg"><i class="fas fa-robot mr-2"></i>Chatbot</h2>
      <button id="closeChat"><i class="fas fa-times"></i></button>
    </div>

    <!-- Messages -->
    <div id="messages" class="flex-1 p-3 overflow-y-auto space-y-3 bg-gray-900">
      <!-- Example -->
      <div class="text-gray-400 text-sm text-center">Say hi to start chatting!</div>
    </div>

    <!-- Input -->
    <form id="chatForm" class="flex border-t border-gray-700 bg-gray-800">
      <input type="text" id="userInput" 
        class="flex-1 px-3 py-2 bg-gray-700 text-white placeholder-gray-400 
               focus:outline-none focus:ring-2 focus:ring-blue-400" 
        placeholder="Type a message..." required>
      <button type="submit" 
        class="px-4 bg-blue-500 hover:bg-blue-400 transition text-white">
        <i class="fas fa-paper-plane"></i>
      </button>
    </form>
  </div>

  <!-- Chat Button -->
  <button id="chatToggle" 
    class="flex items-center justify-center w-14 h-14 rounded-full 
           bg-gradient-to-r from-blue-500 to-indigo-600 
           shadow-lg text-white text-2xl hover:scale-110 transition">
    <i class="fas fa-comments"></i>
  </button>
</div>


  <script>
    const chatToggle = document.getElementById("chatToggle");
    const chatWindow = document.getElementById("chatWindow");
    const closeChat = document.getElementById("closeChat");
    const chatForm = document.getElementById("chatForm");
    const userInput = document.getElementById("userInput");
    const messages = document.getElementById("messages");

    // Toggle chat window
    chatToggle.addEventListener("click", () => {
      chatWindow.classList.toggle("hidden");
    });
    closeChat.addEventListener("click", () => {
      chatWindow.classList.add("hidden");
    });

    // Add message bubble
    function addMessage(content, sender="user") {
      const bubble = document.createElement("div");
      bubble.className = sender === "user"
        ? "self-end bg-blue-500 text-white px-3 py-2 rounded-2xl max-w-[75%]"
        : "self-start bg-gray-700 text-gray-200 px-3 py-2 rounded-2xl max-w-[75%]";

      if (sender === "bot") {
        // Render bot messages with basic Markdown → HTML
        bubble.innerHTML = content
          .replace(/\*\*(.*?)\*\*/g, "<strong>$1</strong>") // **bold**
          .replace(/\[(.*?)\]\((.*?)\)/g, '<a href="$2" target="_blank" class="text-blue-400 underline">$1</a>') // [text](url)
          .replace(/([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})/g, '<a href="mailto:$1" class="text-green-400 underline">$1</a>'); // email
      } else {
        bubble.textContent = content;
      }

      messages.appendChild(bubble);
      messages.scrollTop = messages.scrollHeight;
    }

    // Handle form submit
    chatForm.addEventListener("submit", async (e) => {
      e.preventDefault();
      const text = userInput.value.trim();
      if (!text) return;

      // User message
      addMessage(text, "user");
      userInput.value = "";

      // Loading placeholder
      const loading = document.createElement("div");
      loading.className = "self-start flex space-x-1 items-center px-3 py-2 rounded-2xl bg-gray-700";
      loading.innerHTML = `
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      `;
      messages.appendChild(loading);
      messages.scrollTop = messages.scrollHeight;

      try {
        const res = await fetch("chatbot.php", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({ message: text })
        });
        const data = await res.json();

        loading.remove();
        let botReply = data.candidates?.[0]?.content?.parts?.[0]?.text || "Sorry, no response.";
        addMessage(botReply, "bot");
      } catch (err) {
        loading.remove();
        addMessage("⚠️ Error connecting to chatbot.", "bot");
      }
    });
</script>



  <!-- Footer ------------------------------------------------------>
<footer class="py-6 bg-gray-900 text-center border-t border-gray-700">

  <p class="mt-3 text-gray-300 text-sm sm:text-base">
    © 2025 <span class="font-semibold text-blue-400">BossEcho</span>. Built with 
    <span class="text-red-500">❤️</span> and 
    <span class="font-semibold text-indigo-400">Tailwind CSS</span>.
  </p>
</footer>


  <script>
    // Scroll-triggered fade/slide animation
    const scrollEls = document.querySelectorAll('.scroll-animate');

    const onScroll = () => {
      scrollEls.forEach(el => {
        const rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) {
          el.classList.add('visible');
        }
      });
    };

    window.addEventListener('scroll', onScroll);
    onScroll(); // run once on load



  </script>

 

  <!-- JS for API -->


</body>
</html>
