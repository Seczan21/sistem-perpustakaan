<?php
include '../koneksi.php';
$id = $_GET['id'];
// $sql = "DELETE FROM tb_anggota where id_anggota = '$id'";
mysqli_query($db, "DELETE FROM tbL_anggota where id_anggota ='$id'");
header('location:../index.php?p=anggota');