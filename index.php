<!DOCTYPE html>
<html>
  <head>
        <?php include "sub/header.php" ?>
        <?php include_once 'sub/fungsilogin.php' ?>

  </head>
<?php
          if(!isset($_SESSION['username']))
          {
          header ('location: login.php');
          }else {

          $username =$_SESSION['username'];
          $hasil=$kon->query("SELECT * from user WHERE username='$username'");
          $rows = mysqli_fetch_assoc($hasil);
?>
  <body >

          <?php include "sub/sub1.php" ?>
          <?php include "sub/sub2.php" ?>
          <?php include "sub/sub3.php" ?>
          <?php include "sub/sub4.php" ?>
          <?php include "sub/sub5.php" ?>
          <?php include "sub/sub6.php" ?>
          <?php include "sub/sub7.php" ?>



          <?php include "sub/footer.php" ?>
          <?php include "sub/foot.php" ?>

  </body>
</html>

<?php } ?>
