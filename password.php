<?php
session_start();
$con=mysqli_connect("localhost","root","") ;
mysqli_select_db($con,"registration")  ;

$user=$_SESSION['user'];
$s="select * from usertable where username='$user'";

$result = mysqli_query($con,$s);
$row = mysqli_fetch_array($result);

$old=$_POST['psw1'];
$new=$_POST['psw2'];
$renew=$_POST['psw3'];
$t=$row['password']; 

if($t==$old)
{
	if($new==$renew)
	{
	
		$sql="update usertable set password='$new' where username='$user'";
		$r=mysqli_query($con,$sql);
   		if ($r) {
   			echo "3";
   			?> <p style="text-align: center"><b> <?php echo "Congratulations You have successfully changed your password";?></b></p>
				 <?php
				     }
				    }
			        
			       else
			        {
			       		?> <p style="text-align: center"><b> <?php echo "Password do not matched";?></b></p>
				        	<?php
			       }
		   		}
		   		else
		        {
		        	?> <p style="text-align: center"><b> <?php echo "You have entered an incorrect password";?></b></p>
				        	<?php
		        }
		     
	?>
   		