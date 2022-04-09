<?php
session_start();
$connect=mysqli_connect("localhost","root","","registration");

?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="user.css">
<link rel="stylesheet" type="text/css" href="adminnav.css">
<link rel="stylesheet" type="text/css" href="footer.css">

<style>

</style>
</head>
<?php include('navadmin.php'); ?>

<div class="main"><br>
<h1 style="color: white; font-size: 53px;font-family: Comic Sans MS, Comic Sans, cursive;">Users</h1><br> <hr>
<div>
  <?php 
                $query = "SELECT * FROM usertable";  
                $result = mysqli_query($connect, $query);  
          
                //echo mysqli_num_rows($result);
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($ro = mysqli_fetch_array($result))  
                     {  
                      if($ro["username"]!="admin"){
                ?>
                <div>
  <div class="idk">
     <div class="img">
          <img src="<?php echo $ro["image"]; ?>" style="width: 150px; height: 150px;">
    
      </div>
    <div class="des">
        <h3 style="color:  #EF172C; font-family: Comic Sans MS, Comic Sans, cursive; font-size: 45px;"><?php echo $ro["username"]; ?></h3>
        <h4 style="color: white; font-size: 20px;font-family: Comic Sans MS, Comic Sans, cursive; ">NAME :: <?php echo " ".$ro["fname"]." ".$ro["lname"]; ?></h4>  
        <h4 style="color: white; font-size: 20px; font-family: Comic Sans MS, Comic Sans, cursive;">EMAIL ::<?php echo  " ".$ro["email"]; ?></h4>  
        <h4 style="color: white; font-size: 20px; font-family: Comic Sans MS, Comic Sans, cursive;">CONTACT NO ::<?php echo " ".$ro["contactno"]; ?></h4>  
        <h4 style="color: white; font-size: 20px; font-family: Comic Sans MS, Comic Sans, cursive;">PASSWORD ::<?php echo " ".$ro["password"]; ?></h4> 
    </div>
</div>
 </div>           <?php } 
            }
          }
           ?>

   

</div>
<div>
  <?php include 'footer.php'; ?> 
</div>
</body>
</html>