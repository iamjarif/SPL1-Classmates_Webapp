<?php
session_start();
$senderid=$_SESSION['SId'];
include("Connection.php");



    $messageinput=mysqli_escape_string($conn,$_POST['messageinput']) ;
   
    $insertmsgsql="INSERT INTO `chat` (`SId`, `msg`) VALUES ( '$senderid','$messageinput')";
    $insertmsgresult=mysqli_query($conn,$insertmsgsql); 
    if($insertmsgresult)
    {
        header("location:chat.html");
    }

    $conn->close();
?>