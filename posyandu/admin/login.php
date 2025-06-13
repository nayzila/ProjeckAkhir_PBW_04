<?php
session_start();
include '../koneksi.php';

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");
  $admin = mysqli_fetch_assoc($query);

  if ($admin && $admin['password'] == $password) {
    $_SESSION['admin'] = $admin['username'];
    header("Location: agenda_admin.php");
    exit;
  } else {
    $error = "Username atau password salah!";
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Admin Posyandu</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Nunito', sans-serif; }
  </style>
</head>
<body class="min-h-screen bg- flex items-center justify-center">

  <div class="bg-blue-100 rounded-3xl flex flex-col md:flex-row max-w-4xl w-full mx-4">
    
    <div class="md:flex md:w-1/2 bg-blue-100 items-center rounded-3xl justify-center p-8">
      <img src="img/foto.png" alt="Ilustrasi Posyandu" class="w-80">
    </div>

    <div class="w-full md:w-1/2 p-10">
      <h2 class="text-3xl font-bold text-center mb-6">Login Admin Posyandu</h2>

      <?php if (isset($error)): ?>
        <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-2 rounded mb-4 text-sm text-center">
          <?= $error ?>
        </div>
      <?php endif; ?>

      <form id="loginForm" method="POST" class="space-y-5">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Username</label>
          <input type="text" name="username" id="username" placeholder="admin123" class="w-full px-4 py-2 rounded-xl border border-gray-300 focus:ring-2 focus:ring-teal-400 focus:outline-none">
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
          <div class="relative">
            <input type="password" name="password" id="password" placeholder="••••••" class="w-full px-4 py-2 rounded-xl border border-gray-300 pr-10 focus:ring-2 focus:ring-teal-400 focus:outline-none">
            <button type="button" onclick="togglePassword()" class="absolute right-3 top-2.5 text-gray-500 hover:text-teal-500">👁️</button>
          </div>
        </div>

        <button type="submit" name="login" class="w-full bg-black hover:bg-blue-500 text-white py-2 rounded-xl font-semibold transition duration-200 ease-in-out">
          Masuk
        </button>
      </form>
    </div>

  </div>

  <script>
    document.getElementById("loginForm").addEventListener("submit", function(e) {
      const username = document.getElementById("username").value.trim();
      const password = document.getElementById("password").value.trim();
      if (!username || !password) {
        e.preventDefault();
        alert("Username dan password tidak boleh kosong!");
      }
    });

    function togglePassword() {
      const input = document.getElementById("password");
      input.type = input.type === "password" ? "text" : "password";
    }
  </script>

</body>
</html>
