<?php
require "config.php";
require "models/db.php";
require "models/protype.php";
//
$protype = new Protype;
if(isset($_POST['submit'])){
    $type_name = $_POST['type_name'];
    $protype -> addProtype($type_name);
}
header('location:protype.php');