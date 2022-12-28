<?php
session_start();
$uploadersid=$_SESSION['SId'];
include("Connection.php");
if(isset($_POST['questionbank']))
{
  
  $Sid=$uploadersid;
  $ExamName=mysqli_real_escape_string($conn,$_POST['ExamName']);
  $cname=mysqli_real_escape_string($conn,$_POST['cname']);
  $year=mysqli_real_escape_string($conn,$_POST['year']);
  $questionurl=mysqli_real_escape_string($conn,$_POST['qlink']);
  
    $urlupload="INSERT INTO `questionbank` (`ExamName`,`year`,`cname`, `qlink`, `SId`) VALUES ('$ExamName','$year','$cname', '$questionurl', '$uploadersid')";
    $questionuploadquery=mysqli_query($conn,$urlupload);
    if($urlupload)
    {
      echo"<script>alert('question uploaded  successfully!!')</script>";
      echo"<script> window.location.href ='uploadques.html'</script>";
    }
    else
    {
      echo"<script>alert('uploading quetions was not successful')</script>";
      echo"<script> window.location.href ='uploadques.html'</script>";
    }
  
  }





?>