
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
  $lecuploadtime=date("y-m-d h:i:sa");
  
    $urlupload="INSERT INTO `lecture_notes` (`cname`,`tname`,`sem`, `leclink`, `SId`,`lecuploadtime`) VALUES ('$cname','$tname','$sem', '$notesurl', '$uploadersid','$lecuploadtime')";
    $notesquery=mysqli_query($conn,$urlupload);
    if($urlupload)
    {
      echo"<script>alert('The note is uploaded !')</script>";
      echo"<script> window.location.href ='uploadNotes.html'</script>";
    }

    else
    {
      echo"<script>alert('The note was not uploaded.')</script>";
      echo"<script> window.location.href ='uploadNotes.html'</script>";
    }
  
  }





?>