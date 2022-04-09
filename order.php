<?php
session_start();
$connect=mysqli_connect("localhost","root","","registration");
if(isset($_POST["del"]))
{
  $n=$_POST["username"];
    $query = "DELETE FROM order_table where serial=$n;";  
     $result = mysqli_query($connect, $query);  

}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="order.css">
<link rel="stylesheet" type="text/css" href="adminnav.css">
<link rel="stylesheet" type="text/css" href="footer.css">
<style>

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  font-size: 20px;
  color: #C4074C;
}

</style>
</head>
<body >

<?php include('navadmin.php'); ?>

<div class="main">
<h1 style=" color: #C4074C; font-size: 50px;font-family: Comic Sans MS, Comic Sans, cursive;">Orders</h1> <hr>
<div>
   <h3 class="sad"> Dilevery Done ? Update the order table....</h3>
    <form action="order.php" method="post">
      <input type="text" name="username" placeholder="Enter Serial"><br><br>
      <input type="submit" name="del" class="btn" value="Enter">
    </form>
  </div>
  <div>
    
     <?php  

                $query = "SELECT * FROM order_table";  
                $result = mysqli_query($connect, $query);  
                $list=array();
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                      array_push($list, $row["serial"]);
                     }
                 }
                $list1=array_unique($list);
                foreach ($list1 as $u) {
                  # code...

                 $query = "SELECT * FROM order_table where serial=$u";  
                $t=0;
                $result = mysqli_query($connect, $query); 
                ?>
                <div>

                <h1 class="k" style="font-family:Luminari, fantasy; color: #ba3363; font-weight: 200px;"><?php echo $u;?></h1>
               
                <table>
                <tr>
                <th>Items</th>
                <th>Price</th>
                <th>Quantity</th>
                </tr>
                <?php 
                  if(mysqli_num_rows($result) > 0)  
                { 
                  while($row = mysqli_fetch_array($result))  
                     {
                
                ?>
                <tr>
                  <td><?php echo $row["item_name"]; ?></td>
                    <td><?php echo $row["price"]; ?></td>
                    <td><?php echo $row["quantity"]; ?></td>
                </tr>
              <?php 
              $t=$t+$row["price"]*$row["quantity"];
              $res=$row["res_name"];
              $user=$row["username"];
            } 
          }?>
          </table>
  </div>
   <div class="sad"> <?php
              echo "Ordered By ".$user."<br>";
              echo "Total:     ".$t."<br>";
              echo "Ordered From    ".$res;
              ?>
            </div>
<?php } ?>

</div>
</div>
<div style="margin-top: 150px; margin-left: 100px;">
<?php include 'footer.php'; ?>
</div>
</body>
</html>
