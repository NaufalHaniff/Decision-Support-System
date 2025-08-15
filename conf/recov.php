<?php
include('../conf/config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirm  = $_POST['confirm'];

  // Cek apakah ada field kosong
  if (empty($username) || empty($password) || empty($confirm)) {
    header("Location: ../recovery.php?error=empty");
    exit;
  }

  // Cek apakah password dan konfirmasi cocok
  if ($password != $confirm) {
    header("Location: ../recovery.php?error=mismatch");
    exit;
  }

  // Cek apakah username ada di database
  $cek = mysqli_query($koneksi, "SELECT * FROM tb_users WHERE username='$username'");
  if (mysqli_num_rows($cek) > 0) {
    mysqli_query($koneksi, "UPDATE tb_users SET password='$password' WHERE username='$username'");
    header("Location: ../recovery.php?success=1");
    exit;
  } else {
    header("Location: ../recovery.php?error=notfound");
    exit;
  }
}
?>
