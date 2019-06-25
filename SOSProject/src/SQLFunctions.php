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
    require_once ("connection.php");
    $sql = "INSERT INTO ".$tablename."
    (`".implode('`,`', $fields)."`)
    VALUES('".implode("','", $form_data)."')";
    
    $qryselection=mysqli_query($con, $sql);
    
    $qryselection->close();
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
    
    return mysql_query($sql);
}


function dbRowDelete($table_name, $where_clause='')
{
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

    return mysql_query($sql);
}
?>
