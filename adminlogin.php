<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/Bootstrap.css">
  <link rel="stylesheet" type="text/css" href="js/Bootstrap.js">
  <link rel="stylesheet" type="text/css" href="styl.css">
</head>



<body style="background-image: url('https://images.wallpaperscraft.com/image/cake_dessert_biscuit_120526_1400x1050.jpg');">

<h3 class="text-left" style="margin-top: 150px; color: white; margin-left: 120px;"> Admin Login</h3>
	<div class="container">
    <div class="row">
			
    		<div class="col-md-4" >
    			<h3 class="text-left" style="margin-top: 30px;">login</h3>
          <form autocomplete="off" action="alog.php" method="post">
    			<input type="text" class="form-control" name="user" placeholder="Enter Username"></br>
    			<input type="password" class="form-control" name="password" placeholder="Enter password">
          <input type="checkbox" checked="checked" name="remember"> Remember me
          <input class="btn" type="submit" name="submit" value="Enter"></form> 
			</div>
    		
        </div>
		</div>
    

</body>
</html>
