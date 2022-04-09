<?php

 session_start();
 ?>
 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm</title>
		 <link rel="stylesheet" type="text/css" href="a.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('img/p.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="img/w.jpg" alt="" style="width: 300px; height: 500px;">
				</div>
				<form autocomplete="off" method="post" action="database.php">
					<h3>Registration Form</h3>
					<div class="form-group">
						<input type="text" placeholder="First Name" name="fname" class="form-control" >
						<input type="text" placeholder="Last Name" name="lname" class="form-control" >
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Username" name="user" class="form-control" required>
						
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" name="email" class="form-control" required>
						
					</div>
					<div class="form-wrapper">
						<select name="gender" id="" class="form-control">
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Contact No" name="contact" class="form-control" required>
						
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Password" name="password" class="form-control" required>
					
					</div>
					<input class="btn" type="submit" name="submit" value="SIGN UP">  
				</form>
			</div>
		</div>
		
	</body>
</html>