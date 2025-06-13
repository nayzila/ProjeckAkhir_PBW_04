<?php include 'header.php'; ?>
<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}

include '../koneksi.php';


if (isset($_POST['tambah'])) {
  $judul = $_POST['judul'];
  $tanggal = $_POST['tanggal'];
  $waktu = $_POST['waktu'];
  $lokasi = $_POST['lokasi'];
  $deskripsi = $_POST['deskripsi'];

  mysqli_query($conn, "INSERT INTO agenda_balita (judul, tanggal, waktu, lokasi, deskripsi) 
    VALUES ('$judul', '$tanggal', '$waktu', '$lokasi', '$deskripsi')");
  header("Location: agenda_admin.php");
  exit;
}

if (isset($_GET['hapus'])) {
  $id = $_GET['hapus'];
  mysqli_query($conn, "DELETE FROM agenda_balita WHERE id=$id");
  header("Location: agenda_admin.php");
  exit;
}


$editMode = false;
if (isset($_GET['edit'])) {
  $editMode = true;
  $idEdit = $_GET['edit'];
  $result = mysqli_query($conn, "SELECT * FROM agenda_balita WHERE id=$idEdit");
  $dataEdit = mysqli_fetch_assoc($result);
}


if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $judul = $_POST['judul'];
  $tanggal = $_POST['tanggal'];
  $waktu = $_POST['waktu'];
  $lokasi = $_POST['lokasi'];
  $deskripsi = $_POST['deskripsi'];

  mysqli_query($conn, "UPDATE agenda_balita SET 
    judul='$judul',
    tanggal='$tanggal',
    waktu='$waktu',
    lokasi='$lokasi',
    deskripsi='$deskripsi'
    WHERE id=$id");
  header("Location: agenda_admin.php");
  exit;
}

// Ambil semua data agenda
$agenda = mysqli_query($conn, "SELECT * FROM agenda_balita ORDER BY tanggal ASC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin - Agenda Posyandu Balita</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 min-h-screen py-10 px-4">

    <!-- Form Tambah/Edit Agenda -->
    <div class="bg-white p-6 rounded-xl shadow mb-8">
      <h2 class="text-xl font-semibold text-blue-600 mb-4">
        <?= $editMode ? 'Edit Agenda' : 'Tambah Agenda Baru' ?>
      </h2>
      <form method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <?php if ($editMode): ?>
          <input type="hidden" name="id" value="<?= $dataEdit['id'] ?>">
        <?php endif; ?>
        <input type="text" name="judul" placeholder="Judul" required class="p-2 border rounded"
          value="<?= $editMode ? htmlspecialchars($dataEdit['judul']) : '' ?>">
        <input type="date" name="tanggal" required class="p-2 border rounded"
          value="<?= $editMode ? $dataEdit['tanggal'] : '' ?>">
        <input type="text" name="waktu" placeholder="Waktu (contoh: 08:00 - 10:00 WIB)" required class="p-2 border rounded"
          value="<?= $editMode ? htmlspecialchars($dataEdit['waktu']) : '' ?>">
        <input type="text" name="lokasi" placeholder="Lokasi" required class="p-2 border rounded"
          value="<?= $editMode ? htmlspecialchars($dataEdit['lokasi']) : '' ?>">
        <textarea name="deskripsi" placeholder="Deskripsi kegiatan" required class="p-2 border rounded md:col-span-2"><?= $editMode ? htmlspecialchars($dataEdit['deskripsi']) : '' ?></textarea>
        <div class="flex gap-4 md:col-span-2">
          <button type="submit" name="<?= $editMode ? 'update' : 'tambah' ?>" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">
            <?= $editMode ? 'Simpan Perubahan' : 'Tambah' ?>
          </button>
          <?php if ($editMode): ?>
            <a href="agenda_admin.php" class="text-gray-500 hover:underline self-center">Batal Edit</a>
          <?php endif; ?>
        </div>
      </form>
    </div>

    <!-- Tabel Agenda -->
    <div class="bg-white p-6 rounded-xl shadow">
      <h2 class="text-xl font-semibold text-blue-600 mb-4">Daftar Agenda</h2>
      <div class="overflow-x-auto">
        <table class="w-full table-auto border text-sm">
          <thead>
            <tr class="bg-blue-100 text-blue-700">
              <th class="p-2 border">Judul</th>
              <th class="p-2 border">Tanggal</th>
              <th class="p-2 border">Waktu</th>
              <th class="p-2 border">Lokasi</th>
              <th class="p-2 border">Deskripsi</th>
              <th class="p-2 border">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_assoc($agenda)): ?>
              <tr>
                <td class="p-2 border"><?= htmlspecialchars($row['judul']) ?></td>
                <td class="p-2 border"><?= htmlspecialchars($row['tanggal']) ?></td>
                <td class="p-2 border"><?= htmlspecialchars($row['waktu']) ?></td>
                <td class="p-2 border"><?= htmlspecialchars($row['lokasi']) ?></td>
                <td class="p-2 border"><?= htmlspecialchars($row['deskripsi']) ?></td>
                <td class="p-2 border text-center space-x-2">
                  <a href="agenda_admin.php?edit=<?= $row['id'] ?>" class="text-blue-500 hover:underline">Edit</a>
                  <a href="agenda_admin.php?hapus=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus agenda ini?')" class="text-red-500 hover:underline">Hapus</a>
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
