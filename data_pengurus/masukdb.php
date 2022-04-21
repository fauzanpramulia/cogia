<?php
    include_once 'database.php';



    if(isset($_POST['Nama']))
    {
      
          $Nama = htmlentities(trim($_POST['Nama']));
          $jurusan= htmlentities(trim($_POST['Jurusan']));
          $angkatan=htmlentities(trim($_POST['Angkatan']));
          $pekerjaan =htmlentities(trim($_POST['Pekerjaan']));
          $sn=htmlentities(trim($_POST['Sn']));
          $keterangan=htmlentities(trim($_POST['Keterangan']));

          $kon -> query ("INSERT INTO data(nama,jurusan,angkatan,pekerjaan,
                        sn,keterangan)
                    values('$Nama','$jurusan','$angkatan','$pekerjaan','$sn','$keterangan')");




 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="style.css" type="text/css">
     <title>Pengimputan Berhasil</title>
   </head>
   <body class="satu">
      <h1>     <?php
                 if($kon->affected_rows == 1)
                    {
                      echo 'Anda Telah Berhasil Mendaftar OR Neo Telemetri';

                    ?>
                    <br>Jangan Lupa untuk mencari data yang lain :)
                    <?php } ?>
      </h1>


      <div class="">
        <a href="index.php"><button type="button" name="button" class="but">Keluar</button></a>

      </div>
   </body>
 </html>
<?php } ?>
