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
    $_SESSION['t']=$t;
if(isset($_POST["add"]))  
 { 
 	$id=$_GET["id"];
 	$name=$_POST["hidden_name"];
 	$_SESSION["res"]=$name;
 	header('location:restuarant.php');
 }


?>
<!DOCTYPE html>
<html>
<head>
	<title>BROWSE RESTUARANTS</title>

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="browse.css">
   <link rel="stylesheet" type="text/css" href="footer.css">
<style >
  div.tail{
  background: url('img/tile.jpg');
  height: 1600px;
}
</style>
   
</head>
<body>
<div>
<div class="head">
<?php include('homenav.php'); ?>

    <div >
      <h1 class="h">Browse Restaurants</h1>
      <h4> Choose Your Favourite Restaurant</h4>
    </div>
   </div>
<div class="tail">
  <div class="container" style="width:1100px; padding-top:50px;">  
                <?php  
                $query = "SELECT * FROM resturantinfo ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-6" style=" padding-bottom: 50px;">  
                     <form method="post" action="browse.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="<?php echo $row["image"]; ?>" style="width: 200px; height: 200px;" /><br />  
                               <h4 class="text-info"><?php echo $row["res_name"]; ?></h4>  
                               <h5 class="text-danger"> <?php echo $row["address"]; ?></h5>  
                               <h6><?php echo $row["type"]; ?></h6>
                               <p style=" font-size: 10px;">Delivery AVAILABLE <br>Delivery Est: 1 hour approx <br>Delivery Fee: ৳40.00 </p>
                               <input type="hidden" name="hidden_name" value="<?php echo $row["res_name"]; ?>" />  
                               <input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="View Menu" />  
                          </div>  
                     </form>  
                </div>  
                 <?php  
                     }  
                }  
                ?>  

</div>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>