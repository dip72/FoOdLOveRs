<div style="margin-top: 15px;">
<nav class="navbar ">
  <div class="container-fluid">
    <div class="navbar-header"></div>
    <ul class="nav navbar-nav" >
      <li class="active"><a href="#" style="font-size: 35px; font-family: Comic Sans MS, Comic Sans, cursive; color: white;">foOdLoVErs</a></li></ul>



      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" style="font-size: 25px; font-family: Comic Sans MS, Comic Sans, cursive; cursive; color: white;" >Home</a></li>

        <li><a href="about.php" style="font-size: 25px; font-family: Comic Sans MS, Comic Sans, cursive; color: white;">About</a></li>

        <li><a href="browse.php" style="font-size: 25px; font-family: Comic Sans MS, Comic Sans, cursive; color: white;">Browse Restaurant</a></li>

      <li><a href="contact.php" style="font-size: 25px; font-family: Comic Sans MS, Comic Sans, cursive; color: white;">Contact</a></li>
        <?php 
          if(isset($_SESSION['user']))
        {
      $s=$_SESSION['user'];
        ?>
      <li><a href="user.php" style="font-size: 29px; font-family: Comic Sans MS, Comic Sans, cursive; color: violet;"><?php echo $s;?></a></li>
      <?php
      }

      else{
      $s="SignUp & LogIn";?>
      <li><a href="l.php" style="font-size: 25px; font-family: Comic Sans MS, Comic Sans, cursive; color: white; "><?php echo $s;?></a></li>
      <?php } ?>
    </ul>
  </div>
</nav>
</div>

