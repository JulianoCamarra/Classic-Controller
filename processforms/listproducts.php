<?php
 session_start();
 
require "SQL_API.php";
require "library.php";


$conn=DB_Connection();
$table='product';
$condition=""

$records=getRecordsFromTable($conn, $table, $condition)

//1. Get all product rows in table


