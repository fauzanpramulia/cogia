<?php include_once 'database.php';
require_once 'fungsilogin.php';


  unset($_SESSION['username']);

  session_destroy();

  header('location: Blogin.php')
 ?>
