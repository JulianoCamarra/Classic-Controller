<?php

session_start();

require "SQL_API.php";
include "library.php";

printArray("post", $_POST);



$conn=DB_Connection();

//1. Sanitize all the post data// 

$cleanuser= filter_var($_POST['uname'], FILTER_SANITIZE_STRING);
$cleanpwd= filter_var($_POST['passwd'],FILTER_SANITIZE_STRING);
$cleanretype= filter_var($_POST['retype'],FILTER_SANITIZE_STRING);
$cleanemail= filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);

echo "<pre>".$cleanuser."<br>".$cleanpwd."<br>".$cleanretype."<br>".$cleanemail;




if ($cleanpwd!=$cleanretype){
    header("Location: ../registration.php" );    
}

//3. Encrypt password

$cleanpwd=sha1($cleanpwd);


//2. Prepare for SQL entry 

$insertsql= "INSERT INTO user(name,passwd,email,usertype) VALUES ('".$cleanuser."','".$cleanpwd."','".$cleanemail."','user');";

echo"<br> testing inserted sql statement...<br>".$insertsql;

if (mysqli_num_rows($insertsql)>0){
    echo "<br><br> username already exists";
} else {
    echo "<br><br> username does not exist in db yet. Adding user to db...";
    $conn->query($insertsql); 
    $_SESSION['userid']=$cleanuser;
    $_SESSION['usertype']="user";
  
     
    }

   
  
?>