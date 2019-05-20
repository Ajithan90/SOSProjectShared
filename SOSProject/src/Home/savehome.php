<?php
include ('../connection.php');
$hname=$_POST['home_name'];
//$hid=$_POST['home_id'];
$mother=$_POST['mother'];
$vid=$_POST['vid'];


$id=$_POST['pid'];
if($id==null){
    $sqlSelection="SELECT Home_ID FROM home ORDER BY Home_ID DESC LIMIT 1";
    $qryselection=$db->prepare($sqlSelection);
    $qryselection->execute();
    $nor=$qryselection->fetchColumn();
    $nor=substr($nor,1);
    
    if($nor>0){
    
        $nor++;
        if($nor<10)
            $hid = "H000".$nor;
            else if($nor<100)
                $hid = "H00".$nor;
                else if($nor<1000)
                    $hid = "H0".$nor;
                    else
                        $hid = "H".$nor;
                       
    }
    else{
        $hid = "H0001";
    }
   

$sql="INSERT INTO home(Home_ID,Name,MotherInCharge,Village_ID)values
			(:hid,:hname,:mother,:vid)";

$qry=$db->prepare($sql);
$qry->execute(array(':hid'=>$hid,':hname'=>$hname,':mother'=>$mother,':vid'=>$vid));
}
else {
    $sql="UPDATE home SET Home_ID=?,Name=?,MotherInCharge=?,Village_ID=? where Home_ID=?";
    $qry=$db->prepare($sql);
    $qry->execute(array($id,$hname,$mother,$vid,$id));
}


echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
echo "<script language='javascript' type='text/javascript'>window.open('home.php','_self')</script>";

?>