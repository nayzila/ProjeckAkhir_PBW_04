<?php include 'header.php'; ?>
<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}

include '../koneksi.php';


if (isset($_GET['hapus'])) {
  $id = $_GET['hapus'];
  mysqli_query($conn, "DELETE FROM kontak WHERE id_kontak=$id");
  header("Location: kontak_admin.php");
  exit;
}

// Ambil semua data
$kontak = mysqli_query($conn, "SELECT * FROM kontak ORDER BY id_kontak DESC");

if (!$kontak) {
  die("Query error: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin - Pesan Masuk</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
    <div class="bg-white p-6 rounded-xl shadow">
      <h2 class="text-xl font-semibold text-blue-600 mb-4">Daftar Pesan</h2>
      <div class="overflow-x-auto">
        <table class="w-full table-auto border text-sm">
          <thead>
            <tr class="bg-blue-100 text-blue-700">
              <th class="p-2 border">Nama</th>
              <th class="p-2 border">Telepon</th>
              <th class="p-2 border">Email</th>
              <th class="p-2 border">Pesan</th>
              <th class="p-2 border">Tanggal</th>
              <th class="p-2 border">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_assoc($kontak)): ?>
              <tr>
                <td class="p-2 border"><?= htmlspecialchars($row['nama']) ?></td>
                <td class="p-2 border"><?= htmlspecialchars($row['email']) ?></td>
                <td class="p-2 border"><?= htmlspecialchars($row['telepon']) ?></td>
                <td class="p-2 border"><?= htmlspecialchars($row['pesan']) ?></td>
                <td class="p-2 border"><?= htmlspecialchars($row['tanggal_kirim']) ?></td>
                <td class="p-2 border text-center">
                  <a href="?hapus=<?= $row['id_kontak'] ?>" onclick="return confirm('Hapus pesan ini?')" class="text-red-500 hover:underline">Hapus</a>
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>
</html>
