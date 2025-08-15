<?php
include('../../conf/config.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM tb_penilaian WHERE id4='$id'");
header('Location: ../index.php?page=data-penilaian');
?>