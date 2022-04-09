<?php
session_start();

$con=mysqli_connect("localhost","root","") ;

mysqli_select_db($con,"registration")  ;

$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from usertable where username ='$name' && password ='$pass'";

$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if ($num==1){
	$_SESSION['user']= $name;
	$_SESSION['password']=$pass;
	
header('location:index.php');
}
else
{

	//echo "<h1 style='text-align:center;'>Username or Password is invalid.<br>Click here to <a href='l.php'>try again</a></h1>";

	echo '<script>alert("Username or Password is invalid! PLEASE TRY AGAIN..")</script>';  
      echo '<script>window.location="l.php"</script>'; 

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	div{
		margin-top: 50px;
	}
</style>
</head>
<body>
	<div></div>

</body>
</html>
