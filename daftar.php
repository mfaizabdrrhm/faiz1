<!DOCTYPE html>
<html>
<head>
     <title>daftar</title>
</head>
<body>
    <div class="izz">
      <center> <h1>daftar</h1></center>
       
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
            <input name="tujuan" type="hidden" value="daftar" >
            <div class="alok">
            <div class="garis">

            <label>username</label>
            <br>
            <input name="email" type="text">
            <br>
            <label>nama lengkap</label>
            <br>
            <input name="nama lengkap" type="password">
            <br>
            <label>alamat</label>
            </br>
            <input name="alamat" type="text">

            <button>daftar</button>
            <a link href="izz.php"><button type="button">login</button><br>
            <a link href="menu.php"><button type="button">masuk pengaduan</button><br>

            </div>
        </div>
        </form>
  </body>
   </html>
