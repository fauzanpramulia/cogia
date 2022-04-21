<?php include_once 'sub/database.php';
require_once 'sub/fungsilogin.php';


  unset($_SESSION['username']);

  session_destroy();

  header('location: login.php')
 ?>
