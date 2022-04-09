<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="footer.css">

<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
   font-size: 17px;
   padding: 50px;
}
	body{
		background-image: url('https://images.wallpaperscraft.com/image/coffee_hands_cup_book_116945_1400x1050.jpg');
	background-size: cover;
	background-repeat: no-repeat;


	}
	h1{
		color: white;
		font-size: 45px;
		font-family: Comic Sans MS, Comic Sans, cursive;
		font-weight: 700;
		padding: 25px;
		text-align: center;
	}
	p.as{
		color: white;
		font-size: 25px;
		font-family: Comic Sans MS, Comic Sans, cursive;
		padding: 100px;
		text-align: center;	
		border-right: 2px;
		border-bottom: 2px;
		border-color: white;

	}
</style>	
</head>
<body>
	<?php include('homenav.php'); ?>
<div>
	<h1> About Us</h1>
	<p class="as">FoOdLoVeRs is an online food ordering and delivery company where a foodie can find different types of food from your best neighborhood restaurants.We work as a team and our motto is "we deliver food that you love". We provide you excellent food delivery service with good quality. Our intention is to achieve your 100% satisfaction</p>
</div>

<?php include('footer.php'); ?>
</body>
</html>