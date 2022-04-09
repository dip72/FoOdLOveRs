<?php

 session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<style type="text/css">
		h1{
			color: yellow;
			margin-top: 300px;
			margin-left: 500px;
			size: 120px;
			font-family: "Times New Roman", Times, serif;
            font-size: 80px;
			display: block;

		}
		h2{
			color: orange;
			margin-top: 30px;
			margin-left: 600px;
			size: 50px;
			font-family: "Times New Roman", Times, serif;
            font-size: 30px;
			display: block;

		}
	</style>
</head>
<body background="down.jpg">
        
        <h1>Welcome <?php echo $_SESSION['user'];?> </h1>
        <h2>Your password is: <?php echo $_SESSION['password'];?> </h2>
    </body>
</html>