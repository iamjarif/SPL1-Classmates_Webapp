<?php
 session_start();
 $uploadersid=$_SESSION['SId'];
 include("Connection.php");

 if(isset($_GET['delete_id']))
 {
   $delete_id=$_GET['delete_id'];

   $book_delete_query="delete from lecture_notes where lid=$delete_id and sid=$uploadersid";
   $delete_book=mysqli_query($conn,$book_delete_query);
   if($delete_book)
   {
    echo"<script>alert('The lecture note is deleted')</script>";
    echo"<script> window.location.href ='uploadNotes.html'</script>";
   }

 }






?>