<?php
session_start();

$connect=mysqli_connect("localhost","root","","registration");
if(isset($_POST["del"]))
{
	$n=$_POST["hidden_name"];
	$m=$_POST["hidden_msg"];
	$sql="DELETE FROM commenttable where username='$n' and message='$m';";
	$result = mysqli_query($connect, $sql); 

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>comments</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="comment.css">
	<link rel="stylesheet" type="text/css" href="adminnav.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
</head>
<body>
	<?php include('navadmin.php'); ?>
<div class="main"><br>

<h1 style="padding-top:10px; color: brown; font-size: 45px;font-family: Comic Sans MS, Comic Sans, cursive;">Messages</h1>
 <hr>


<div align="center">

<?php
 		$query = "SELECT * FROM commenttable";  
        $result = mysqli_query($connect, $query); 
         if(mysqli_num_rows($result) > 0)  
           { 
          	while($row = mysqli_fetch_array($result))  
           { 
                
                ?>
         <div class="ms" align="center">    
		<form action="comment.php" method="post">
			<div class="container-fluid">     
  				<div class="row">
    <div class="col-sm-6" style="background-color:#FCDEAB;border-width: 3px 3px 1px 3px;border-style:  solid ;border-color: brown;">
      <p class="p"> <?php echo $row["username"]; ?></p>
    </div>
    <div class="col-sm-6" style="background-color:#FCDEAB ;border-width: 3px 3px 1px 0px ;border-style: solid;border-color:  brown;">
      <p class="p"><?php echo $row["email"]; ?></p>  
    </div>
      <div class="col-sm-12" style="background-color:#FCDEAB;border-width:0px 3px 3px 3px ;border-color:  brown; border-style: solid;">
      <p class="p"><?php echo $row["message"]; ?></p>
    </div>
    <div class="col-sm-12" align="center" style="padding-top: 30px;">
     <input type="hidden" name="hidden_name" value="<?php echo $row["username"]; ?>" /> 
     <input type="hidden" name="hidden_msg" value="<?php echo $row["message"]; ?>" /> 
    <input type="submit" name="del" class="btn" value="Delete" />
    </div> 
</div>
</div>
</form> 
</div> 
<?php } } ?>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>