<?php
session_start();
$t=0;


?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirm Order</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="ordercon.css">
<style>

</style>
</head>
<body>
<?php include 'homenav.php'; ?>
<div align="center" style="font-family: Comic Sans MS, Comic Sans, cursive; color: white; font-size: 55px; font-weight: 500; margin-top: 45px;">
	<p>Confirm Order</p>
</div>
<div>
	<table>
                <tr>
                <th>Items</th>
                <th>Price</th>
                <th>Quantity</th>
                </tr>
	<?php
	for($i=0;$i<sizeof($_SESSION["shopping_cart"]);$i++)
	{
		$item=$_SESSION["shopping_cart"][$i];
		?>
		
                <tr>
                  <td><?php echo $item["item_name"]; ?></td>
                    <td><?php echo $item["item_price"]; ?></td>
                    <td><?php echo $item["item_quantity"]; ?></td>
                </tr>
                  <?php 
              $t=$t+$item["item_price"]*$item["item_quantity"];
            } 
          ?>
          </table>
</div>
 <div class="sad"> <?php
              echo "Total:     ".$t."<br>";
              ?>
            </div>

<div  style="font-family: Comic Sans MS, Comic Sans, cursive; color: white; font-size: 35px; font-weight: 500; margin-top: 45px;">
	Want To Change The Order? <a href="restuarant.php" style="color:  #ffd9b3;"> Click Here</a>
</div>
<div  align="center">
<p style="font-family: Comic Sans MS, Comic Sans, cursive; color: white; font-size: 25px; margin-top: 45px; ">To Confirm Order Enter Your Address & Contact No </p>

	
	<form method="post" action="orderconfirm.php">
		<input type="text" id="add" name="add" placeholder="Enter Address" style="width: 40%; margin-left: :50px; margin-top: 20PX;" ><BR>
    <input type="text" id="add" name="addPH" placeholder="Enter Contact No" style="width: 40%; margin-left: :50px;"><BR>
		<input type="submit" name="submit" value="Enter">
	</form>
</div>



</body>
</html>
<?php

$connect=mysqli_connect("localhost","root","","registration");
if ($_SERVER['REQUEST_METHOD']) {
	# code...
$t=$_SESSION['t'];
$address=$_POST["add"];
$user=$_SESSION["user"];

echo $address;
echo $user;
$q="INSERT into addresstable(username,address,serialno) values ('$user','$address',$t);";
$result = mysqli_query($connect, $q);  
if($address) header('location:confirm.php');
}
?>