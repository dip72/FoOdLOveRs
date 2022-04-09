<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Picture</title>
	 <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	 <link rel="stylesheet" type="text/css" href="propic.css">
   <style >
     body{
  background-image: url('https://images.wallpaperscraft.com/image/waffles_coffee_dessert_ice_cream_banana_104076_1400x1050.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  color: white;

}

   </style>
</head>
<body>
<?php include('navbar.php');
?>
<h1 style="margin-top: 100px; font-size: 50px; font-weight: 700;" align="center">Update Picture</h1>
<div >
<form action="upload.php" method="post" enctype="multipart/form-data">
    <p  style="margin-top: 15px; font-size: 35px; padding: 25px;" align="center">Select image to upload:</p>
   <div > <input type="file" name="fileToUpload" id="fileToUpload"></div>
   <div> <input type="submit" value="Upload Image" name="submit"></div>
</form>

</div>
</body>
</html>