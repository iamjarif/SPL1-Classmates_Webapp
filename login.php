<?php
session_start();
include("Connection.php");
if(isset($_POST['login']))
{
    $LSId=mysqli_real_escape_string($conn,$_POST['LSId']);
    $LPassword=mysqli_real_escape_string($conn,$_POST['LPassword']);


    $select_user="SELECT * FROM `students` WHERE `SId`='$LSId'";

    $loginquery=mysqli_query($conn,$select_user); 
    $checkUser=mysqli_num_rows($loginquery);
    $result_user=mysqli_fetch_assoc($loginquery);
    $Password=$result_user['Password'];
    
    if($checkUser==1)
   {
    
    if(password_verify($LPassword,$Password))
    {
    $_SESSION['SId']=$LSId;
    $_SESSION['Name']=$Name;
    $_SESSION['success'] = "You are now logged in";
    echo"<script>alert('Log in was successful.')</script>";
    echo"<script> window.location.href ='index.php'</script>";
    }
    else
    {
        echo"<script>alert('Incorrect Password, try again')</script>";
       echo"<script> window.location.href ='login.html'</script>";
    }
    
   }
   else
   {
    echo"<script>alert('Incorrect details, try again')</script>";
    echo"<script> window.location.href ='login.html'</script>";
   }

}
?>