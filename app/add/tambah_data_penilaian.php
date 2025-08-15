<?php
include('../../conf/config.php');
$id_alternatif = $_GET['id_alternatif'];
$id_sub = $_GET['id_sub'];
$query = mysqli_query($koneksi,"INSERT INTO tb_penilaian (id4,id_alternatif,id_sub) VALUES('','$id_alternatif','$id_sub')");
header('Location: ../index.php?page=data-penilaian');
?>