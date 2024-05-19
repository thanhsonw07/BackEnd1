<?php
require "config.php";
require "models/db.php";
require "../models/user.php";
$user = new User;
    if(isset($_GET['id'])){
        $user -> deleteUser($_GET['id']); 
        header('location: userRegistrations.php');      
    }
?>