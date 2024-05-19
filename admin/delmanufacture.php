<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";

$manufacture = new Manufacture;

if(isset($_GET['manu_id'])){
    if($manufacture ->checkManu($_GET['manu_id'])){
        echo '<script language="javascript">alert("Vẫn còn sản phẩm, không thể xóa !"); window.location="manufactures.php";</script>';
    }
    else{
        $manufacture -> deleteManufacture($_GET['manu_id']);
        header('location:manufactures.php');
    }
}
 
?>