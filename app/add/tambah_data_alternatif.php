<?php
include('../../conf/config.php');
$nama = $_GET['nama'];
$query = mysqli_query($koneksi,"INSERT INTO tb_alternatif (id3,nama_alternatif) VALUES('','$nama')");
header('Location: ../index.php?page=data-alternatif');
?>