<?php include 'koneksi.php'; ?>
<?php include 'header.php'; ?>

<div class="p-6 max-w-4xl mx-auto">
  <h1 class="text-2xl text-center font-bold mb-6">Kontak Posyandu</h1>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    
    <div class="bg-white shadow rounded p-4">
      <p class="mb-2"><strong>Alamat :</strong> Balai Desa Tempel, Jl. Pelayaran, Kec. Krian<br>Kab. Sidoarjo, jawa timur Kode Pos. 61262</p>
      <p class="mb-4"><strong>Telepon :</strong> 0812-1734-0335</p>
      <p class="mb-4"><strong>Email :</strong> posyandubalita@gmail.ac.id</p>
      <p class="mb-4"><strong>Instagram :</strong> @psyndbalita</p>
      <p class="mb-4"><strong>Jadwal :</strong> Senin - Jumat, 8.00 Sampai 16.00 WIB</p>
      <a href="https://wa.me/+6287851287741" target="_blank"class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Hubungi via WhatsApp</a>
    </div>

    
    <form method="POST" action="" class="bg-white shadow rounded p-4">
      <h2 class="text-xl font-bold mb-4 leading-snug">Kirim Pesan Keluhan Anda</h2>

      <label class="block mb-1 font-medium">Nama</label>
      <input type="text" name="nama" class="w-full border rounded p-2 mb-3" required>

      <label class="block mb-1 font-medium">Email</label>
      <input type="email" name="email" class="w-full border rounded p-2 mb-3" required>

      <label class="block mb-1 font-medium">Nomor Telepon</label>
      <input type="text" name="telepon" class="w-full border rounded p-2 mb-3" required>

      <label class="block mb-1 font-medium">Pesan</label>
      <input name="pesan" rows="4" class="w-full border rounded p-2 mb-4" required>

      <button type="submit" name="kirim"
              class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
        Kirim
      </button>
    </form>
  </div>

  
  <?php
  if (isset($_POST['kirim'])) {
      $nama = htmlspecialchars($_POST['nama']);
      $email = htmlspecialchars($_POST['email']);
      $telepon = htmlspecialchars($_POST['telepon']);
      $pesan = htmlspecialchars($_POST['pesan']);

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "<p class='text-red-600 mt-4'>Email tidak valid.</p>";
      } elseif (!preg_match('/^[0-9\+\-\s]+$/', $telepon)) {
          echo "<p class='text-red-600 mt-4'>Nomor telepon tidak valid.</p>";
      } else {

        $query = "INSERT INTO kontak (nama, email, telepon, pesan) VALUES ('$nama', '$telepon', '$email', '$pesan')";
        if (mysqli_query($conn, $query)) {
            echo "<p class='text-green-600 mt-4'>Pesan berhasil dikirim!</p>";
        } else {
            echo "<p class='text-red-600 mt-4'>Terjadi kesalahan dalam pengiriman.</p>";
        }
    }
  }
  ?>
</div>

<?php include 'footer.php'; ?>



