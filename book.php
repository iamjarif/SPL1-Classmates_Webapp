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
  $uploadtime=date("y-m-d h:i:sa");
  $urlupload="INSERT INTO `books` (`cname`,`bname`,`sem`, `bookurl`, `SId`,`uploadtime`) VALUES ('$cname','$bname','$sem', '$bookurl', '$uploadersid','$uploadtime')";
  $questionuploadquery=mysqli_query($conn,$urlupload);
  if($urlupload)
  {
    echo"<script>alert('Book uploaded  successfully!')</script>";
    echo"<script> window.location.href ='uploadBooks.html'</script>";
  }
  else
   {
     echo"<script>alert('The book was not uploaded')</script>";
     echo"<script> window.location.href ='uploadBooks.html'</script>";
   }
  
     }
  
  


    


?>