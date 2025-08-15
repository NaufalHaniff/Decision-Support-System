<?php
include('../../conf/config.php');
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$query = mysqli_query($koneksi, "INSERT INTO tb_users (nama, username, password, level) VALUES ('$nama', '$username', '$password', '$level')");
header('Location: ../index.php?page=data-user');
?>
