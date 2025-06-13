<?php include 'koneksi.php'; ?>
<?php include 'header.php'; ?>

<div class="flex items-center p-8 mb-16">
  <div class="md:w-1/2">
    <h1 class="text-6xl font-bold leading-tight text-gray-900 mb-8">
      Selamat Datang di<br>
      Website Informasi<br>
      Posyandu Balita
    </h1>
    <p class="text-gray-700">Posyandu Balita "Sehat Ceria" - Melayani dengan Cinta</p>
  </div>

  <div class="lg:w-1/2 ">
    <img src="img/img1.png" alt="Ilustrasi Posyandu" class="w-full">
  </div>
</div>

<div class="flex lg:flex-row-reverse items-center bg-blue-100 p-8 gap-20">
  <div class="lg:w-1/2">
    <h2 class="text-xl text-blue-600 font-bold mb-2">Tentang Kami</h2>
    <p class="text-4xl font-bold text-black mb-8">Informasi Posyandu Balita</p>
    <p class="text-gray-600 mb-4">
      Posyandu kami menyediakan layanan kesehatan yang lengkap,<br>
      termasuk pemeriksaan rutin untuk balita, program imunisasi, konsultasi gizi, penyuluhan kesehatan, serta pemantauan pertumbuhan balita.<br>
      Dengan komitmen pada kualitas pelayanan dan pencegahan penyakit, kami berupaya menciptakan generasi yang lebih sehat dan berkualitas di masa depan.
    </p>
    <p class="text-2xl font-medium text-black mb-4">Layanan, Fasilitas, Kelebihan Posyandu Balita</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-700">
      <div class="flex items-start gap-2">
        <div class="text-white">
          ✔
        </div>
        <span>Fasilitas yang nyaman dan bersih</span>
      </div>
      <div class="flex items-start gap-2">
        <div class="text-white">
          ✔
        </div>
        <span>Pelayanan yang ramah</span>
      </div>
      <div class="flex items-start gap-2">
        <div class="text-white">
          ✔
        </div>
        <span>Tenaga kesehatan yang sigap dan cekatan</span>
      </div>
      <div class="flex items-start gap-2">
        <div class="text-white">
          ✔
        </div>
        <span>Terjangkau serta mudah</span>
      </div>
    </div>
  </div>
  <div class="lg:w-1/2">
    <img src="img/img2.png" alt="Tentang Kami" class="w-full">
  </div>
</div>
    <div class="bg-blue-100 text-black mx-auto grid md:grid-cols-4">
      <div class="flex flex-col items-center mb-10">
        <div class="text-4xl mb-4">🎓</div>
        <h3 class="font-bold">Layanan Pendidikan</h3>
      </div>
      <div class="flex flex-col items-center">
        <div class="text-4xl mb-4">🏥</div>
        <h3 class="font-bold">Pelayanan Kesehatan</h3>
      </div>
      <div class="flex flex-col items-center">
        <div class="text-4xl mb-4">👨‍👩‍👧‍👦</div>
        <h3 class="font-bold">Sosial Masyarakat</h3>
      </div>
      <div class="flex flex-col items-center">
        <div class="text-4xl mb-4">🌿</div>
        <h3 class="font-bold">Lingkungan Hidup</h3>
      </div>
    </div>


<?php
    
    $jumlah_bayi = 278;
  ?>

  
  <div class="bg-green-100 mt-8 text-black p-4 rounded-lg  text-center">
    <p class="text-lg font-semibold">👶 Posyandu kita telah menerima <span class="text-2xl font-bold"><?= $jumlah_bayi ?></span> bayi hingga saat ini.</p>
  </div>
<section class="bg-white py-10">
  <div class="text-center mb-10">
    <h2 class="text-3xl font-bold text-blue-800">Struktur Petugas Posyandu</h2>
    <p class="text-black mt-2">Kenali para petugas yang siap melayani Anda</p>
  </div>

  <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-4">
   
    <div class="bg-blue-100 rounded-lg shadow p-5 text-center">
      <img src="img/dokter.jpeg" alt="Dokter Posyandu" class="w-32 h-32 mx-auto rounded-full object-cover mb-4">
      <h3 class="text-xl font-semibold text-blue-700">dr. Boy Wiliam</h3>
      <p class="text-gray-500">Dokter Posyandu</p>
    </div>

    
    <div class="bg-blue-100 rounded-lg shadow p-5 text-center">
      <img src="img/kader1.jpeg" alt="Bidan Posyandu" class="w-32 h-32 mx-auto rounded-full object-cover mb-4">
      <h3 class="text-xl font-semibold text-blue-700">Nurul Hidayah</h3>
      <p class="text-gray-500">Kader Posyandu</p>
    </div>

    
    <div class="bg-blue-100 rounded-lg shadow p-5 text-center">
      <img src="img/kader2.jpeg" alt="Kader Posyandu" class="w-32 h-32 mx-auto rounded-full object-cover mb-4">
      <h3 class="text-xl font-semibold text-blue-700">Siti Aminah</h3>
      <p class="text-gray-500">Kader Posyandu</p>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
