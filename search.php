


<?php

session_start();
$connect=mysqli_connect("localhost","root","","registration");
 $s="select * from order_table";

    $result = mysqli_query($connect,$s);
    $num=mysqli_num_rows($result);
    if($num==0) $t=1;
    else
    { if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                      $t= $row["serial"]+1;
                     }
                 }
    }

if(isset($_SESSION["shopping_cart"]))  
	{foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
           unset($_SESSION["shopping_cart"][$keys]);   
           }
     }

if($_POST['select']=="food")
 {
$s =strtoupper($_POST['search']);
$_SESSION["food"]=$s;
$_SESSION['t']=$t;
header('location:food.php');
 }
 else
 {
$s =strtoupper($_POST['search']);
$_SESSION["res"]=$s;
$_SESSION['t']=$t;
header('location:restuarant.php');
 }

?>