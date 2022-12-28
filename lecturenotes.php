
<?php
session_start();
$uploadersid=$_SESSION['SId'];
include("Connection.php");
if(isset($_POST['notesupload']))
{
  
  $Sid=$uploadersid;
  $cname=mysqli_real_escape_string($conn,$_POST['cname']);
  $tname=mysqli_real_escape_string($conn,$_POST['tname']);
  $sem=mysqli_real_escape_string($conn,$_POST['sem']);
  $notesurl=mysqli_real_escape_string($conn,$_POST['leclink']);
  
    $urlupload="INSERT INTO `lecture_notes` (`cname`,`tname`,`sem`, `leclink`, `SId`) VALUES ('$cname','$tname','$sem', '$notesurl', '$uploadersid')";
    $notesquery=mysqli_query($conn,$urlupload);
    if($urlupload)
    {
      echo"<script>alert('notes uploaded  successfully!!')</script>";
      echo"<script> window.location.href ='uploadNotes.html'</script>";
    }

    else
    {
      echo"<script>alert('uploading lectturenotes was not successful')</script>";
      echo"<script> window.location.href ='uploadNotes.html'</script>";
    }
  
  }





?>