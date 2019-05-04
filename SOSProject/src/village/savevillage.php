<?php
include ('../connection.php');
$vname=$_POST['village_name'];
$adl1=$_POST['address_line1'];
$adl2=$_POST['address_line2'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$dname=$_POST['director_name'];
$pnum=$_POST['phone_number'];
$email=$_POST['email'];

$id=$_POST['pid'];
if($id==null){
    $sqlSelection="SELECT Village_ID FROM villages ORDER BY Village_ID DESC LIMIT 1";
    $qryselection=$db->prepare($sqlSelection);
    $qryselection->execute();
    $nor=$qryselection->fetchColumn();
    $nor=substr($nor,1);
    
    if($nor>0){
    
        $nor++;
        if($nor<10)
            $vid = "V000".$nor;
            else if($nor<100)
                $vid = "V00".$nor;
                else if($nor<1000)
                    $vid = "V0".$nor;
                    else
                        $vid = "V".$nor;
                       
    }
    else{
        $vid = "V0001";
    }
   

$sql="INSERT INTO villages(Village_ID,Village,Address_Line1,Address_Line2,City,ZIP,Director_Name,Telephone_NO,Email_ID)values
			(:villid,:viilna,:addl1,:addl2,:city,:zip,:dname,:pnum,:email)";

$qry=$db->prepare($sql);
$qry->execute(array(':villid'=>$vid,':viilna'=>$vname,':addl1'=>$adl1,':addl2'=>$adl2,':city'=>$city,':zip'=>$zip,':dname'=>$dname,':pnum'=>$pnum,':email'=>$email));
}
else {
    $sql="UPDATE villages SET Village_ID=?,Village=?,Address_Line1=?,Address_Line2=?,City=?,ZIP=?,Director_Name=?,Telephone_NO=?,Email_ID=? where Village_ID=?";
    $qry=$db->prepare($sql);
    $qry->execute(array($id,$vname,$adl1,$adl2,$city,$zip,$dname,$pnum,$email,$id));
}


echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
echo "<script language='javascript' type='text/javascript'>window.open('Village.php','_self')</script>";

?>