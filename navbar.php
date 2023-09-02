<?php
 //PDO
   $koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
   
   $query = $koneksi->query ("select * from pengaduan");
   $data  = $query->fetchAll();

   
  //if(koneksi){
  //echo "koneksi berhasil";

  //}else{
  // echo "gagal koneksi";xdd
  //}xdd
  
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="menu.php">kembali</a></li>
        <li>
        </li>
      <form class="d-flex" role="">

      </form>
     </div>
     </div>
    </nav>
    
   
</body>
</html>