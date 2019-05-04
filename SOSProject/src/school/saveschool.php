<?php
include ('../connection.php');
$sname=$_POST['school_name'];
$adl1=$_POST['address_line1'];
$adl2=$_POST['address_line2'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$dname=$_POST['district'];
$pnum=$_POST['phone_number'];


$id=$_POST['pid'];
if($id==null){
    $sqlSelection="SELECT School_ID FROM school ORDER BY School_ID DESC LIMIT 1";
    $qryselection=$db->prepare($sqlSelection);
    $qryselection->execute();
    $nor=$qryselection->fetchColumn();
    $nor=substr($nor,1);

if($nor>0){
        
        $nor++;
    if($nor<10)
        $sid = "S000".$nor;
        else if($nor<100)
            $sid = "S00".$nor;
            else if($nor<1000)
                $sid = "S0".$nor;
                else
                    $sid = "S".$nor;
                    
                    
}
else{
    $sid = "S0001";
}
    
$sql="INSERT INTO school(School_ID,School_name,Address_Line1,Address_Line2,City,ZIP,District,Telephone_NO)values
			(:sclid,:sclna,:addl1,:addl2,:city,:zip,:dname,:pnum)";
$qry=$db->prepare($sql);
$qry->execute(array(':sclid'=>$sid,':sclna'=>$sname,':addl1'=>$adl1,':addl2'=>$adl2,':city'=>$city,':zip'=>$zip,':dname'=>$dname,':pnum'=>$pnum));
}
else {
   $sql="UPDATE school SET School_ID=?,School_name=?,Address_Line1=?,Address_Line2=?,City=?,ZIP=?,District=?,Telephone_NO=? where School_ID=?";
    $qry=$db->prepare($sql);
    $qry->execute(array($id,$sname,$adl1,$adl2,$city,$zip,$dname,$pnum,$id));
}


echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
echo "<script language='javascript' type='text/javascript'>window.open('school.php','_self')</script>";

?>