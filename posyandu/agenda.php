<?php include 'header.php'; ?>
<?php include 'koneksi.php'; ?>

<div class="p-6 max-w-6xl mx-auto">
  <h1 class="text-2xl font-bold mb-6 text-center">Agenda Kegiatan Posyandu Balita</h1>

  <?php
    $query = mysqli_query($conn, "SELECT * FROM agenda_balita ORDER BY tanggal ASC");
  ?>

  


  <div class="space-y-6">
    <?php while($agenda = mysqli_fetch_assoc($query)): ?>
      <div class="bg-white rounded-xl shadow-md p-5 hover:shadow-lg transition">
        <h2 class="text-xl font-semibold text-gray-800 mb-1"><?= htmlspecialchars($agenda['judul']) ?></h2>
        <p class="text-sm text-gray-600 mb-1">
          <strong>Tanggal:</strong> <?= date("d M Y", strtotime($agenda['tanggal'])) ?> |
          <strong>Waktu:</strong> <?= htmlspecialchars($agenda['waktu']) ?>
        </p>
        <p class="text-sm text-gray-600 mb-1">
          <strong>Lokasi:</strong> <?= htmlspecialchars($agenda['lokasi']) ?>
        </p>
        <p class="text-sm text-gray-700 mt-2"><?= nl2br(htmlspecialchars($agenda['deskripsi'])) ?></p>
      </div>
    <?php endwhile; ?>
  </div>
</div>

<?php include 'footer.php'; ?>
