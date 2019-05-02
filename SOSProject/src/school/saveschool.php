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
    $sql = "SELECT School_ID FROM school ORDER BY School_ID DESC LIMIT 1;";
    $result = mysqli_query($con,$sql);
    $nor = $result->num_rows;
    if($nor>0){
        $rec = mysqli_fetch_assoc($result);
        $scl_id = $rec["School_ID"];
        $num = substr($scl_id,1);
        $num++;
        if($num<10)
            $sid = "S000".$num;
            else if($num<100)
                $sid = "S00".$num;
                else if($num<1000)
                    $sid = "S0".$num;
                    else
                        $sid = "S".$num;
                       
    }
    else{
        $sid = "S0001";
}
$sql="INSERT INTO school(School_ID,School_name,Address_Line1,Address_Line2,City,ZIP,District,Telephone_NO) 
VALUES('$sid','$sname','$adl1','$adl2','$city','$zip','$dname','$pnum')";
mysqli_query($con,$sql);
}
else {
    $sql="UPDATE school SET School_name='$sname',Address_Line1='$adl1',Address_Line2='$adl2',City='$adl2',ZIP='$zip',District='$dname',Telephone_NO='$pnum' where School_ID='$id'";

    mysqli_query($con,$sql);
}
mysqli_close($con);

echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
echo "<script language='javascript' type='text/javascript'>window.open('school.php','_self')</script>";

?>