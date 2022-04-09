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



<body style="background-image: url('https://images.wallpaperscraft.com/image/cake_coffee_breakfast_121614_1400x1050.jpg');">

<?php include 'homenav.php'; ?>

	<div class="container">
    <div class="row">
			<h4 class="text-left" style="margin-top: 200px; color: white;">Don't Have A Account ?  <a href="reg.php" style="font-size: 45px;">SIGN UP!!</a></h4>
    		<div class="col-md-4" >
    			<h3 class="text-left" style="margin-top: 30px;">login</h3>
          <form autocomplete="off" action="welcome.php" method="post">
    			<input type="text" class="form-control" name="user" placeholder="Enter Username"></br>
    			<input type="password" class="form-control" name="password" placeholder="Enter password">
          
          <input class="btn" type="submit" name="submit" value="Enter"></form> 
			</div>
    		<div class="col-md-7"></div>
        </div>
		</div>
    

</body>
</html>
