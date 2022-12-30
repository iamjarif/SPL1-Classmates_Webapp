<?php
function link_validity($link) {
   $substr = "drive.google.com";

   if (strpos($link, $substr)== true)
  {
  
  }
  else 
   {
        echo"<script>alert('link  is not valid format.')</script>";
        
     
    }
    
}


?>