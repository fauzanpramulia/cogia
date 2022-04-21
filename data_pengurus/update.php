<?php
    include_once 'database.php';

    $Nama = htmlentities(trim($_POST['Nama']));
    $jurusan= htmlentities(trim($_POST['Jurusan']));
    $angkatan=htmlentities(trim($_POST['Angkatan']));
    $pekerjaan =htmlentities(trim($_POST['Pekerjaan']));
    $sn=htmlentities(trim($_POST['Sn']));
    $keterangan=htmlentities(trim($_POST['Keterangan']));
    $id= $_POST['id'];

    $kon -> query ("UPDATE
                        data
                   SET
                      nama='$Nama',
                      jurusan='$jurusan',
                      angkatan='$angkatan',
                      pekerjaan='$pekerjaan',
                      sn='$sn',
                      keterangan='$keterangan'
                    WHERE
                      id='$id'
                ");

 ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Pengeditan Selesai</title>
  </head>
  <body class="dua">
          <h2><?php   if($kon->affected_rows)
                {
                  echo 'Data Telah Selesai Di Update';
                }
                 ?>
         </h2>
    <a href="login.php"><input class="but" type="button" name="name"  value="Selesai"></a>

  </body>
</html>
