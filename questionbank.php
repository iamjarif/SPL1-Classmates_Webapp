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
  $quesuploadtime=date("y-m-d h:i:sa");
    $urlupload="INSERT INTO `questionbank` (`ExamName`,`year`,`cname`, `qlink`, `SId`,`quesuploadtime`) VALUES ('$ExamName','$year','$cname', '$questionurl', '$uploadersid','$quesuploadtime')";
    $questionuploadquery=mysqli_query($conn,$urlupload);
    if($urlupload)
    {
      echo"<script>alert('The question is uploaded !')</script>";
      echo"<script> window.location.href ='uploadques.html'</script>";
    }
    else
    {
      echo"<script>alert('The question was not uploaded')</script>";
      echo"<script> window.location.href ='uploadques.html'</script>";
    }
  
  }





?>