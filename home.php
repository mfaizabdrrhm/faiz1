<?php
 
include 'koneksi.php';

$query = $koneksi->query ("select * from pengaduan");
$data = $query->fetchAll();
 
?>                                                              
<!DOCTYPE html>
<html>
<head>
    <title>home</title>
<link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<style>
    .home{
        color: burlywood;
        text-decoration: none;
    }
</style>
<body>
    <nav class="navbar bg-dark border-body"data-bs-theme="dark">
    <div class="container-fluid">
        <span class="navbar-brand" href="#">laporan pengaduan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="toggle navigation">
            <span class="navbar-toggle-icon"></span>
        </button>
     </nav>

     <a class="home" href="menu.php">back</a><br>
     <a class="home" href="isi pengaduan.php">buat pengaduan</a>
</div>
</nav>
   <div class="container"><br>
   <table class="table"> 
   <thead>
    <tr>
      <th scope="col">id pengaduan</th>
      <th scope="col">nik</th>
      <th scope="col">isi pengaduan</th>
      <th scope="col">tanggal laporan</th>
      <th scope="col">gambar</th><br>
      <th scope="col">action</th>
      

    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $pengaduan){?>
    <tr>
      <td><?= $pengaduan['id_pengaduan']?></td>
      <td><?= $pengaduan['nik']?></td>
      <td><?= $pengaduan['isi_laporan']?></td>
      <td><?= $pengaduan['tgl_pengaduan']?></td>
      <td><img src="img/<?= $pengaduan['foto']?>"></td>
      <td><a href="proses_update.php?id_pengaduan=<?=$pengaduan['id_pengaduan'];?>"class="btn btn-outline-danger">update</a>
      <td><a href="proses_hapus.php?id_pengaduan=<?=$pengaduan['id_pengaduan'];?>"class="btn btn-outline-warning">X</td>
    </tr>
      <?php } ?>
  
    </div>
    
</body>
</html>
 