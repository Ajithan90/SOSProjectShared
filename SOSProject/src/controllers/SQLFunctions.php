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

function InsertData($tablename,$form_data){
   include"connection.php";
    
    
    $fields = array_keys($form_data);
    
    $sql = "INSERT INTO ".$tablename."
    (`".implode('`,`', $fields)."`)
    VALUES('".implode("','", $form_data)."')";
    
    $qryselection=mysqli_query($con, $sql);
    
    mysqli_close($con);
   
    
}

function dbRowUpdate($tablename, $form_data, $where_clause='')
{
    require_once ("connection.php");
    $whereSQL = '';
    if(!empty($where_clause))
    {
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
    $sql = "UPDATE ".$tablename." SET ";
    $sets = array();
    foreach($form_data as $column => $value)
    {
        $sets[] = "`".$column."` = '".$value."'";
    }
    $sql .= implode(', ', $sets);
    
    $sql .= $whereSQL;
    echo($sql);
    $qryselection=mysqli_query($con, $sql);
    
    mysqli_close($con);
}


function dbRowDelete($table_name, $where_clause='')
{
    require_once ("connection.php");
    $whereSQL = '';
    if(!empty($where_clause))
    {
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    $sql = "DELETE FROM ".$table_name.$whereSQL;

    $qryselection=mysqli_query($con, $sql);
    
    mysqli_close($con);
}
}
?>
