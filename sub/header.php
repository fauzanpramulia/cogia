<meta charset="utf-8">
<?php require_once "database.php" ?>


<link rel="stylesheet" href="asset/semantic.min.css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
<script src="asset/semantic.min.js"></script>
<title>COGIA</title>
<link rel="icon" href="img/cogia.png">
<script type="text/javascript">

    function masuk()
    {
      var huruf=/^[A-Za-z]+$/;
      var angka=/^[0-9]+$/;
      var eva = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      var nama=form.username.value;
      var email=form.email.value;
      var pass=form.password.value;
      	var hp=document.forms["form"]["hp"].value;

        if(nama==null||(nama=="")){
          alert("username harus di isi");
          form.username.focus();

          };
        if(!email.match(eva)){
        alert("Email anda tidak benar !");
        return false;
        };

        if(email==null||(email=="")){
          alert("email harus di isi");
          };

        if(pass==null||(pass=="")){
          alert("Password Tidak Boleh Kosong");
          };

        if(hp==null||(hp=="")){
        alert("Hp belum di isi");
        return false;
        };



        if(!hp.match(angka)){
        alert("Hp belum di isi dengan angka");
        return false;
        };
          return true;
    }
</script>
