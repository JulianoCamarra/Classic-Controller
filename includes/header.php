<?php
  include"../processforms/loginprocess.php";
  include"../processforms/library.php";
 ?>

 <header>
  <div id="divheader">
    <div id="divlogo">
      <img src="images/logo.png" alt="logo" style="padding:10px;position:relative;left:5px;">
      <i class="fas fa-gamepad fa-3x" style="position:relative;bottom:4.5px;"></i>
    </div>

    <div id="divslogan">
      <h3 id="slogan">For All Your Classic Gaming Needs!</h3>
    </div>

  </div>

</header>
 <nav>
  <div id="divmenu">
    <ul>

      <li><a href="index.php" class="link">Home</a></li>
      <li><a href="aboutus.php" class="link">About Us</a></li>
      <li> <a href="market.php" class="link">Market</a></li>
      <?php greetUser(); ?>


    </ul>
    <a href="http://facebook.com" target="blank"><i class="fab fa-facebook fa-3x" style="color:black;float:right;position:relative;right:12px;"></i></a>
    <a href="http://twitter.com" target="blank"><i class="fab fa-twitter-square fa-3x" style="color:black;float:right;position:relative;right:40px;"></i></a>
    <a href="http://instagram.com" target="blank"><i class="fab fa-instagram fa-3x" style="color:black;float:right;position:relative;right:65px;"></i></a>

  </div>
</nav>
