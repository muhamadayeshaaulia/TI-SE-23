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
  <?php include('./include/nav.php');?>
  <?php include('./include/hero.php');?>
  <?php include('./include/about.php');?>
  <?php include('./include/jadwal.php');?>
  <?php include('./include/galery.php');?>
  <?php include('./include/kontak.php');?>
  <?php include('./include/footer.php');?>
  <script src="./js/index.js"></script>
</body>
</html>
