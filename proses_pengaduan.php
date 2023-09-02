<?php
 include "koneksi.php";
  session_start();
  $nik = '1235';
  $isi = $_POST['isi'];
  $nama_poto = $_FILES['foto']['name'];
  $asal_poto = $_FILES['foto']['tmp_name'];
  $tanggal = date('y-m-d');

  $koneksi->query("insert into pengaduan values('','$tanggal','$nik','$isi','$nama_poto','0')");
  move_uploaded_file($asal_poto, "img/$nama_poto");

  if($koneksi)
  {
    header("location:home.php");
  }
?>



  
