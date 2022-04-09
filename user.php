<?php
 session_start();
 $s=$_SESSION['user'];

if($s=="admin")
{
    header('location:admin.php');
}
else
{
$con=mysqli_connect("localhost","root","") ;
mysqli_select_db($con,"registration")  ;

$s="select * from usertable where username ='$s'";

$result = mysqli_query($con,$s);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="userprofile.css" />
    <link rel="stylesheet" type="text/css" href="mod.css" />
    <link rel="stylesheet" type="text/css" href="footer.css">
</head>
<body>
  <?php include('navbar.php'); ?>
    <div class="card">
        <div class="card-header">
            <img src="<?php echo $row['image']; ?> " alt="<?php echo $row['image']; ?>" class="profile-img">
        </div>
        <div class="card-body">
            <p class="full-name"><?php echo $row["fname"]." ".$row["lname"]; ?></p><br>
            <p class="username"><?php echo $row["email"]; ?></p><br>
            <p class="city"><?php echo $row["contactno"]; ?></p>
            <p class="desc"><a href="#">Add Address</a></p>
            <p>
                <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon google-plus"><i class="fab fa-google-plus"></i></a>
            </p>
        </div>
        
    
    </div>

<?php include 'baa.php'; ?>
<?php include('modal.php'); ?>
<div style="margin-top: 100px;">
    <?php include 'footer.php'; ?>
</div>
</body>
</html>
<?php } ?>