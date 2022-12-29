<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    include('connection.php');
    if(isset($_GET($reset_email))&&isset($_GET($reset_token)))
    {
        $reset_email=$_GET($reset_email);
        $reset_token=$_GET($reset_token);
        date_default_timezone_set('Asia/Dhaka');
        $date=date("Y-m-d");
        $query="select * from students where email='$reset_email' and password_reset_token='$reset_token' and token_expire='$date'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
           if(mysqli_num_rows($result)==1)
           {
             echo "<h3>Set New Password</h3>";
           }
           else
           {
              echo"expired link";
           }
        }
        else
        {
            echo"there was an error"; 
        }
    }
    
    
    
    
    ?>
</body>
</html>