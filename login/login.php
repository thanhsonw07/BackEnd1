<?php
session_start();
require "../config.php";
require "../models/db.php";
require "../models/user.php";
$user=new User();
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($user -> checkLogin($username, $password)){
        $_SESSION['user'] = $username;
        header('location:../admin/index.php');
    }else {
        if($user -> checkLoginCustomer($username, $password)){
            $_SESSION['user'] = $username;
            if(isset($_POST['remember'])){
               setcookie('user',$username,time()+3600,'/','',0,0);
               setcookie('pass',$password,time()+3600,'/','',0,0);
              }
            else{
               setcookie('user',$username,time()-3600,'/');
               setcookie('pass',$password,time()-3600,'/');
            }
            header('location:../index.php');
        }
        else{
            echo '<script language="javascript">alert("Sai tài khoản hoặc mật khẩu"); window.location="index.php";</script>';
        }
    }
}
?>