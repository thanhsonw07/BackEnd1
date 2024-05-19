<?php
    session_start();
?>
<?php
require "config.php";
require "models/db.php";
require "models/wishlist.php";
//
$wishlist = new Wishlist;
?>
<?php
    if(isset($_SESSION['user'])){
        $user_name = $_SESSION['user'];
        $sp_id = $_GET['id'];
        if ($wishlist -> checkWish($user_name, $sp_id)){
            echo '<script language="javascript">alert("Sản phẩm này đã nằm trong mục yêu thích!"); window.location="index.php";</script>';
        }
        else{
            $addWish = $wishlist -> addWish($user_name,$sp_id);
            header("Location: wishlist.php");
        }   
    }
    else{
        header("Location: wishlist.php");
    }
?>

    

