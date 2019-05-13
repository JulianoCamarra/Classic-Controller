
<?php
session_start();
include "processforms/library.php";

//printArray("session",$_SESSION);
 ?>

 <!DOCTYPE HTML>
<html>
	<meta charset="UTF-8">

<head>
	<title> Classic Controller</title>
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

html,body{width:100%;height:100%}

h1,h2,h3,h4{font-family:fa5-proxima-nova,"Helvetica Neue",Helvetica,Arial,sans-serif;float:left;position:relative;}

		ul{list-style-type:none;

		}

		li{float:left;
		}
	</style>
</head>


<body>

	<?php include"includes/header.html"; ?>
	<article>
		<div id="divmain">
			<br>

			<ul>
				<div class="container">
					<li><a href=""><img src="images/nes.png" alt="nes-console" height="300" width="300" class="consoleimage">
						<p class="text-block"> NES</p></a></li>
				</div>

				<div class="container">
					<li><a href=""><img src="images/atari.png" alt="atari-2600" height="300" width="300" class="consoleimage">
						<p class="text-block"> Atari 2600</p></a></li>
				</div>

				<div class="container">
					<li><a href=""><img src="images/sega.png" alt="sega genesis" height="300" width="300" class="consoleimage">
						<p class="text-block"> Sega </p></a></li>
				</div>
				<div class="container">
					<li><a href=""><img src="images/dk.jpg" alt="arcade" height="300" width="300" class="consoleimage">
						<p class="text-block"> Arcade</p></a></li>
				</div>
				<div class="container">
					<li><a href=""><img src="images/megaman.jpg" alt="capcom" height="300" width="300" class="consoleimage">
						<p class="text-block"> Capcom</p></a></li>
				</div>
				<div class="container">
					<li><a href=""><img src="images/sony.jpg" alt="sony" height="300" width="300" class="consoleimage">
						<p class="text-block"> Sony</p></a></li>
				</div>
			</ul>
		</div>


	</article>

<?php include"includes/footer.html"; ?>

</body>





</html>
