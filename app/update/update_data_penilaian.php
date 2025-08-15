<?php
include('../../conf/config.php');
$id = $_GET['id'];
$id_alternatif = $_GET['id_alternatif'];
$id_sub = $_GET['id_sub'];
$query = mysqli_query($koneksi,"UPDATE tb_penilaian SET id_alternatif='$id_alternatif',id_sub='$id_sub' WHERE id4='$id'");
header('Location: ../index.php?page=data-penilaian');
?>