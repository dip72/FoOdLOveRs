<?php
session_start();
$connect=mysqli_connect("localhost","root","","registration");
if(isset($_POST["sub"]))
{
    $user=$_POST["name"];
    $email=$_POST["email"];
    $mes=$_POST["message"];
    $sql="INSERT INTO commenttable(username,email,message) VALUES ('$user','$email','$mes');";
    $result = mysqli_query($connect,$sql);
    if($result)
    {
        echo '<script>alert("Thanks For Your Opinion..")</script>';  
      echo '<script>window.location="index.php"</script>'; 
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="cont.css">
    <link rel="stylesheet" type="text/css" href="js/Bootstrap.js">
     <link rel="stylesheet" href="css/Bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="footer.css">
  <style type="text/css">
      
  </style>
</head>
<body>
    <div>
        <?php include('homenav.php'); ?>
      </div>

<div class="wrapper">
    <div class="contact-form">
            <div ><p class="title">Contact us </p>
            <p class="t"> For Any Query Or Opinion Just Let Us Know</p></div>
             <form action="contact.php" method="post">
                 <div class="input-fields">
                    <div class="items">
                        <label for="name" class="label">Name</label>
                        <input id="name" type="text" name="name"  class="input">
                    </div>
                    <div class="items">
                        <label for="email" class="label">Email</label>
                        <input id="email" type="text"  name="email"  class="input">
                    </div>
                    
                    <div class="items">
                        <label for="msg" class="label">Message</label>
                        <textarea id="msg" class="text-area" name="message"></textarea>
                    </div>
             <div align="center" >
                <input class="btn" type="submit"  name="sub" value="Submit">
            </div>
        </div>
        </form>
    </div>
</div>  

  <!-- <div class="container">
  <form action="contact.php" method="post">
    <label for="fname"> User Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="text" id="lname" name="email" placeholder="Your email..">

    <label for="subject">Message</label>
    <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit"  name="sub" value="Submit">
  </form>
</div>-->



<div style="margin-top: 600px;">
  <?php include 'footer.php'; ?>
</div>
</body>
</html>