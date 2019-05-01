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
    $sql = "SELECT Village_ID FROM villages ORDER BY Village_ID DESC LIMIT 1;";
    $result = mysqli_query($con,$sql);
    $nor = $result->num_rows;
    if($nor>0){
        $rec = mysqli_fetch_assoc($result);
        $vill_id = $rec["Village_ID"];
        $num = substr($vill_id,1);
        $num++;
        if($num<10)
            $vid = "V000".$num;
            else if($num<100)
                $vid = "V00".$num;
                else if($num<1000)
                    $vid = "V0".$num;
                    else
                        $vid = "V".$num;
                       
    }
    else{
        $vid = "V0001";
}
$sql="INSERT INTO villages(Village_ID,Village,Address_Line1,Address_Line2,City,ZIP,Director_Name,Telephone_NO,Email_ID) 
VALUES('$vid','$vname','$adl1','$adl2','$city','$zip','$dname','$pnum','$email')";
mysqli_query($con,$sql);
}
else {
    $sql="UPDATE villages SET Village='$vname',Address_Line1='$adl1',Address_Line2='$adl2',City='$adl2',ZIP='$zip',Director_Name='$dname',Telephone_NO='$pnum',Email_ID='$email' where Village_ID='$id'";

    mysqli_query($con,$sql);
}
mysqli_close($con);

echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
echo "<script language='javascript' type='text/javascript'>window.open('Village.php','_self')</script>";

?>