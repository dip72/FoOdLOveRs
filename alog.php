<?php

if($_POST['user']=='admin')
{
	if($_POST['password']=='admin')
	{

		echo empty($_POST['remember']);
	if(!empty($_POST['remember']))
  {
  	$name=$_POST['user'];
  	$_SESSION['user']=$name;
	setcookie('cookie_name',$name,time()+86400*30);
	echo"Cookie is set";
	
  }
  	echo '<script>alert("Login Done Successfully..")</script>';  
      echo '<script>window.location="admin.php"</script>'; 

}
}
else
{
	echo '<script>alert("Id Or Password is invalid...")</script>';  
      echo '<script>window.location="adminlogin.php"</script>'; 
}
