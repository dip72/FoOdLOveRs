<?php
session_start();

$connect=mysqli_connect("localhost","root","","registration");

    $permited  = array('jpg', 'jpeg', 'png', 'gif');

    $file_name = $_FILES['image']['name'];

    $file_size = $_FILES['image']['size'];

    $file_temp = $_FILES['image']['tmp_name'];

    $folder = "img/";

    move_uploaded_file($file_temp, $folder.$file_name);

    $id = $_SESSION['user'];
    $f=$folder.$file_name;

    $query = "update usertable set image='$f' where username='$id'";
    $result = mysqli_query($connect, $query); 
    if($result)
    {
    	echo '<script>alert("Upate Done Successfully")</script>';  
      echo '<script>window.location="user.php"</script>'; 
    }
    else
    {
    	echo '<script>alert("Update Failed.PLEASE TRY AGAIN..")</script>';  
      echo '<script>window.location="l.php"</script>'; 
    }
?>