<!DOCTYPE html>
<html>
<head>
     <title>pengaduan</title>
     <link rel="stylesheet" href="IZZ/bs/css/bosstrap.min.css">
</head>
<body>
    <div class="pengaduan">
        <h1>pengaduan</h1>

         <style>
            h2{
                text-align: center;
            }
            body{
                background: aqua;
            }
            .alok{
                margin: 15px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .garis{
                border-style: solid;
                background-color: antiquewhite;
            }
             
            </style>
        <form method="POST" action=>
            <input name="tujuan" type="hidden" value="daftar>
            <div class="alok">
            <div class="garis">

            <label>ketik judul laporan anda</label>
            <br>
            <input name="ketik judul laporan anda" type="text">"
            <br>
            <label>nama lengkap</label>
            <br>
            <input name="nama lengkap" type="password">
            <br>
            <label>alamat</label>
            <br>
            <input name="alamat" type="text">
            <br>
            <textarea name="komentar" cols="40"rows="5"></textarea>
            <BR>
            <input type="file">

            <a link href="izz.php"><button type="button">login</button>
            <a link href="daftar.php"><button type="button">daftar</button>
            <a link href="home.php"><button type="button">menu home</button>
             
            </div>
        </div>
        </form>
  </body>
   </html>