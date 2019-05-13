<?php 


$conn=DB_Connection();

$table="product";
$condition="1";
$records= getRecordsFromTable($conn, $table, $condition);
//printArray("Testing records",$records );
 
foreach($records as $product){
    $id=$product['ID'];
    $name=$product['name'];
    $type=$product['type'];
    $year=$product['year'];
    $price=$product['price'];
    $imgpath=$product['imgpath'];
    $username=$product['username'];
    $fullimgname="processforms".$imgpath;
    
    $_SESSION['product']=$name;
    $_SESSION['seller']=$username;
    $_SESSION['quantity']=1;
    $_SESSION['price']=$price;

   
    echo"<form action=\"processforms/checkoutprocess.php\" method=\"POST\">";
 
  
    echo"<li class=\"productcontainer\"><img src=\"".$fullimgname."\" width=\"120\" height=\"120\" alt=\"mario\">
                                            <h5>".$username."</h5>
                                           <h5>".$name."</h5>
                                            <h5>".$year."</h5>
                                            <h5>$".$price."</h5>
                                 <input type=\"submit\"name=\"submit\" value=\"Add to Cart\">
                               
                                                
                                                                     
         </li>";
    if (isset($_POST['submit'])){       
        header('Location:checkoutprocess.php');
        
    }
}
echo"</ul>";

?>