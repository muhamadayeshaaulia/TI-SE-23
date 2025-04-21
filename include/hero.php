<style>
@keyframes slideOut {
  10% {
    opacity: 1;
  }
  50% {
    transform: translateX(0); /* Tengah */
    opacity: 1;
  }
  100% {
    transform: translateX(-100%); /* Keluar ke kiri */
    opacity: 0;
  }
}

.slide-once {
  animation: slideOut 5s ease-in-out forwards;
}

@keyframes slideUp {
  0% {
    transform: translateY(0);
    opacity: 0;
  }
  100% {
    transform: translateY(-100px); /* Naik lebih tinggi */
    opacity: 1;
  }
}

.move-up-after {
  animation: slideUp 1s ease-out forwards;
  animation-delay: 5s; /* Menunggu animasi teks selesai */
  opacity: 0;
  animation-fill-mode: forwards;
}

</style>

<section id="home" class="bg-[url('./asset/image/gi.jpeg')] bg-cover bg-center bg-no-repeat py-20">
  <div class="max-w-5xl mx-auto px-4 text-center mb-10" data-aos="fade-down">
    <h2 class="text-4xl font-bold mb-4 text-clifford dark:text-red-400 slide-once">
      Selamat Datang di Kelas TI SE 23
    </h2>
    <p class="text-lg text-gray-700 dark:text-gray-300 mb-10 slide-once">
     <b> Kami siap bersaing dalam dunia teknologi yg terus berkembang untuk negara dan dunia.
    </p>
  </div>

  <div class="swiper mySwiper w-full max-w-5xl aspect-[16/9] mx-auto rounded-lg overflow-hidden shadow-lg move-up-after" data-aos="fade-up">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="./asset/image/hero1.jpg" class="w-full h-full object-cover" />
      </div>
      <div class="swiper-slide">
        <img src="./asset/image/hero2.jpg" class="w-full h-full object-cover" />
      </div>
      <div class="swiper-slide">
        <img src="./asset/image/hero3.jpg" class="w-full h-full object-cover" />
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>
