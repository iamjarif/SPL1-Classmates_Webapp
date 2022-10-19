<?php
include("Connection.php");
function CheckPasswordLength($pass)
{
    if(strlen($pass)<8)
    {
      
        echo"<script>alert('The Password must have an Lowercase Letter.')</script>";
        echo"<script> window.location.href ='signup.html'</script>";
        exit();
        
    }
}
function CheckLowercase($string)
 {
    if(preg_match('/[a-z]/', $string))
        {
        
        }
        else{
            echo"<script>alert('The Password must have an uppercase Letter.')</script>";
            echo"<script> window.location.href ='signup.html'</script>";
            exit();
           
        }
}
function CheckUppercase($pass) 
{
    if(preg_match('/[A-Z]/', $pass)){
        
        }
        else{
            echo"<script>alert('The Password must have an uppercase Letter.')</script>";
            echo"<script> window.location.href ='signup.html'</script>";
            exit();
    
        }
}
function EmailValidity($input) 
  {
    if (!filter_var($input, FILTER_VALIDATE_EMAIL)) {
        echo"<script>alert('An email is not valid.')</script>";
        echo"<script> window.location.href ='signup.html'</script>";
        exit();
      }
      else{}
  
   }

   function Idvalidation($input)
   {
    $count=strlen($input);
    if($count!=9)
    {
        echo"<script>alert('Id is not valid length.')</script>";
        echo"<script> window.location.href ='signup.html'</script>";
        exit();
    }
    else
    {
        if($input[0]=='2' &&  $input[1]=='0' && $input[2]=='0' && $input[3]=='0' && $input[4]=='4' &&  $input[5]=='2' )
        {
          
        }
       else
       {

        echo"<script>alert('Id is not valid format.')</script>";
        echo"<script> window.location.href ='signup.html'</script>";
        exit();
       }
         

    }
   }