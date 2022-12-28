<?php
session_start();
include("Connection.php");
if(isset($_POST['login']))
{
    $LSId=mysqli_real_escape_string($conn,$_POST['LSId']);
    $LPassword=mysqli_real_escape_string($conn,md5($_POST['LPassword']));


    $select_user="SELECT * FROM `students` WHERE `SId`='$LSId' and `Password`='$LPassword'";

    $loginquery=mysqli_query($conn,$select_user); 
    $checkUser=mysqli_num_rows($loginquery);
    
    if($checkUser==1)
   {
    $_SESSION['SId']=$LSId;
    $_SESSION['Name']=$Name;
    $_SESSION['success'] = "You are now logged in";
    echo"<script>alert('Log in was successful.')</script>";
    echo"<script> window.location.href ='index.html'</script>";
    
   }
   else
   {
    echo"<script>alert('Incorrect details, try again')</script>";
    echo"<script> window.location.href ='login.html'</script>";
   }

}
?>