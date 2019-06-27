<?php

function GeneratID($IDKey,$tableName,$Prefix){
    require_once ("connection.php");
        
    $sql = "SELECT" .$IDKey. "FROM". $tableName. "ORDER BY" .$IDKey. "DESC LIMIT 1;";
        $result = mysqli_query($con,$sql);
        $nor = $result->num_rows;
        if($nor>0){
            $rec = mysqli_fetch_assoc($result);
            $id = $rec[$IDKey];
            $num = substr($id,1);
            $num++;
            if($num<10){
                $Tid = $Prefix."000".$num;
            }
            else if($num<100){
                    $Tid = $Prefix."00".$num;
            }
            else if($num<1000){
                    $Tid = $Prefix."0".$num;
            }
            else{
                     $Tid = $Prefix.$num;
            }
            return $Tid;
        }
        else
            $Tid=$Prefix."0001";
            return $Tid;
            mysqli_close($con);
            
            
    }
    
?>