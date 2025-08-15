<?php
include('../../conf/config.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM tb_alternatif WHERE id3='$id'");
header('Location: ../index.php?page=data-alternatif');
?>