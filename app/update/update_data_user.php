<?php
include('../../conf/config.php');
$id = $_GET['id'];
$nama = $_GET['nama'];
$username = $_GET['username'];
$password = $_GET['password'];
$level = $_GET['level'];
$query = mysqli_query($koneksi,"UPDATE tb_users SET nama='$nama',username='$username',password='$password',level='$level' WHERE id='$id'");
header('Location: ../index.php?page=data-user');
?>