<?php
  include "koneksi.php";
  $id = $_GET['id_pengaduan'];
  $query = $koneksi->query  ("select * from pengaduan where id_pengaduan='$id'");
  $data = $query->fetchAll();
  
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
  </head>
  <body><br>
     <div class="container">
     <?php foreach($data as $pengaduan) ?>

     <from>
     <div>
        <label></label>
        <textarea></textarea>
    </from>
     </div>
     </body>
  </html>