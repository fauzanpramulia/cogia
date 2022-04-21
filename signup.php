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
          max-width: 450px;
        }
      </style>
</head>

<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <img src="img/cogia.png" class="image" >
      <div class="content">
                  <h1 class="ui teal huge header"> Cogia</h1>
      </div>
    </h2>
    <form name="form" class="ui large form" method="post" onsubmit="return masuk()" action="masukdb.php">

      <div class="ui stacked segment">
              <div class="field">
                <h2 class="ui teal huge header">Register</h2>
              </div>
              <br>
              <div class="field">
                <div class="ui left icon input">
                  <i class="user icon"></i>
                  <input name="username" placeholder="Username" type="text">
                </div>
              </div>

              <div class="field">
                <div class="ui left icon input">
                  <i class="mail icon"></i>
                  <input name="email" placeholder="E-Mail Address" type="text">
                </div>
              </div>

              <div class="field">
                <div class="ui left icon input">
                  <i class="lock icon"></i>
                  <input name="password" placeholder="Password" type="password">
                </div>
              </div>

              <div class="field">
                <div class="ui left icon input">
                  <i class="tablet icon"></i>
                  <input name="hp" placeholder="Phone Number" type="text">
                </div>
              </div>

              <input type="submit" class="ui fluid large teal submit button" value="Sign Up" name="signup"></input>
      </div>

      <div class="ui error message"></div>

    </form>


  </div>
</div>



</body>
