<?php
    include_once 'database.php';
    require_once 'fungsilogin.php';



    if(isset($_SESSION['username']))
    {
         header('location:login.php');
    }

    else
    {
          if(isset($_POST['login']))
          {
            $username = $_POST['username'];
            $password = $_POST['password'];


            if(!empty($username) && !empty($password))
            {
                if(cek_data($username,$password))
                {
                  $_SESSION['username']=$username;
                  header('location:login.php');
                }
                else
                {
                  $error='ada masalah saat login';

                }
            }
            else
            {
                $error='Username dan Passwrod harus diisi';
            }
          }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
      <link rel="stylesheet" href="style.css" type="text/css">

     <title>Login</title>
   </head>
   <body class="dua">
     <div class="kem">  <a href="index.php" class="bali">Kembali</a>    </div>
        <h2>LOGIN</h2>
        <form class="kos" name="login" action="" method="post">
              Username : <br>
              <input class="kotak-menengah" type="text" name="username" value="" placeholder="Username"><br>
              Password :<br>
              <input class="kotak-menengah" type="password" name="password" value="" placeholder="Password"><br>
              <input type="hidden" name="namaadmin" value="">
              <input class="but" type="submit" name="login" value="LOGIN" ><br>

        </form>
    </body>
 </html>
	<?php } ?>
