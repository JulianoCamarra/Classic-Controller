<!DOCTYPE HTML>

<?php
  include "processforms/SQL_API.php";
  include "processforms/library.php";

  //printArray("POST",$_POST);
  ?>


<html>
<head>

  <title> Registration</title>
  <meta chartset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
  <link rel="stylesheet" type="text/css" href="css/myStyleSheet.css">
  <style>
    #slogan{color:rgb(177, 177, 177);
         font-size:20px;
        font-family:fa5-proxima-nova,"Helvetica Neue",Helvetica,Arial,sans-serif;
         float: left;
      position:relative;
           left:33%;
        bottom:6px;
        width:66%;
          margin-bottom:none;
    }
    h1,h2,h3,h4{font-family:Oswald,sans-serif;
          line-height:1.2em;
    }

    ul{list-style-type:none;

    }

    li{float:left;
    }

    label{float:left;
      position:relative;
      top:20%;
      clear:left;
      font-family:Oswald,sans-serif;
      font-size:16px;
      margin-right:6px;

    }
    input{clear:left;top:20%;
    }
  </style>
</head>

<body>
<?php include"includes/header.php";?>

<form action="processforms/registerprocess.php" method="POST">
  <div class="container" style="top:15px;">
        <label for="uname"><b> Username</b></label>
        <input type="text" placeholder="username" name="uname" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="password" name="passwd" required>

        <label><b> Confirm Password</b></label>
        <input type="password" placeholder="password" name="retype" required>

        <label><b> email</b></label>
        <input type="email" placeholder="Email" name="email" required>

        <button type="submit"> register </button>
  </div>
</form>
<?php include"includes/footer.html";?>

</body>
</html>
