<?php

function printArray($label, $arr){
    echo "<pre>".$label." : ";
    print_r($arr);
}


function greetUser(){
    if (isset($_SESSION['userid'])) {

        $username=$_SESSION['userid'];
        echo"<li class=\"link\"><b>Welcome, ".$username."</b></li>";
        echo"<li><a href=\"sell.php\" class=\"link\">Sell</a></li>";
        echo"<li><a href=\"mycart.php\" class=\"link\">My Cart</a></li>";
       echo" <li><a href=\"processforms/logoutprocess.php\" class=\"link\">Logout</a></li>";
    } else {
        echo"<li><a href=\"registration.php\" class=\"link\">Register</a></li>";
        echo"<li><a href=\"login.php\" class=\"link\">Login</a></li>";
    }
}

?>
