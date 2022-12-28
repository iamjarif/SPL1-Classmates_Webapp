<?php
session_start();
$uploadersid=$_SESSION['SId'];
include("Connection.php");
if(isset($_POST['bookupload']))
{
  
  $Sid=$uploadersid;
  $cname=mysqli_real_escape_string($conn,$_POST['cname']);
  $sem=mysqli_real_escape_string($conn,$_POST['sem']);
  $bname=mysqli_real_escape_string($conn,$_POST['bname']);
  $bookurl=mysqli_real_escape_string($conn,$_POST['bookurl']);
  $urlupload="INSERT INTO `books` (`cname`,`bname`,`sem`, `bookurl`, `SId`) VALUES ('$cname','$bname','$sem', '$bookurl', '$uploadersid')";
  $questionuploadquery=mysqli_query($conn,$urlupload);
  if($urlupload)
  {
    echo"<script>alert('book uploaded  successfully!!')</script>";
    echo"<script> window.location.href ='uploadBooks.html'</script>";
  }
  else
   {
     echo"<script>alert('uploading book was not successful')</script>";
     echo"<script> window.location.href ='uploadBooks.html'</script>";
   }
  
     }
  
  


    


?>