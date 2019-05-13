<?php


function DB_Connection(){
    
    $dbname="ecommerce";
    
    $conn= new mysqli("localhost","","41663",$dbname);
    
    if($conn->connect_errno) 
    {
        echo"no connection";
        die("Connection failed".$conn->connect_error);
    } else {
     echo"connection successful";
    }
    return $conn;
    
}

function close_db($conn){
    $conn->close();
}


function insert_record($conn,$table,$columns,$values){
    
    $statement="INSERT INTO".$table."(".$columns.") VALUES (".$values.");";
    echo "<br> testing sql: ".$statement;
    
    if ($conn->query($statement)==TRUE){
        echo "New user added";
    } else {
        echo "Error: ".$statement."<br>".$conn->error;
    }
    return statement;
}

function getRecordsFromTable($conn,$table, $condition){
    
    $statement="SELECT * FROM ".$table." WHERE".$condition;
    $result= $conn->query($statement);
    $allRecords=array();
    
    if ($result->num_rows>0){
        // fetch_assoc is like getting the values of each column for that specific row
        while ($record=$result->fetch_assoc())  {
            
            $allRecords []= $record;
        }
        
        return $allRecords;
        
    } else {
        echo "<br> user doesnt exists";
        return false;
    }
}


?>
