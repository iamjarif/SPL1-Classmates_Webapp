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
     //check if email exists
     $check_email="select Email from students where SId='$SId' LIMIT 1";
     $check_email_run=mysqli_query($conn,$check_email);
     if(mysqli_num_rows($check_email_run)>0)
     {
      echo"<script>alert('Id already exists.')</script>";
      echo"<script> window.location.href ='login.html'</script>";
      exit();
     }

     else{
     //check validity of password
    CheckPasswordLength($Password);
    CheckUppercase($Password);
    CheckLowercase($Password);

    //check email validity
    EmailValidity($Email);
   
    //validate id
    Idvalidation($SId);

    //insert the data in students
    $InsertStudent="INSERT INTO `students` (`Name`, `SId`, `Email`, `Password`) VALUES('$Name','$SId','$Email','$hashed_password')";
    $InsertStudentQuery=mysqli_query($conn,$InsertStudent);
    if($InsertStudentQuery)
    {
      echo"<script>alert('Registration is Successful')</script>";
      echo"<script> window.location.href ='login.html'</script>";
       
    }
    else
    {
        echo"<script>alert('An email with such name already exists')</script>";
        echo"<script> window.location.href ='signup.html'</script>";
    }


  }
}
}
?>