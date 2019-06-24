<?php
function GetData($tablename){
    
    require_once ("connection.php");
    
    $sql="Select * from"." ".$tablename;
    $qryselection=mysqli_query($con, $sql);
    
    
    $json_array=array();
    
    while($row =mysqli_fetch_assoc($qryselection)){
        $json_array[]=$row;
    }
    
     $result=json_encode($json_array);
     
     return $result;
     $qryselection->close();
}
?>