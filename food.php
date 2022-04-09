<?php
session_start();
$connect=mysqli_connect("localhost","root","","registration");

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
   <link rel="stylesheet" type="text/css" href="fd.css">
   <link rel="stylesheet" type="text/css" href="footer.css">
</head>
<body>
<div>
<div class="head">
	<div>
<nav class="navbar ">
  <div class="container-fluid">
    <div class="navbar-header"></div>
    <ul class="nav navbar-nav" >
      <li class="active"><a href="#" style="font-size: 25px; font-family: Comic Sans MS, Comic Sans, cursive; color: white;">foOdLoVErs</a></li></ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" style="font-size: 15px; font-family: Comic Sans MS, Comic Sans, cursive; cursive; color: white;" >Home</a></li>
        <li><a href="#" style="font-size: 15px; font-family: Comic Sans MS, Comic Sans, cursive; color: white;">About</a></li>
        <li><a href="#" style="font-size: 15px; font-family: Comic Sans MS, Comic Sans, cursive; color: white;">Browse Restaurant</a></li>
      <li><a href="#" style="font-size: 15px; font-family: Comic Sans MS, Comic Sans, cursive; color: white;">Contact</a></li>
        <?php 
          if(isset($_SESSION['user']))
        {
      $s=$_SESSION['user'];
        ?>
      <li><a href="user.php" style="font-size: 20px; font-family: Comic Sans MS, Comic Sans, cursive; color: violet;"><?php echo $s;?></a></li>
      <?php
      }

      else{
      $s="SignUp & LogIn";?>
      <li><a href="l.php" style="font-size: 15px; font-family: Comic Sans MS, Comic Sans, cursive; color: white; "><?php echo $s;?></a></li>
      <?php } ?>
    </ul>
  </div>
</nav>
</div>





        <?php
    
                $t=$_SESSION['food'];
                $query = "SELECT distinct res_name FROM resturants where type='$t'";  
                $result = mysqli_query($connect, $query);  
        ?>

    <div >
    	<h1 class="h"><?php echo mysqli_num_rows($result)."result(s) found"; ?></h1>
    </div>
   </div>
<div>
  <?php  
  				
                //echo mysqli_num_rows($result);
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  

                      $sql= "SELECT * from resturantinfo";
                      $rest = mysqli_query($connect, $sql);
                       if(mysqli_num_rows($rest) > 0)  
                {  
                     while($ro = mysqli_fetch_array($rest))  
                     {  
                        if($row["res_name"]==$ro["res_name"])
                        {  
               	?>
                <div>
  <div class="idk">
     <div class="img">
          <img src="<?php echo $ro["image"]; ?>" style="width: 150px; height: 150px;">
    
      </div>
    <div class="des">
       <form method="post" action="food.php" class="form-inline">
        <div> 
        <h3 style="color:  #edb9a1; font-family: Impact, fantasy; font-size: 35px;"><?php echo $row["res_name"]; ?></h3>
         <p style="color: white; font-size: 17px;">Delivery AVAILABLE <br>Delivery Est: 1 hour approx <br>Delivery Fee: ৳40.00 </p>
         <br>
        <h4 style="color: #d3a172; "> <?php echo $ro["address"]; ?></h4>  
	       <input type="hidden" name="hidden_name" value="<?php echo $row["res_name"];?>" />  
    <!--<input type="hidden" name="hidden_price" value="" /> -->
        <input type="submit" name="add" style="margin-top:5px; background-color: #c6605d ; color: white; width:300px;  height:50px; padding: 5px; font-family: Comic Sans MS, Comic Sans, cursive; font-size: 25px" value="View Menu" /> 
	       </div>
        </form>
    </div>
</div>
 </div>           <?php } 
            }
          }
        }

      }
           ?>

   

</div>
<?php include 'footer.php'; ?>
</body>
</html>