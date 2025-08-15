<?php
include('../../conf/config.php');
$id = $_GET['id'];
$nama = $_GET['nama'];
$query = mysqli_query($koneksi,"UPDATE tb_alternatif SET nama_alternatif='$nama' WHERE id3='$id'");
header('Location: ../index.php?page=data-alternatif');
?>