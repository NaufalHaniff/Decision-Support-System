<?php
include('../../conf/config.php');
$id = $_GET['id'];
$id_kriteria = $_GET['id_kriteria'];
$nama_sub = $_GET['nama_sub'];
$nilai_sub = $_GET['nilai_sub'];
$query = mysqli_query($koneksi,"UPDATE tb_sub SET id_kriteria='$id_kriteria',nama_sub='$nama_sub',nilai_sub='$nilai_sub' WHERE id2='$id'");
header('Location: ../index.php?page=data-sub-kriteria');
?>