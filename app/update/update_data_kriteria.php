<?php
include('../../conf/config.php');
$id = $_GET['id'];
$kode = $_GET['kode'];
$nama = $_GET['nama'];
$bobot = $_GET['bobot'];
$jenis = $_GET['jenis'];
$query = mysqli_query($koneksi,"UPDATE tb_kriteria SET kode_kriteria='$kode',nama_kriteria='$nama',bobot_kriteria='$bobot',jenis_kriteria='$jenis' WHERE id1='$id'");
header('Location: ../index.php?page=data-kriteria');
?>