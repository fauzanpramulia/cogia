<head>
        <?php include "sub/header.php" ?>

        <style type="text/css">
        body {
          background-color: rgb(247, 247, 247);
        }
        body > .grid {
          height: 100%;
        }
        .image {
          margin-top: -100px;
        }
        .column {
          max-width: 450px;
        }
      </style>
</head>
<?php
        include_once 'sub/fungsilogin.php';
        if(isset($_SESSION['username']))
        {
             header('location:index.php');
        }

        else
        {
              if(isset($_POST['login']))
              {
                $username = $_POST['username'];
                $password = md5($_POST['password']);


                if(!empty($username) && !empty($password))
                {
                    if(cek_data($username,$password))
                    {
                      $_SESSION['username']=$username;
                      header('location:index.php');
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
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <img src="img/cogia.png" class="image" >
      <div class="content">
                  <h1 class="ui teal huge header"> Cogia</h1>
      </div>
    </h2>
    <form name="form" class="ui large form" method="post" onsubmit="return masuk()">

      <div class="ui stacked segment">
        <div class="field" >
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input name="username" placeholder="Username" type="text">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input name="password" placeholder="Password" type="password">
          </div>
        </div>
        <input type="submit" class="ui fluid large teal submit button" value="Login" name="login"></input>

      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      Belum memiliki akun ? <a href="signup.php">Sign Up</a>
    </div>
  </div>
</div>



</body>
<?php } ?>
