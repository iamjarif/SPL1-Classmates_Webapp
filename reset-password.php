<?php
require("connection.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function SendMail($reset_email,$reset_token)
{
    require ('<PHPMailer/PHPMailer.php');
    require ('PHPMailer/SMTP.php');
    require ('PHPMailer/Exception.php');

    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'tamimwasif4829@gmail.com';                     //SMTP username
        $mail->Password   = 'pnqzjymbihyluzvd';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('tamimwasif4829@gmail.com', 'Classmates.');


        $mail->addAddress($reset_email);     //Add a recipient
       
        //Attachments
        $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Password reset link from classmates.';
        $mail->Body    = 'Here is the reset password link for your profile the link is given below:<br>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
if(isset($_POST['reset_password']))
{
  $reset_email= $_POST['reset_email'];
  $query="select * from students where email='$reset_email'";
  $result=mysqli_query($conn,$query);
  if($result)
  {
    if(mysqli_num_rows($result)==1)
    {
        
        $reset_token=bin2hex(random_bytes(16));
        date_default_timezone_set('Asia/Dhaka');
        $date=date("Y-m-d");
        $update_query="update `students` set `password_reset_token`='$reset_token',`token_expire`='$date' where `email`='$reset_email'";
        if(mysqli_query($conn,$update_query)&& SendMail($reset_email,$reset_token))
        {
            echo"<script>alert('Password reset token is sent to mail')</script>";
            echo"<script> window.location.href ='reset-password.html'</script>";
        }
        else
        {
            echo"<script>alert('database could not be updated.')</script>";
            echo"<script> window.location.href ='reset-password.html'</script>";
        }
        echo$reset_email;
        echo$date;

    }
    else
    {
         echo"<script>alert('There is no such email')</script>";
         echo"<script> window.location.href ='reset-password.html'</script>";
        
    }
  }
  else
  {
        echo"<script>alert('query could not be run')</script>";
         echo"<script> window.location.href ='reset-password.html'</script>";
        
  }






}
else
{
    echo"<script>alert('didn't enter the first block')</script>";
         echo"<script> window.location.href ='reset-password.html'</script>";
}












?>