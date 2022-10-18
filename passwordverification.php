<?php
include("Connection.php");
function CheckPasswordLength($pass)
{
    if(strlen($pass)<8)
    {
        echo 
        "<script>
          alert('Password should atleast be 8 digits')
          window.loacation.href='signup.html';
         </script>";
        
    }
}
function CheckLowercase($string)
 {
    if(preg_match('/[a-z]/', $string))
        {
        
        }
        else{
            echo "<script>alert('Password must have an lowercase.')
            window.loacation.href='signup.html';
            </script>";
           
        }
}
function CheckUppercase($pass) 
{
    if(preg_match('/[A-Z]/', $pass)){
        
        }
        else{
            echo "<script>alert('Password must have an uppercase.')
            window.loacation.href='signup.html';
            </script>";
            
    
        }
}