<?php
session_start();

include "processforms/library.php";
 ?>

<!DOCTYPE HTML>
<html>


 <head>
   <title> Upload Product </title>
    <meta chartset="UTF-8">
   	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">	<link rel="stylesheet" type="text/css" href="myStyleSheet.css">
    <link rel="stylesheet" type="text/css" href="css/myStyleSheet.css">


    <style>
    html,body,article{width:100%;height:100%}

    label{color:#444;
          font-family:sans-serif;
          font-size:11pt;
          float:left;
          position:relative;
          clear:left;
        }

    h1,h2,h3,h4{font-family:fa5-proxima-nova,"Helvetica Neue",Helvetica,Arial,sans-serif;float:left;position:relative;}

      input{float:left;
            position:relative;
            margin-left:5px;
            bottom:1px;

  }
      select{float:left;
            position:relative;
            width:45%;
            margin-left:5px;
            margin-bottom:10%;
          }
    		ul{list-style-type:none;}

    		li{float:left;}

    .uploadproduct{float:left;
                    width:30%;
                    height:100%%;
                    position:relative;
                    top:10%;
                    border:1px black solid;}



    	</style>
 </head>

 <body>
   <?php include"includes/header.php"; ?>

   <article>
     <div class="uploadproduct">
       <h2 style="display:block;color:rgb(26, 45, 74);"> Upload your product to sell</h2>
       <p style="font-size:10pt;clear:left;font-family:sans-serif;"><i>Enter the details of your product below and click to upload it</i></p>
       <br>
       <form action="processforms/uploadProductDetails.php" method="POST" enctype="multipart/form-data">
            <label> Product Name:</label>
            <input type="text" name="prodname">

           <label> Type of Product:</label>
            <select name="type">
                <option value="console">Console</option>
                <option value="game">Game</option>
            </select>
            <label> Year of Product: </label>
            <input type="text" name="year">

            <label> Price of Product: </label>
            <input type="text" name="price">

            <label> Image (optional) </label>
            <input type="file" name="imgpic" id="filetoupload">
          <input type="submit" name="submit" value="Sell it!">
          </form>





   </article>
   <?php include"includes/footer.html"; ?>


 </body>
</html>
