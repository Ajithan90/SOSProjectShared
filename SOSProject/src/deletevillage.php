<?php
include 'connection.php';
function deletevillage(){
    if(isset($_GET['remove_id']))
    {
        
        mysqli_query($con,"DELETE FROM villages WHERE Village_ID=".$_GET['remove_id']);
        
        
    }
    echo "<script language='javascript' type='text/javascript'>alert('Successfully Deleted!')</script>";
    echo "<script language='javascript' type='text/javascript'>window.open('Village.php','_self')</script>";
}

?>