<?php
include('../../conf/config.php');
$id_kriteria = $_GET['id_kriteria'];
$nama_sub = $_GET['nama_sub'];
$nilai_sub = $_GET['nilai_sub'];
$query = mysqli_query($koneksi,"INSERT INTO tb_sub (id2,id_kriteria,nama_sub,nilai_sub) VALUES('','$id_kriteria','$nama_sub','$nilai_sub')");
header('Location: ../index.php?page=data-sub-kriteria');
?>