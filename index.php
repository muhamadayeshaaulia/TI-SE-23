<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TI SE 23 | Web Kelas</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class'
    }
  </script>

  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <style type="text/tailwindcss">
    @layer utilities {
      .text-clifford {
        color: #da373d;
      }
    }

    #mobileMenu {
      transition: transform 0.3s ease-in-out;
    }

    .translate-x-full {
      transform: translateX(100%);
    }

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      display: none;
      z-index: 40;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .overlay.visible {
      display: block;
      opacity: 1;
    }
  </style>
</head>

<body class="bg-white text-gray-800 dark:bg-gray-900 dark:text-gray-100 transition duration-300 font-sans">
  <!-- Header -->
  <header class="bg-white dark:bg-gray-800 shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl md:text-3xl font-bold text-clifford dark:text-red-400">TI SE 23</h1>

      <!-- Desktop Navbar -->
        <nav class="hidden md:flex space-x-8">
        <a href="#home" class="text-gray-500 dark:text-gray-300 hover:text-red-500 dark:hover:text-red-400 hover:border-b-2 hover:border-red-500 transition-all">Home</a>
        <a href="#about" class="text-gray-500 dark:text-gray-300 hover:text-red-500 dark:hover:text-red-400 hover:border-b-2 hover:border-red-500 transition-all">Tentang</a>
        <a href="#gallery" class="text-gray-500 dark:text-gray-300 hover:text-red-500 dark:hover:text-red-400 hover:border-b-2 hover:border-red-500 transition-all">Galeri</a>
        <a href="#articles" class="text-gray-500 dark:text-gray-300 hover:text-red-500 dark:hover:text-red-400 hover:border-b-2 hover:border-red-500 transition-all">Artikel</a>
        <a href="#contact" class="text-gray-500 dark:text-gray-300 hover:text-red-500 dark:hover:text-red-400 hover:border-b-2 hover:border-red-500 transition-all">Kontak</a>
        </nav>


      <!-- Dark Mode & Burger (mobile) -->
      <div class="md:hidden flex items-center gap-4">
        <button id="toggleDark" class="sun">
          <span id="themeIcon" data-feather="moon"></span>
        </button>
        <button id="burgerMenu" class="text-gray-500 dark:text-gray-300">
          <span class="sr-only">Open menu</span>
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile Menu -->
  <div id="mobileMenu" class="md:hidden bg-white dark:bg-gray-800 fixed top-0 right-0 w-3/4 h-full z-50 hidden transform translate-x-full shadow-lg">
    <div class="flex justify-between items-center px-6 py-4 border-b dark:border-gray-700">
      <h2 class="text-xl font-bold text-clifford dark:text-red-400">Menu</h2>
      <button id="closeMenu" class="text-gray-500 dark:text-gray-300">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
    <div class="px-6 py-4 space-y-4">
    <a href="#home" class="block text-gray-500 dark:text-gray-300 py-2 hover:text-red-500 dark:hover:text-red-400 hover:border-b-2 hover:border-red-500 transition-all" onclick="closeMobile()">Home</a>
    <a href="#about" class="block text-gray-500 dark:text-gray-300 py-2 hover:text-red-500 dark:hover:text-red-400 hover:border-b-2 hover:border-red-500 transition-all" onclick="closeMobile()">Tentang</a>
    <a href="#gallery" class="block text-gray-500 dark:text-gray-300 py-2 hover:text-red-500 dark:hover:text-red-400 hover:border-b-2 hover:border-red-500 transition-all" onclick="closeMobile()">Galeri</a>
    <a href="#articles" class="block text-gray-500 dark:text-gray-300 py-2 hover:text-red-500 dark:hover:text-red-400 hover:border-b-2 hover:border-red-500 transition-all" onclick="closeMobile()">Artikel</a>
    <a href="#contact" class="block text-gray-500 dark:text-gray-300 py-2 hover:text-red-500 dark:hover:text-red-400 hover:border-b-2 hover:border-red-500 transition-all" onclick="closeMobile()">Kontak</a>
    </div>
  </div>

  <!-- Overlay -->
  <div id="overlay" class="overlay"></div>

  <!-- Hero -->
  <section id="home" class="bg-gradient-to-r from-blue-100 to-purple-100 dark:from-gray-800 dark:to-gray-700 py-20">
    <div class="max-w-5xl mx-auto px-4 text-center mb-10" data-aos="fade-down">
      <h2 class="text-4xl font-bold mb-4 text-clifford dark:text-red-400">Selamat Datang di Web Kelas TI SE 23</h2>
      <p class="text-lg text-gray-700 dark:text-gray-300 mb-10">
        Website ini menampilkan profil kelas, galeri, dan dokumentasi kegiatan TI SE 23.
      </p>
    </div>

    <div class="swiper mySwiper w-full max-w-3xl mx-auto rounded-lg overflow-hidden shadow-lg" data-aos="fade-up">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="./asset/image/bca.jpeg" class="w-full" /></div>
        <div class="swiper-slide"><img src="https://source.unsplash.com/random/601x400?team" class="w-full" /></div>
        <div class="swiper-slide"><img src="https://source.unsplash.com/random/602x400?student" class="w-full" /></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <!-- About -->
  <section id="about" class="max-w-5xl mx-auto py-12 px-6" data-aos="fade-up" data-aos-duration="1000">
    <h3 class="text-2xl font-bold mb-4">Tentang Kelas Kami</h3>
    <p class="leading-relaxed text-gray-700 dark:text-gray-300">
      Kami adalah mahasiswa dari jurusan Teknik Informatika, konsentrasi Software Engineering angkatan 2023.
      Kami belajar banyak hal, mulai dari pengembangan web, mobile apps, AI, hingga pengelolaan proyek IT.
    </p>
  </section>

  <!-- Gallery -->
  <section id="gallery" class="max-w-6xl mx-auto px-6 py-12" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
    <h3 class="text-2xl font-bold mb-8 text-center">Galeri Teman Kelas</h3>
    <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
      <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4 text-center hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="100">
        <img src="https://via.placeholder.com/150" class="rounded-full mx-auto w-24 h-24 object-cover mb-2" />
        <h4 class="text-lg font-semibold">Aisyah Rahma</h4>
        <p class="text-sm text-gray-500 dark:text-gray-300">UI/UX Designer</p>
      </div>
      <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4 text-center hover:shadow-lg transition" data-aos="zoom-in" data-aos-delay="200">
        <img src="https://via.placeholder.com/150" class="rounded-full mx-auto w-24 h-24 object-cover mb-2" />
        <h4 class="text-lg font-semibold">Dio Pratama</h4>
        <p class="text-sm text-gray-500 dark:text-gray-300">Backend Developer</p>
      </div>
    </div>
  </section>

  <!-- Articles -->
  <section id="articles" class="max-w-5xl mx-auto px-6 py-12" data-aos="fade-up" data-aos-duration="1000">
    <h3 class="text-2xl font-bold mb-6">Artikel & Kegiatan Kelas</h3>
    <article class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow hover:shadow-md transition">
      <h4 class="text-xl font-semibold mb-2">Workshop Pengembangan Web</h4>
      <p class="text-gray-600 dark:text-gray-300 text-sm">
        Kelas TI SE 23 mengadakan workshop internal tentang pengembangan web menggunakan Tailwind CSS dan React.
      </p>
    </article>
  </section>

  <!-- Contact -->
  <section id="contact" class="bg-white dark:bg-gray-800 py-16 px-6" data-aos="fade-up" data-aos-duration="1000">
    <div class="max-w-3xl mx-auto text-center">
      <h3 class="text-2xl font-bold mb-6">Hubungi Kami</h3>
      <form action="https://formsubmit.co/youremail@gmail.com" method="POST" class="space-y-4 text-left">
        <input type="hidden" name="_captcha" value="false" />
        <input type="hidden" name="_subject" value="Pesan dari Web TI SE 23" />
        <input type="text" name="nama" placeholder="Nama" class="w-full p-3 border border-gray-300 rounded dark:bg-gray-700" required />
        <input type="email" name="email" placeholder="Email" class="w-full p-3 border border-gray-300 rounded dark:bg-gray-700" required />
        <textarea name="pesan" placeholder="Pesan" rows="4" class="w-full p-3 border border-gray-300 rounded dark:bg-gray-700" required></textarea>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-red-600 transition">Kirim Pesan</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 text-sm text-gray-800 dark:text-gray-200 bg-gradient-to-r from-blue-100 to-purple-100 dark:from-gray-800 dark:to-gray-700 border-t dark:border-gray-700">
    &copy; 2025 TI SE 23 — Kelas Software Engineering
  </footer>

  <script src="./js/index.js"></script>
</body>

</html>
