<?php
include("Connection.php");
include("passwordverification.php");
if(isset($_POST['SignUp']))
{
   
    $Name=mysqli_escape_string($conn,$_POST['Name']) ;
    $SId=mysqli_escape_string($conn,$_POST['SId']);
    $Email=mysqli_escape_string($conn,$_POST['Email']);
    $Password=mysqli_escape_string($conn,$_POST['Password']);
    $ConfirmPassword=mysqli_escape_string($conn,$_POST['ConfirmPassword']);
    $hashed_password=md5($Password);
    
    
    if($_POST["Password"] === $_POST["ConfirmPassword"])
    {
     //check validity of password
    CheckPasswordLength($Password);
    CheckUppercase($Password);
    CheckLowercase($Password);

    //insert the data in students
    $InsertStudent="INSERT INTO `students` (`Name`, `SId`, `Email`, `Password`) VALUES('$Name','$SId','$Email','$hashed_password')";
    $InsertStudentQuery=mysqli_query($conn,$InsertStudent);
    if($InsertStudentQuery)
    {
       echo"successful";
    }
    else
    {
        echo"<script>alert('An email with such name already exists')</script>";
    }


  }
}
?>