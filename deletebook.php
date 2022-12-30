<?php
 session_start();
 $uploadersid=$_SESSION['SId'];
 include("Connection.php");

 if(isset($_GET['delete_id']))
 {
   $delete_id=$_GET['delete_id'];

   $book_delete_query="delete from books where bid=$delete_id and sid=$uploadersid";
   $delete_book=mysqli_query($conn,$book_delete_query);
   if($delete_book)
   {
    echo"<script>alert('The book is deleted')</script>";
    echo"<script> window.location.href ='uploadBooks.html'</script>";
   }

 }






?>