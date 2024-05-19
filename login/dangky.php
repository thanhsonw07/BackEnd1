<?php
require "../config.php";
require "../models/db.php";
require "../models/user.php";
$newuser=new User();
// Dùng isset để kiểm tra Form
if(isset($_POST['submit'])){
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$fullname = trim($_POST['fullname']);
$address = trim($_POST['address']);
$email = trim($_POST['mail']);
$phone = trim($_POST['phone']);
        if ($newuser -> checkUser($username)){
               echo '<script language="javascript">alert("Tên tài khoản dẵ được sử dụng!!!"); window.location="resignter.php";</script>';
        }
        else{
               $themuser = $newuser ->  addUser($username,$password,$fullname,$address,$email,$phone);
        }
if($themuser){
        echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="index.php";</script>';
        }
}
?> 