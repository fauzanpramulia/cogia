<?php
    include_once 'sub/header.php';
    include_once 'sub/fungsilogin.php';


    if(isset($_POST['username']))
    {
          $username = htmlentities(trim($_POST['username']));
          $email= htmlentities(trim($_POST['email']));
          $password=htmlentities(trim(md5($_POST['password'])));
          $hp =htmlentities(trim($_POST['hp']));


          $kon -> query ("INSERT INTO user(username,email,password,hp)
                    values('$username','$email','$password','$hp')");



 ?>


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
          margin-top: -40px;
        }
        .column {
          max-width: 950px;
        }
      </style>
</head>

<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">

    <h2 class="ui teal image header">
      <div class="content">
                        <h1 class="ui teal huge header">Anda Telah Terdaftar<br>di <br>Cogia</h1>


      </div>
    </h2>
    <br>
    <a href="login.php" class="ui huge primary button">Log in <i class="right arrow icon"></i></a>
  </div>

</div>




</body>
<?php } ?>
