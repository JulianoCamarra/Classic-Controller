<?php

session_start();

require "SQL_API.php";
include"library.php";

printArray("post", $_POST);

$conn=DB_Connection();

//1. get POST data
$cleanuser= filter_var($_POST['uname'], FILTER_SANITIZE_STRING);
$cleanpwd= filter_var($_POST['passwd'],FILTER_SANITIZE_STRING);
$cleanpwd=sha1($cleanpwd);


//2. check if data already exists in DB

$table="user";
$condition=" name='".$cleanuser."' AND passwd='".$cleanpwd."';";


$records= getRecordsFromTable($conn, $table, $condition);

printArray("array:", $records);

if ($records!==false){
    $_SESSION['userid']= $records[0]['name'];
    $_SESSION['usertype']=$records[0]['usertype'];
    header('location:../index.php');
    
}

printArray("session ", $_SESSION);

?>