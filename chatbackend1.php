<?php
session_start();
$senderid=$_SESSION['SId'];
include("Connection.php");

$msgsql="select * from chat";
$msgresult=mysqli_query($conn,$msgsql);
$numofrow=mysqli_num_rows($msgresult);
if($numofrow)
{
    while($row=mysqli_fetch_assoc($msgresult))
    {   
       
        echo"<h3>";
        echo"".$row["SId"]."<br>";
        echo"</h3>";
        echo"<style>
        h3
        {
            color: yellow;
            

        }
        p
        {
            color: white;
        }

        </style>";
       
        echo"<p>";
        echo"".$row["msg"]."<br>";
        echo"</p>";
    }
}
else{
    echo"There is no messages yet";
}
$conn->close();


?>