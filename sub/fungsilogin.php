<?php

      session_start();

      function escape($data)
      {
        global $kon;
        return mysqli_real_escape_string($kon,$data);

      }



      function cek_data($username,$password)
       {

        $username = escape($username);
        $password = escape($password);

        $query = "SELECT * from user WHERE username='$username' AND password='$password'";

        global $kon;

        if($result =mysqli_query($kon,$query))
        {
          if(mysqli_num_rows($result) !=0)
          {
             return true;
          }
          else{
            echo '
                                  <h2 class="ui teal huge header">Username dan Password dimasukkan<br>Salah!!!</h2>
                  ';
            return false;
            }
        }
      }

 ?>
