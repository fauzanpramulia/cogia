<?php include_once 'database.php';
      $id = $_GET['id'];

        if(empty($id))
        {
          header('location:login.php');
        }
        else
        {
                    $respond = $kon->query("DELETE from data WHERE id=$id");

                    if($respond)
                    {
                      header('location:login.php');
                    }
        }

 ?>
