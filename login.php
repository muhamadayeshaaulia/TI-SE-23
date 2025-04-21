<!DOCTYPE html>
<html lang="en" class="">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="TI SE 23 adalah kelas jurusan Teknik Informatika di Global Institute. Temukan informasi lengkap tentang jadwal, galeri, dan konten terkait kelas ini." />
  <meta name="keywords" content="TI SE 23, Teknik Informatika, kelas TI SE, jurusan teknik informatika, Global Institute" />
  <meta name="author" content="Muhamad Ayesha Aulia" />

  <meta property="og:title" content="TI SE 23 | Web Kelas" />
  <meta property="og:description" content="Temukan informasi tentang kelas TI SE 23, jadwal kuliah, galeri, dan banyak lagi." />
  <meta property="og:image" content="./asset/image/SEP2.png" />
  <meta property="og:url" content="URL Halaman Web" />
  <meta property="og:type" content="website" />
  
  <title>TI SE 23 | Login</title>
  <link rel="icon" href="./asset/image/SEP2.png" type="image/x-icon" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="tailwind.config.js"></script>
  <link rel="stylesheet" href="./style/login.css">
</head>
<body>

  <section class="h-screen pt-[2%] relative flex items-center justify-center">
    <div class="top-blue w-[250px] h-[250px] bg-blue-400 rounded-full absolute left-[50%] animate-top-blue"></div>
    <div class="bottom-pink w-[280px] h-[280px] rounded-full absolute top-[50%] left-[12%] lg:left-[30%] animate-bottom-pink bg-gradient-to-br from-custom-purple to-custom-pink"></div>
    <div class="top-orange w-[300px] h-[300px] rounded-full absolute top-[5%] left-[5%] md:left-[23%] lg:left-[30%] animate-top-orange bg-gradient-to-br from-red-800 to-custom-orange"></div>
    <div class="container w-[350px] sm:w-[350px] m-auto text-center p-8 z-10 backdrop-blur-2xl rounded-2xl border-b-4 border-l-4 border-white/30 shadow-lg">
      <img 
        src="https://upload.wikimedia.org/wikipedia/commons/6/67/User_Avatar.png" 
        alt="Avatar"
        class="mx-auto w-[120px] rounded-full border-4 border-white mb-6 animate-passport"
      />
      <p class="text-xl sm:text-2xl mb-4">Login Here</p>
      <hr class="border-white/40 mb-4">

      <form action="#" method="POST" class="bg-black/10 rounded-xl p-4">
        <input 
          type="text" 
          placeholder="Username..." 
          class="w-full p-3 mb-4 rounded-md bg-black/30 text-white placeholder-white/60 text-lg focus:outline-none focus:bg-transparent focus:italic"
        />
        <input 
          type="password" 
          placeholder="Password..." 
          class="w-full p-3 mb-4 rounded-md bg-black/30 text-white placeholder-white/60 text-lg focus:outline-none focus:bg-transparent focus:italic"
        />
        <button 
          type="submit"
          class="p-3 text-lg bg-blue-500 rounded-2xl w-full hover:bg-gradient-to-r hover:from-orange-500 hover:via-pink-500 hover:to-pink-700 transition-all"
        >
          Login
        </button>            
      </form>

      <p class="mt-4">Welcome To TI SE 23 P2
      </p>
    </div>
  </section>

</body>
</html>
