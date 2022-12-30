<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="div1">
        <?php
        session_start();
        $uploadersid=$_SESSION['SId'];
        include("Connection.php");
       
        if(isset($_GET['display_id']))
        {
          $display_id=$_GET['display_id'];
          

          $notice_display_query="select filename from notice where nid=$display_id";
          $display_notice=mysqli_query($conn,$notice_display_query);
          $result=mysqli_fetch_assoc($display_notice);
          if($display_notice)
          {
            
             echo'<embed ';
             echo' type="application/pdf"';
             echo'src="uploadnotice/';
             echo $result['filename'];
             echo'"';

          }
       
        
        
        }
        
        
        ?>


    </div>
</body>
</html>