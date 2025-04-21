<section id="gallery" class="max-w-6xl mx-auto px-6 py-12" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
  <h3 class="text-2xl font-bold mb-8 text-center text-red-600 dark:text-red-400">
    Daftar Mahasiswa Kelas <b>TI SE 23 P2</b>
  </h3>

  <div id="studentGrid" class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

    <div class="student-card bg-white dark:bg-gray-800 shadow rounded-lg p-4 text-center hover:shadow-lg transition cursor-pointer"
         onclick="openModal(this)"
         data-name="Aisyah Rahma"
         data-nim="1123150001"
         data-class="TI SE 23 P2"
         data-skill="UI/UX Designer"
         data-photo="./asset/image/user.jpeg"
         data-social="https://instagram.com/aisyahrahma"
         data-website="https://aisyahportfolio.com">
      <img src="./asset/image/user.jpeg" class="rounded-full mx-auto w-24 h-24 object-cover mb-2" />
      <h4 class="text-lg font-semibold">Aisyah Rahma</h4>
      <p class="text-sm text-gray-500 dark:text-gray-300">UI/UX Designer</p>
    </div>

    <div class="student-card bg-white dark:bg-gray-800 shadow rounded-lg p-4 text-center hover:shadow-lg transition cursor-pointer"
         onclick="openModal(this)"
         data-name="Dio Pratama"
         data-nim="1123150002"
         data-class="TI SE 23 P2"
         data-skill="Backend Developer"
         data-photo="https://via.placeholder.com/150"
         data-social="https://instagram.com/diopratama"
         data-website="https://diodev.tech">
      <img src="https://via.placeholder.com/150" class="rounded-full mx-auto w-24 h-24 object-cover mb-2" />
      <h4 class="text-lg font-semibold">Dio Pratama</h4>
      <p class="text-sm text-gray-500 dark:text-gray-300">Backend Developer</p>
    </div>

    <div class="student-card hidden-more bg-white dark:bg-gray-800 shadow rounded-lg p-4 text-center hover:shadow-lg transition cursor-pointer"
         onclick="openModal(this)"
         data-name="Farah Anjani"
         data-nim="1123150003"
         data-class="TI SE 23 P2"
         data-skill="Frontend Developer"
         data-photo="https://via.placeholder.com/150"
         data-social="https://instagram.com/farahanjani"
         data-website="#">
      <img src="https://via.placeholder.com/150" class="rounded-full mx-auto w-24 h-24 object-cover mb-2" />
      <h4 class="text-lg font-semibold">Farah Anjani</h4>
      <p class="text-sm text-gray-500 dark:text-gray-300">Frontend Developer</p>
    </div>
  </div>

  <div class="text-center mt-8">
    <button id="toggleBtn" onclick="toggleMore()" class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded">
      Lihat lebih banyak
    </button>
  </div>
</section>

<div id="studentModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 invisible opacity-0 transition-opacity duration-300">
  <div class="relative bg-white dark:bg-gray-900 rounded-lg p-6 w-full max-w-md transform transition-transform duration-300 scale-95">
    <button id="closeModal" class="absolute top-3 right-4 text-2xl text-gray-600 hover:text-black dark:hover:text-white">&times;</button>
    <div class="text-center">
      <img id="modalPhoto" src="" alt="" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
      <h4 id="modalName" class="text-xl font-bold mb-1"></h4>
      <p id="modalNim" class="text-sm text-gray-600 dark:text-gray-300"></p>
      <p id="modalClass" class="text-sm text-gray-600 dark:text-gray-300"></p>
      <p id="modalSkill" class="text-sm text-gray-600 dark:text-gray-300 mb-4"></p>
      <div class="flex justify-center gap-4">
        <a id="modalSocial" href="#" target="_blank" class="text-blue-500 hover:underline">Instagram</a>
        <a id="modalWebsite" href="#" target="_blank" class="text-blue-500 hover:underline">Website</a>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const hiddenCards = document.querySelectorAll('.hidden-more');
    hiddenCards.forEach(card => card.classList.add('hidden'));
    updateToggleButton();
  });

  function openModal(card) {
    const modal = document.getElementById('studentModal');
    const modalPhoto = document.getElementById('modalPhoto');
    document.getElementById('modalName').textContent = card.dataset.name;
    document.getElementById('modalNim').textContent = "NIM: " + card.dataset.nim;
    document.getElementById('modalClass').textContent = "Kelas: " + card.dataset.class;
    document.getElementById('modalSkill').textContent = "Keahlian: " + card.dataset.skill;
    modalPhoto.src = card.dataset.photo;
    modalPhoto.alt = card.dataset.name;

    document.getElementById('modalSocial').href = card.dataset.social || "#";
    document.getElementById('modalWebsite').href = card.dataset.website || "#";

    modal.classList.remove('invisible', 'opacity-0');
    modal.classList.add('visible', 'opacity-100');
    modal.querySelector('div').classList.remove('scale-95');
    modal.querySelector('div').classList.add('scale-100');

    document.body.style.overflow = 'hidden';
  }

  function closeModal() {
    const modal = document.getElementById('studentModal');
    modal.classList.remove('visible', 'opacity-100');
    modal.classList.add('invisible', 'opacity-0');
    modal.querySelector('div').classList.remove('scale-100');
    modal.querySelector('div').classList.add('scale-95');
    document.body.style.overflow = '';
  }

  document.getElementById('closeModal').addEventListener('click', closeModal);
  document.getElementById('studentModal').addEventListener('click', function (e) {
    if (e.target === this) closeModal();
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeModal();
  });

  function toggleMore() {
    const hiddenCards = document.querySelectorAll('.hidden-more');
    hiddenCards.forEach(card => card.classList.toggle('hidden'));
    updateToggleButton();
  }

  function updateToggleButton() {
    const btn = document.getElementById('toggleBtn');
    const anyHidden = document.querySelector('.hidden-more.hidden');
    btn.textContent = anyHidden ? "Lihat lebih banyak" : "Lihat lebih sedikit";
  }
</script>
