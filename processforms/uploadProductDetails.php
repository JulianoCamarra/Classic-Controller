<?php
 session_start();
 
 $username=$_SESSION['userid'];
 echo$username;
 echo($_FILES['imgpic']['name']);

require "SQL_API.php";
include"library.php";

printArray("post", $_POST);



$conn=DB_Connection();

//1. Sanitize all POST values

$cleanname=filter_var($_POST['prodname'],FILTER_SANITIZE_STRING);
$cleantype=filter_var($_POST['type'],FILTER_SANITIZE_STRING);
$cleanyear=filter_var($_POST['year'],FILTER_SANITIZE_NUMBER_INT);
$cleanprice= filter_var($_POST['price'],FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
$cleanimgpath= filter_var($_FILES['imgpic']['name'],FILTER_SANITIZE_STRING);

echo"<br>".$cleanimgpath;
echo"<br>".$cleanname;
//$cleanusername= filter_var($_SESSION['userid'],FILTER_SANITIZE_STRING);

include "imageprocess.php";

echo"<pre>".$cleanname."<br>".$cleantype."<br>".$cleanyear."<br>".$cleanprice."<br>".$cleanimgpath;

$imgfullname="processforms".$cleanimgpath;
echo"<br>".$imgfullname;

//2. Prepare SQL statement

$statement="INSERT INTO product(name,type,year,price,imgpath,username) VALUES('".$cleanname."','".$cleantype."',".$cleanyear.",".$cleanprice.",'".$cleanimgpath."','".$username."');";

echo"<br> testing inserted sql statement...<br>".$statement;
$conn->query($statement); 
//header('location:../sell.php');

?>