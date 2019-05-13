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
  <link rel="stylesheet" type="text/css" href="css/slideshow.css">;

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

html,body,article{width:100%;height:100%}

h1,h2,h3,h4{font-family:fa5-proxima-nova,"Helvetica Neue",Helvetica,Arial,sans-serif;float:left;position:relative;}

		ul{list-style-type:none;

		}

		li{float:left;
		}

    table{border-collapse:collapse;
          width:100%;
          height:50%;}

    th{  width:30%;
          margin-right:10%;
        padding:0%;
        font-family:Arial;
      background-color:rgb(29,39,54);
    color:rgb(177,177,177);}

    td{
          width:30%;
          margin-right:10%;
        text-align:center;}

      tr:nth-child(even) {background-color:#e1e1e1;}
	</style>
</head>
<body>
  <?php include"includes/header.php";?>
  <article>
    <div class="cartheaderdiv">
    <h2 style="color:white;background-color:rgb(29,39,54);width:80%;padding:2px;"><?php echo$_SESSION['userid']?>'s Cart </h2>
  </div>

  <div class="tablediv">;
    <table>
      <tr>
          <th>Product</th>
          <th> Seller</th>
          <th> Quantity</th>
          <th> subtotal</th>
</tr>
      <tr>
          <td> Pokemon</td>
          <td> Bob </td>
          <td> 1 </td>
          <td> $25.99 </td>
      </tr>
      <tr>
          <td> Super Nintendo</td>
          <td> David</td>
          <td> 2</td>
          <td> $200</td>
      </td>
      <tr>
        <td colspan="4" style="text-align:right;margin-right:10px;">
      </tr>
      <tr>
    
      </tr>
    </table>
  </div>

  </article>
<?php include"includes/footer.html"?>

</body>
</html>
