<?php
include('../../conf/config.php');
$id = $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM tb_sub WHERE id2='$id'");
header('Location: ../index.php?page=data-sub-kriteria');
?>