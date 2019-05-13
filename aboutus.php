<?php
session_start();

	include "processforms/library.php";
 ?>



<!DOCTYPE HTML>
<html>
	<title>About Us</title>
	<meta chartset="UTF-8">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">	<link rel="stylesheet" type="text/css" href="myStyleSheet.css">
	<link rel="stylesheet" type="text/css" href="css/myStyleSheet.css">

<head>

	<style>
		html,body,article,footer,header,nav{height:100%width:100%;}

		h1,h2,h3,h4{font-family:Oswald,sans-serif;
					line-height:1.2em;
		}

		ul{list-style-type:none;

		}

		li{float:left;
		}
	</style>
</head>
<body>

<?php include"includes/header.php";?>

	<article>
		<div class="aboutus">
			<h2> About us</h2>
			<p style="text-align:left;size:12.5px;line-height:1.5em;"> Classic Controller is a website dedicated to those who enjoy collecting and learning about vintages consoles and games.
			Our Market allows users to buy and trade their vintage video game items with others users from around the world in a trusted and secure way.
				<br><br> If you are interested in buying something as a gift for someone else, no problem! We have a comprehensive enyclopedia
			set up so that you can do some research on the item you would like to purchase before anything is actually bought!
				<br><br>Alternatively, feel free to read our encyclopedia as much as you'd like.
				<br><br><br> Enjoy!

			<br><br> The CC Team</p>

		</div>
		<div style="float:left;width:30%;height:100%;position:relative;top:50px;">

		<i class="fas fa-power-off fa-7x" style="color:gray;position:relative;left:30%;top:30%;"></i>

		</div>
	</article>
	<?php include"includes/footer.html";?>

  </body>
</html>
