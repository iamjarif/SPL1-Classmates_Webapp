<?php
session_start();
$uploadersid=$_SESSION['SId'];
include("Connection.php");
if(isset($_POST['teachersInfoupload']))
{
  
  $Sid=$uploadersid;
  $tname=mysqli_real_escape_string($conn,$_POST['tname']);
  $temail=mysqli_real_escape_string($conn,$_POST['temail']);
  $tnumber=mysqli_real_escape_string($conn,$_POST['tnumber']);
  $department=mysqli_real_escape_string($conn,$_POST['department']);
  
  $urlupload="INSERT INTO `teachersinfo` (`tname`,`temail`,`tnumber`, `department`, `SId`) VALUES ('$tname','$temail','$tnumber', '$department', '$uploadersid')";
  $questionuploadquery=mysqli_query($conn,$urlupload);
  if($urlupload)
  {
    echo"<script>alert('teachersinfo uploaded  successfully!!')</script>";
    echo"<script> window.location.href ='addTeachersInfo.html'</script>";
  }
  else
   {
     echo"<script>alert('uploading book was not successful')</script>";
     echo"<script> window.location.href ='addTeachersInfo.html'</script>";
   }
  
     }
  
  


    


?>