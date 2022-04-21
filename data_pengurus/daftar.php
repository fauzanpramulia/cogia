<!DOCTYPE html>
<html>
  <head>
      <link href="style.css" type="text/css" rel="stylesheet">
    <title>Selamat Datang di Data Pengurus NEO TELEMETRI</title>
  </head>
  <body class="dua">
    <div class="kem">  <a href="index.php" class="bali">Kembali</a>    </div>

      <div class="">
            <h2>Data Pengurus<br>NEO TELEMETRI</h2>
      </div>
      <script src="javascript.js"></script>
      <?php require_once 'database.php';      ?>
      <form class="daf" name="form" action="masukdb.php" method="POST" >
              <div>
                Nama  :<br>
                <input class="kotak-menengah" type="text" name="Nama" placeholder="Nama Lengkap" maxlength="35"></input><br>
                Jurusan :<br>
                <input class="kotak-menengah" type="text" name="Jurusan" placeholder="Jurusan" maxlength="40"></input><br>
                Angkatan :<br>
                <input class="kotak-menengah" type="text" name="Angkatan" placeholder="Angkatan" maxlength="4"></input><br>
                Pekerjaan :<br>
                <input class="kotak-menengah" type="text" name="Pekerjaan" placeholder="Pekerjaan" maxlength="50"></input><br>
                SN  :<br>
                <input class="kotak-menengah" type="text" name="Sn" placeholder="Sn" maxlength="12" ></input><br>
                Keterangan :<br>
                <textarea class="kotak-area" type="textarea" name="Keterangan" cols="50" rows="4" placeholder="Keterangan Tambahan" ></textarea><br>

                <input class="but" type="submit" name="submit" value="Daftar"></input>
              </div>

      </form>
  </body>
</html>
