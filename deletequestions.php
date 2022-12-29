<?php
 session_start();
 $uploadersid=$_SESSION['SId'];
 include("Connection.php");

 if(isset($_GET['delete_id']))
 {
   $delete_id=$_GET['delete_id'];

   $question_delete_query="delete from questionbank where qid=$delete_id and sid=$uploadersid";
   $delete_question=mysqli_query($conn,$question_delete_query);
   if($delete_question)
   {
    echo"<script>alert('book deleted  successfully!!')</script>";
    echo"<script> window.location.href ='uploadques.html'</script>";
   }

 }






?>