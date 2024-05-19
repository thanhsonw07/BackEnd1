<?php
require "config.php";
require "models/db.php";
require "models/manufacture.php";

$manufactue = new Manufacture;
//xu ly them:
if(isset($_POST['submit'])){
    $manu = $_POST['manuname'];
    
    $manufactue -> addManufacture($manu); 
   
}
header('location:manufactures.php');
?>