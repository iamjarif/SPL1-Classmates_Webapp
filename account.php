<?php
include("connection.php");
include("login.php");
$user=$_SESSION['SId'];
$get_user="select * from students where SId='$user'";
$run_user=mysqli_query($conn,$get_user);
$row=mysqli_fetch_array($run_user);
$user_id=$row['SId'];
$user_name=$row['Name'];
$user_email=$row['Email'];
?>