<header class="bg-white bg-gradient-to-r from-blue-100 to-purple-100 dark:from-gray-800 dark:to-gray-700 border-t dark:border-gray-700 shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl md:text-3xl font-bold text-clifford dark:text-red-400">TI SE 23</h1>

        <nav class="hidden md:flex space-x-8">
        <a href="#home" class="text-gray-500 dark:text-gray-300 hover:text-red-500 dark:hover:text-red-400 hover:border-b-2 hover:border-red-500 transition-all">Home</a>
        <a href="#about" class="text-gray-500 dark:text-gray-300 hover:text-red-500 dark:hover:text-red-400 hover:border-b-2 hover:border-red-500 transition-all">Tentang</a>
        <a href="#gallery" class="text-gray-500 dark:text-gray-300 hover:text-red-500 dark:hover:text-red-400 hover:border-b-2 hover:border-red-500 transition-all">Galeri</a>
        <a href="#articles" class="text-gray-500 dark:text-gray-300 hover:text-red-500 dark:hover:text-red-400 hover:border-b-2 hover:border-red-500 transition-all">Artikel</a>
        <a href="#contact" class="text-gray-500 dark:text-gray-300 hover:text-red-500 dark:hover:text-red-400 hover:border-b-2 hover:border-red-500 transition-all">Kontak</a>
        </nav>

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

  <div id="mobileMenu" class="md:hidden bg-gradient-to-r from-blue-100 to-purple-100 dark:from-gray-800 dark:to-gray-700 border-t dark:border-gray-700 fixed top-0 right-0 w-3/4 h-full z-50 hidden transform translate-x-full shadow-lg">
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

  <div id="overlay" class="overlay"></div>