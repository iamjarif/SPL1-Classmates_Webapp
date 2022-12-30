<?php
if(isset($_POST['routine_upload']))
{
    echo"<script>alert('Only Admin can upload routine!!')</script>";
    echo"<script> window.location.href ='classRoutine.html'</script>";
}




?>