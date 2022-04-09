<?php
// define variables and set to empty values
session_start();
$flag=0;
$s1=$s2=$s3="";
$f=0;
  if (empty($_POST["user"])== true) {
    $flag=1;
  } 
    // check if name only contains letters and whitespace
  if (!preg_match("/^[a-zA-Z ]*$/",$_POST["user"])) {
      echo '<script>alert("Only letters and white space allowed!! Please Try Again..")</script>';  
      echo '<script>window.location="reg.php"</script>'; 
      $f=1;
    }
   
  
  if (empty($_POST["email"])== true) {
   $flag=1;

  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       echo '<script>alert("Invalid email format!!Please Enter Correct Email..")</script>';  
      echo '<script>window.location="reg.php"</script>'; 
       $f=1;
    }
  }
  if (empty($_POST["password"])== true) {
    $flag=1;
  } else {
    $gender = test_input($_POST["password"]);
  }

  if (empty($_POST["fname"])== true) {
    $flag=1;
  }
  if (empty($_POST["lname"])== true) {
    $flag=1;
  }
  if (empty($_POST["contact"])== true) {
    $flag=1;
  }



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($flag==0  && $f==0)
{
$con=mysqli_connect("localhost","root","") ;

mysqli_select_db($con,"registration")  ;

$name=$_POST['user'];
$pass=$_POST['password'];
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$contact=$_POST['contact'];

$s="select * from usertable where username ='$name'";

$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if ($num==1){
	$s3="username already taken";
  echo $s3;
} 
else
{
  $reg="insert into usertable(fname,lname,username,email,contactno,password) values ('$fname','$lname','$name','$email','$contact','$pass');";
	mysqli_query($con,$reg);
	echo "<h1>REGISTRATION SUCCESSFULLY<br><hr>";

}
}
else{
  header('loction:modal.php');
}

?>
