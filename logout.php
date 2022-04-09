<?php
session_start();
setcookie('cookie_name',"",time-3600);
unset($_SESSION['user']);
header("location:index.php");
?>