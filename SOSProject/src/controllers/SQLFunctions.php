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
   //require_once ("connection.php");
    $con = mysqli_connect("127.0.0.1","root","","soscdp")
    or die("SERVER Error ".mysqli_error());
    
    $fields = array_keys($form_data);
    
    $sql = "INSERT INTO ".$tablename."
    (`".implode('`,`', $fields)."`)
    VALUES('".implode("','", $form_data)."')";
    echo $sql;
    $qryselection=mysqli_query($con, $sql);
    
    mysqli_close($con);
    print_r($form_data) ;
    
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
