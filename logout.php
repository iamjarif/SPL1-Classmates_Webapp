<?php 
  session_start(); 

  if (!isset($_SESSION['SId'])) {
  	$_SESSION['msg'] = "You must log in first";
    echo"<script> window.location.href ='login.html'</script>";

  }
  if (isset($_POST['logout'])) {
  	session_destroy();
  	unset($_SESSION['SId']);
  	echo"<script> window.location.href ='login.html'</script>";
    exit();
  }
?>