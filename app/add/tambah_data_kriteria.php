<?php
include('../../conf/config.php');
$kode = $_GET['kode'];
$nama = $_GET['nama'];
$bobot = $_GET['bobot'];
$jenis = $_GET['jenis'];
$query = mysqli_query($koneksi,"INSERT INTO tb_kriteria (id1,kode_kriteria,nama_kriteria,bobot_kriteria,jenis_kriteria) VALUES('','$kode','$nama','$bobot','$jenis')");
header('Location: ../index.php?page=data-kriteria');
?>