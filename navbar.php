<div>
<nav class="navbar ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-size: 50px; font-family: Brush Script MT, Brush Script Std, cursive;"> UserProfile</a>
    </div>
    <ul class="nav navbar-nav" style="font-size: 25px; font-family: Comic Sans MS, Comic Sans, cursive;">
      <li class="active"><a href="#" style="font-size: 35px; font-family: Comic Sans MS, Comic Sans, cursive; color: violet;"><?php echo $_SESSION['user']; ?></a></li></ul>
      <ul class="nav navbar-nav navbar-right" style="font-size: 25px;">
        <li><a href="index.php" style="font-size: 25px; font-family: Comic Sans MS, Comic Sans, cursive;" >Home</a></li>
        <li><a href="#" style="font-size: 25px; font-family: Comic Sans MS, Comic Sans, cursive;" onclick="document.getElementById('modal-wrapper1').style.display='block'" style="width:200px; margin-top:200px; margin-left:160px;">Update Picture</a></li> 

      <li><a href="#" style="font-size: 25px; font-family: Comic Sans MS, Comic Sans, cursive;" onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:200px; margin-top:200px; margin-left:160px;">Change Password</a></li>
      <li><a href="logout.php" style="font-size: 25px; font-family: Comic Sans MS, Comic Sans, cursive;">Logout</a></li>
    </ul>
  </div>
</nav>
</div>