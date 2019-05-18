<?php

session_start();

require 'connection.php';

if(isset($_POST['login'])){
    
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
    
    $passwordAttempt= md5($passwordAttempt);
    
    $sql = "SELECT id, username, password,Status FROM users WHERE username = :username";
    $stmt = $db->prepare($sql);
    
    $stmt->bindValue(':username', $username);
    
    $stmt->execute();
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
   
    $status=$user['Status'];
    
    if($user == false || $status !=1){
        echo "<script language='javascript' type='text/javascript'>alert('Invalid UserName!')</script>";
        echo "<script language='javascript' type='text/javascript'>window.open('login.php','_self')</script>";
    } else{
       
        
        $validPassword=$passwordAttempt==$user['password'];
       
        if($validPassword){
            
            $_SESSION['user_id'] = $user['username'];
            $_SESSION['logd_in'] = time();
           
            
            header('Location: DashBoard.php');
            exit;
            
        } else{
            echo "<script language='javascript' type='text/javascript'>alert('Invalid Password!')</script>";
            echo "<script language='javascript' type='text/javascript'>window.open('login.php','_self')</script>";
        }
    }
    
}

?>