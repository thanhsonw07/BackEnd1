<?php
require "config.php";
require "models/db.php";
require "models/protype.php";
$protype = new Protype;
if(isset($_GET['id'])){
    if($protype ->checkProtype($_GET['id'])){
        echo '<script language="javascript">alert("Vẫn còn sản phẩm, không thể xóa !"); window.location="protype.php";</script>';
    }
    else{
        $protype -> deleteProtype($_GET['id']); 
        header('location:protype.php');
    }
}

?>