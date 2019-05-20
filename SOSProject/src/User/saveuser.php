<?php
include ('../connection.php');
$fname=$_POST['f_name'];
$lname=$_POST['l_name'];
$email=$_POST['email'];
$uname=$_POST['u_name'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$status=$_POST['status'];


$id=$_POST['pid'];
if($id==null){
    $sqlSelection="SELECT uid FROM users ORDER BY uid DESC LIMIT 1";
    $qryselection=$db->prepare($sqlSelection);
    $qryselection->execute();
    $nor=$qryselection->fetchColumn();
    $nor=substr($nor,1);
    
    if($nor>0){
    
        $nor++;
        if($nor<10)
            $uid = "U000".$nor;
            else if($nor<100)
                $uid = "U00".$nor;
                else if($nor<1000)
                    $uid = "U0".$nor;
                    else
                        $uid = "U".$nor;
                       
    }
    else{
        $uid = "U0001";
    }

   $pass=MD5($pass);

$sql="INSERT INTO users(uid,First_Name,Last_Name,Email_ID,username,password,Status)values
			(:uid,:fname,:lname,:email,:user,:pass,:status)";

$qry=$db->prepare($sql);
$qry->execute(array(':uid'=>$uid,':fname'=>$fname,':lname'=>$lname,':email'=>$email,':user'=>$uname,':pass'=>$pass,':status'=>$status));
    
}
else {
    if($pass!=""){
        $pass=MD5($pass);
    $sql="UPDATE users SET uid=?,First_Name=?,Last_Name=?,Email_ID=?,username=?,password=?,Status=? where uid=?";
    $qry=$db->prepare($sql);
    $qry->execute(array($id,$fname,$lname,$email,$uname,$pass,$status,$id));
    }
    else{
        
        $sql="UPDATE users SET uid=?,First_Name=?,Last_Name=?,Email_ID=?,username=?,Status=? where uid=?";
        $qry=$db->prepare($sql);
        $qry->execute(array($id,$fname,$lname,$email,$uname,$status,$id));
    }
}


echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
echo "<script language='javascript' type='text/javascript'>window.open('user.php','_self')</script>";

?>