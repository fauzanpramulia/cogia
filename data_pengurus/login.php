<!DOCTYPE html>
<?php include_once 'database.php';
require_once 'fungsilogin.php';


if(!isset($_SESSION['username']))
{
  header ('location: Blogin.php');
}else {

  $username =$_SESSION['username'];
  $hasil=$kon->query("SELECT * from admin WHERE username='$username'");
  $rows = mysqli_fetch_assoc($hasil);
?>
<html>
  <head>
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Selamat Datang di Data Anggota Neo Telemetri</title>
  </head>
  <body class="tiga">
                  <h2 class="fa">LOGIN <br>
                    <?php echo $rows['namaadmin'] ?></h2>
                  <div class="container">
                    <div class="fa">
                      DATA PENGURUS OR Neo Telemetri

                    </div>
                    <div class="logout">  <a href="logout.php" class="log">Logout</a>    </div>
                    <form class="" action="index.html" method="post">
                      <table class="table2">
                              <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Angkatan</th>
                                    <th>Pekerjaan</th>
                                    <th>Sn</th>
                                    <th>Keterangan</th>
                                    <th>Operasi</th>

                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                        $hasil=$kon->query("SELECT * from data");

                                        if($hasil->num_rows):
                                            $rows = $hasil->fetch_ALL(MYSQLI_ASSOC);
                                            $no=1;
                                            ?>
                                            <?php foreach ($rows as $row):?>
                                              <tr>
                                                <td id='no'><?php echo $no; ?></td>
                                                <td><?php echo $row['nama'] ?></td>
                                                <td><?php echo $row['jurusan'] ?></td>
                                                <td><?php echo $row['angkatan'] ?></td>
                                                <td><?php echo $row['pekerjaan'] ?></td>
                                                <td><?php echo $row['sn'] ?></td>
                                                <td><?php echo $row['keterangan'] ?></td>
                                                <td>
                                                    <a href="edit.php?id=<?php echo $row['id']; ?> "> Edit </a>||
                                                    <a href="hapus.php?id=<?php echo $row['id']; ?> "> Hapus </a>

                                                </td>
                                              </tr>
                                            <?php
                                                     $no++;
                                                     endforeach; ?>
                                        <?php endif; ?>
                              </tbody>

                      </table>
                    </form>
                  </div>
  </body>
</html>
<?php

    }
?>
