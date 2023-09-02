<?php

include "koneksi.php";
$isi_laporan = $_POST['isi_laporan'];
$id = $_GET['id_pengaduan'];


$query = $koneksi ->query("UPDATE 'pengaduan' SET 'isi_laporan'='$isi_laporan' WHERE id_pengaduan='$id'");
//UPDATE 'pengaduan' SET 'isi_laporan' = "bakar" WHERE id_pengaduan'1';
header("location:home.php");
?>