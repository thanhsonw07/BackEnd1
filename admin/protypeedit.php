<?php
require "config.php";
require "models/db.php";
require "models/protype.php";
$protype = new Protype;
//xu ly them:

if(isset($_POST['submit'])){
    $id = $_POST['type_id'];
    $name = $_POST['type_name'];   
    $protype -> editProtype($id,$name); 
}
header('location: protype.php');
?>