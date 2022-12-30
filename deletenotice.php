<?php
 session_start();
 $uploadersid=$_SESSION['SId'];
 include("Connection.php");

 if(isset($_GET['delete_id']))
 {
   $delete_id=$_GET['delete_id'];

   $notice_delete_query="delete from notice where nid=$delete_id and sid=$uploadersid";
   $delete_notice=mysqli_query($conn,$notice_delete_query);
   if($delete_notice)
   {
    echo"<script>alert('The notice is deleted')</script>";
    echo"<script> window.location.href ='postNotice.html'</script>";
   }

 }






?>