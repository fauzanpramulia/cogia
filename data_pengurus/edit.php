<?php require_once 'database.php';
     require_once 'fungsilogin.php';

        $id =$_GET['id'];
        $hasil=$kon->query("SELECT * from data WHERE id=$id");
        $rows = $hasil->fetch_object();

?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Pengeditan Data Pengurus Neo Telemetri </title>
  </head>
  <body class="dua">
    <h2>EDIT DATA PENGURUS Neo Telemetri</h2>
    <form class="daf" action="update.php" method="POST">
            <div>
              Nama  :<br>
              <input class="kotak-menengah" type="text" name="Nama" value="<?php echo $rows->nama;  ?>" maxlength="35" ></input><br>

              Jurusan :<br>
              <input class="kotak-menengah" type="text" name="Jurusan" placeholder="Jurusan" maxlength="50" value="<?php echo $rows->jurusan;  ?>"></input><br>
              Angkatan :<br>
              <input class="kotak-menengah" type="text" name="Angkatan" placeholder="Angkatan" maxlength="4" value="<?php echo $rows->angkatan;  ?>"></input><br>
              Pekerjaan :<br>
              <input class="kotak-menengah" type="text" name="Pekerjaan" placeholder="Pekerjaan" maxlength="50" value="<?php echo $rows->pekerjaan;  ?>"></input><br>
              SN  :<br>
              <input class="kotak-menengah" type="text" name="Sn" placeholder="Sn" minlength="11" maxlength="30" value="<?php echo $rows->sn;  ?>"></input><br>
              Keterangan :<br>
              <textarea class="kotak-area" type="textarea" name="Keterangan" cols="50" rows="4" placeholder="Keterangan Tambahan" value=""><?php echo $rows->keterangan;  ?></textarea><br>

              <input type="hidden" name="id" value="<?php echo $rows->id ?>">
              <input class="but" type="submit" name="Update" value="update"></input>
            </div>
    </form>
  </body>
</html>
