<?php
include('../conf/config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nama     = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = 'user'; // level default

  // Validasi input tidak boleh kosong
  if (empty($nama) || empty($username) || empty($password)) {
    header("Location: ../register.php?error=empty");
    exit;
  }

  // Cek apakah username sudah digunakan
  $cek = mysqli_query($koneksi, "SELECT * FROM tb_users WHERE username='$username'");
  if (mysqli_num_rows($cek) > 0) {
    header("Location: ../register.php?error=duplicate");
    exit;
  }

  // Simpan data ke database
  $query = mysqli_query($koneksi, "INSERT INTO tb_users (nama, username, password, level) VALUES ('$nama', '$username', '$password', '$level')");
  if ($query) {
    header("Location: ../register.php?success=1");
    exit;
  } else {
    header("Location: ../register.php?error=register");
    exit;
  }
}
?>