<?php
require "config.php";
require "models/db.php";
require "models/manufacture.php";
$manufacture = new Manufacture;
//xu ly them:

if(isset($_POST['submit'])){
    $id = $_POST['manu_id'];
    $name = $_POST['manu_name'];   
    $manufacture -> editManufacture($id,$name); 
}
header('location: manufactures.php');
?>
