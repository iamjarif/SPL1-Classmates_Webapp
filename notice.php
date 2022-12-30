<?php
session_start();
$uploadersid=$_SESSION['SId'];
include("Connection.php");
if(isset($_POST['noticeupload']))
{
  
  $Sid=$uploadersid;
  $ntitle=mysqli_real_escape_string($conn,$_POST['ntitle']);
  $ndescription=mysqli_real_escape_string($conn,$_POST['ndescription']);
  $date=date('y-m-d h:i:sa');
  $noticefile=$_FILES['noticefile'];
//    print_r($noticefile);
   $noticefilename=$_FILES['noticefile']['name'];
   $noticefileTmpname=$_FILES['noticefile']['tmp_name'];
   $noticefileSize=$_FILES['noticefile']['size'];
  $noticefileError=$_FILES['noticefile']['error'];
   $noticefileType=$_FILES['noticefile']['type'];
  $noticepath="uploadnotice/".$noticefilename;
   $noticefileExt=explode('.',$noticefilename);
   $noticefileActualExt=strtolower(end($noticefileExt));
   $allowed=array('pdf' , 'jpg' ,'jpeg' ,'txt' );
   if(in_array($noticefileActualExt,$allowed))
    {
 
     if($noticefileError==0)
     {
           
         move_uploaded_file($noticefileTmpname,$noticepath);
         $noticeupload="INSERT INTO `notice` (`ntitle`,`ndescription`, `time`, `SId`,`filename`) VALUES ('$ntitle','$ndescription', '$date', '$uploadersid','$noticefilename')";
         $questionuploadquery=mysqli_query($conn,$noticeupload);
         if($noticeupload)
         {
           echo"<script>alert('The notice is uploaded !!')</script>";
           echo"<script> window.location.href ='postNotice.html'</script>";
         }
         else
          {
            echo"<script>alert('The notice was not uploaded')</script>";
            echo"<script> window.location.href ='postNotice.html'</script>";
          }
      
     }
      else
      {
        echo"<script>alert('there was an error')</script>";
       echo"<script> window.location.href ='postNotice.html'</script>";
      }
 
 
    }
    else
    {
      echo"<script>alert('uploading notice was not successful')</script>";
      echo"<script> window.location.href ='postNotice.html'</script>";
    }


 
  
     }
  
  


    


?>