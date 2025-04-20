<section id="jadwal" class="max-w-3xl mx-auto px-6 py-12">
  <h2 class="text-2xl font-bold mb-4 text-center text-red-600 dark:text-red-400">Jadwal Kelas Hari Ini</h2>
  <div id="jadwalContainer" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow text-gray-700 dark:text-gray-200">
    <!-- Jadwal akan diisi oleh JavaScript -->
  </div>
</section>

<script>
 // Jadwal per hari
 const jadwalHarian = {
  "Senin": [
    { jam: "08.00 - 10.00", mataKuliah: "Pemrograman Web" },
    { jam: "10.15 - 12.00", mataKuliah: "Struktur Data" },
    { jam: "13.00 - 15.00", mataKuliah: "Basis Data" },
  ],
  "Selasa": [
    { jam: "09.00 - 11.00", mataKuliah: "Matematika Diskrit" },
    { jam: "13.00 - 15.00", mataKuliah: "Algoritma & Pemrograman" },
  ],
  "Rabu": [
    { jam: "08.00 - 10.00", mataKuliah: "Desain UI/UX" },
    { jam: "10.30 - 12.30", mataKuliah: "Manajemen Proyek TI" },
  ],
  "Kamis": [
    { jam: "08.00 - 10.00", mataKuliah: "Pemrograman Mobile" },
    { jam: "10.15 - 12.00", mataKuliah: "Kecerdasan Buatan" },
  ],
  "Jumat": [
    { jam: "09.00 - 11.00", mataKuliah: "Jaringan Komputer" },
    { jam: "13.00 - 14.30", mataKuliah: "Etika Profesi TI" },
  ],
  "Sabtu": [
    { jam: "09.00 - 11.00", mataKuliah: "Praktikum Pemrograman Web" },
  ],
  "Minggu": [
    { jam: "-", mataKuliah: "Libur 🎉" },
  ],
};

// Fungsi tampilkan jadwal
function tampilkanJadwalHariIni() {
  const hari = new Date().toLocaleDateString("id-ID", { weekday: "long" });
  const jadwalHariIni = jadwalHarian[hari] || [{ jam: "-", mataKuliah: "Tidak ada jadwal" }];
  const container = document.getElementById("jadwalContainer");

  if (!container) return;

  container.innerHTML = `
    <h3 class="text-xl font-semibold mb-4">Hari: ${hari}</h3>
    <ul class="space-y-3">
      ${jadwalHariIni.map(j => `
        <li class="p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
          <span class="font-semibold">${j.jam}</span> - ${j.mataKuliah}
        </li>
      `).join('')}
    </ul>
  `;
}

// Panggil saat DOM siap
document.addEventListener("DOMContentLoaded", tampilkanJadwalHariIni);

</script>
