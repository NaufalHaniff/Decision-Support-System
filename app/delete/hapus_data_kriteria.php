<?php
include('../../conf/config.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM tb_kriteria WHERE id1='$id'");
header('Location: ../index.php?page=data-kriteria');
?>