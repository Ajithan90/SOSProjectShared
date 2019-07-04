<?php

function GeneratID($IDKey,$tableName,$Prefix){
    require_once ("connection.php");
        
    $sql = "SELECT ".$IDKey. " FROM ". $tableName. " ORDER BY " .$IDKey. " DESC LIMIT 1;";
    
        $result = mysqli_query($con,$sql);
        $nor = mysqli_num_rows($result);
        
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
        else{
            $Tid=$Prefix."0001";
            return $Tid;
            mysqli_close($con);
        }
      
            
    }
 
    function ProccessData($Tid,$tablename,$form_data,$Where){

        require ('SQLFunctions.php');
        $Action=$form_data['Action'];
        unset($form_data['Action']);
       
        if($Tid==null){
            $r=InsertData($tablename, $form_data);
            echo "{\"result\":\"".$r.",\"Tid\":\"$Tid\"}";
        }
        else if($Tid!=null && $Action=="Update") {
            $r=dbRowUpdate($tablename, $form_data, 'Village_ID ='."'".$Tid."'");
            echo "{\"result\":\"".$r.",\"Tid\":\"$Tid\"}";
        }
        elseif($Tid!=null && $Action=="Delete"){
            $r=dbRowDelete($tablename, 'Village_ID ='."'".$Tid."'");
            echo "{\"result\":\"".$r.",\"Tid\":\"$Tid\"}";
        }
        
        
       
    }
    
?>