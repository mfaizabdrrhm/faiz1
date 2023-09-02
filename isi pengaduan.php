<!DOCTYPE html>
<html>
<head>
    <title>isi pengaduan</title>
<link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<body>
    <?php include 'navbar.php'?>

    <div class="form-floating">
    <div class="container">
     <form action="proses_pengaduan.php"method="post" enctype="multipart/form-data">
    <label for="floatingtextarea">isi pengaduan</label>
    <textarea class="form-control" placeholder="isi pengaduan" id="exampleFormControlTextarea" rows="3" name="isi"></textarea>
    </div>
    <label for="exampleFormControlTextarea" class="from-tabel"></label>
    <div class="inpu-group mb-3">
      <Input type="file" class="form-control" id="inputgroupfile02" name="foto">
    </div>
      <button type="submit" class="btn btn-dark">kirim</button>
    </div>
</body>
</html>