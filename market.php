<?php
session_start();
include "processforms/library.php";
include "processforms/SQL_API.php";


 ?>

<!DOCTYPE HTML>
 <html>
 	  <meta charset="UTF-8">

    <head>
 	    <title> Classic Controller</title>
 	    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
 	    <link rel="stylesheet" type="text/css" href="css/myStyleSheet.css">
 <style>
        a{text-decoration:none;display:block;padding:2px;}
        a.class1:visited{color:rgb(177,177,177);}
        html,body{width:100%;height:100%;float:left;}
        article{float:left;position:relative; width:81%;height:100%;top:10%;}
        aside{float:left;width:18%;height:100%;position:relative;}
        h1,h2,h3,h4{font-family:fa5-proxima-nova,"Helvetica Neue",Helvetica,Arial,sans-serif;position:relative;}
        h5{font-family:sans-serif;color:rgb(77, 68, 68); margin:1.2px;}
        ul{list-style-type:none;}
        li{float:left;}

     .asideheader{text-align:center;
                color:#e6e1e1;
                font-size:16pt;
                }

    .asideli{ float:left;
              position:relative;
              right:15%;
              width:100%;
              color:rgb(177,177,177);
              margin-bottom:5%;
              font-family:fa5-proxima-nova,"Helvetica Neue",Helvetica,Arial,sans-serif;
   }

   .asidemenu{}

 	</style>
 </head>
 <body>
   <?php include "includes/header.php";?>


   <aside>
     <div class="asidediv">

     <h4 class="asideheader">Browse by Console</h4>
     <ul>
         <li class="asideli"><a class="class1" href="http://google.com">Atari 2600</a></li>
         <li class="asideli"><a class="class1" href="">Atari Jaguar</a></li>
         <li class="asideli"><a class="class1" href="">Nintendo 64</a></li>
         <li class="asideli"><a class="class1" href="">Nintendo NES</a></li>
         <li class="asideli"><a class="class1" href="">Nintendo SNES</a></li>
         <li class="asideli"><a class="class1" href="">Sega Master System</a></li>
         <li class="asideli"><a class="class1" href="">Sony Playstation</a></li>
     </ul>

     <h4 class="asideheader">Browse by Company</h4>
     <ul>
         <li class="asideli"><a class="class1" href="">Atari</a></li>
         <li class="asideli"><a class="class1" href="">Nintendo</a></li>
         <li class="asideli"><a class="class1" href="">Microsoft</a></li>
         <li class="asideli"><a class="class1" href="">Sega</a></li>
         <li class="asideli"><a class="class1" href="">Sony</a></li>

     </ul>

   </div>
   </aside>
  <article>

    <ul style="float:left;width:100%;height:100%;">
  
        <?php include "processforms/displayProducts.php";?>
  </article>
 	<?php include "includes/footer.html";?>

</body>
</html>
