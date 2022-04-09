<?php

session_start();


$connect=mysqli_connect("localhost","root","","registration");

$r=$_SESSION["res"];
$t=$_SESSION['t'];
if(isset($_POST["add_to_cart"]))  
 {  
  if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];

      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
                 $a=$item_array["item_name"];
           $a1=$item_array["item_price"];
           $a2=$item_array["item_quantity"];
           $sql="insert into order_table(username,res_name,item_name,price,quantity,date,serial) values ('$user','$r','$a',$a1,$a2,NOW(),$t);";
          $result = mysqli_query($connect,$sql);
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="restuarant.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
           $a=$item_array["item_name"];
           $a1=$item_array["item_price"];
           $a2=$item_array["item_quantity"];
           $sql="insert into order_table(username,res_name,item_name,price,quantity,date,serial) values ('$user','$r','$a',$a1,$a2,NOW(),$t);";
          $result = mysqli_query($connect,$sql);
      } 
    } 
    else
    {
      echo '<script>alert("Please Login To Order")</script>';  
      echo '<script>window.location="restuarant.php"</script>';  

    }
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="restuarant.php"</script>';  
                     $q=$values["item_name"];
                     $sqll="delete from order_table where item_name='$q' AND serial=$t;";
                     $result = mysqli_query($connect,$sqll);

                }  
           }  
      }  
 }  

?>

<!DOCTYPE html>
<html>
<head>
	<title>hhk</title>
	<link rel="stylesheet" type="text/css" href="rest.css">
	<link rel="stylesheet" type="text/css" href="js/Bootstrap.js">
	 <link rel="stylesheet" href="css/Bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="footer.css">
  <style>

    div.header{
  background: url('img/restaurant-1.jpg');
  text-align: center;
  padding: 35px;
  color: white;
  height: 300px;
  opacity: 0.8;
  background-repeat: no-repeat;
  background-size: cover;
}
  div.d{
  background: url('img/poi.jpg');
  opacity: 0.8;
  max-height: 7500px;
  overflow: auto;
  background-size: cover;
  background-repeat: no-repeat;
  
}
  </style>
</head>
<body>
	<div  >
		<div class="header">
      <?php include('homenav.php'); ?>
			<h1 style="font-family: Brush Script MT, Brush Script Std, cursive; font-size: 75px;"><?php echo $_SESSION["res"]; ?></h1>
		</div>
	 	<div class="d">
	 		<div  class="list">
	 		    <?php  
	 		    $t=$_SESSION["res"];
                $query = "SELECT * FROM resturants where res_name = '$t'";  
                $result = mysqli_query($connect, $query);  
                $list=array();
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     	array_push($list, $row["type"]);
                     }
                 }
                $list1=array_unique($list);
                foreach ($list1 as $type) {
                	# code...

                ?>
                <h1 class="k" style="font-family:Luminari, fantasy; color: #ba3363;"><?php echo $type.":<br>";?></h1>
                <?php
                 $query = "SELECT * FROM resturants where type='$type' ";  
                $result = mysqli_query($connect, $query);
                ?>
            	<div>
                <?php 
                  if(mysqli_num_rows($result) > 0)  
                { 
                	while($row = mysqli_fetch_array($result))  
                     { 
                
                ?>
             
                <form method="post" action="restuarant.php?action=add&id=<?php echo $row["id"]; ?> " class="form-inline">  
                         <div style=" background-color:white; border-radius:7px; padding:6px; width: 70%" align="center ">   
                               <h3 style="color:  #c76100; font-family: Papyrus, fantasy;"><?php echo $row["item"]; ?></h3>  
                               <h4 style="color: red;">Tk. <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" width="50%" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["item"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px; color: #ba3363" value="+" />  
                         </div>  
                </form>  
			  <?php  
                     }  
                }?>
				</div>
			  <?php
               }
                ?> 
             </div>
			<div class="about">
				<div style=" background-color: white; padding: 30px; width: 90%; " align="center"  >
					<h2 class="k"style="color: #CD5C5C; font-family: Papyrus, fantasy; font-weight: 700;">Delivery Info</h2>
					<p>Delivery Est: 1 hour Approx<br>Delivery Fee: Tk.40.00</p>

				</div>
				<div style=" padding: 10px; width: 90%; background-color: white; ">
				<h3 class="k" align="center" style="color: #CD5C5C; font-family: Papyrus, fantasy; font-weight: 700;">Your Order:</h3>
				<?php
				 if(!empty($_SESSION["shopping_cart"]))  
				 {
				 	?>
				<div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="15%">Price</th>
                          		<th width="20%">IN sum</th>
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php  
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>$ <?php echo $values["item_price"]; ?></td>  
                               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="restuarant.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>

                <?php
            }
             else { ?>
              <br><h4 style="font-family:Luminari, fantasy;" align="center"><?php echo "You haven't place any Order yet.";?></h4><br><br><br>
            <?php } ?>
			</div>
			<div style="background-color: white;  padding: 10px; width: 90%;" >
				<h4 h4 style="font-family:Luminari, fantasy;" ><br><br>Want To Make A Delivery? CONFIRM IT!!<br><br></h4>
			<?php
				 if(empty($_SESSION["shopping_cart"]))  
				 {
			?>
			<div align="right" style="margin-bottom: 100px;"><button class="button disabled">Confirm</button></div>
			<?php
		}
		else{
			?>
			<div align="right" style="margin-bottom: 80px;"><button class="button"><a href="orderconfirm.php" style="color: white"> Confirm</a></button></div>
			<?php } ?>
            </div>
</div>
		</div>


<?php include('footer.php'); ?>

</body>
</html>