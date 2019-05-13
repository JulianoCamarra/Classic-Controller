<!DOCTYPE HTML>

 <?php include "processforms/library.php";
      include "processforms/mysql_API.php";




?>
<html>

<head>

	<title> Login</title>
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
		input{float:left;position:relative; top:20%;
		}
	</style>
</head>


<body>
<?php include "includes/header.html"?>

	<article>
		<form  action="processforms/loginprocess.php" method="post">
			<div class="container" style="width:30%;top:10px;">

					<label><b>Username</b></label>
					<input type="text" placeholder="Enter username" name="uname" required>

					<br><br><br>

					<label><b>Password</b></label>
					<input type="password" placeholder="Enter password" name="passwd" required>
					<br><br>
					<button type="submit">login</button>
		</form>
				<br><br><br><br><br>
		</div>

		<h5 style="clear:left;position:relative;top:10%;"> Having trouble logging in? Click <a href="https://ismyinternetworking.com" target="blank"> here</a> to see if your internet is working properly!</h5>
	</article>

<?php include"includes/footer.html"?>

</body>
</html>
