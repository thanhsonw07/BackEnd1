<?php
    session_start();
    $id = isset($_GET['id']) ? (int)$_GET['id'] : '';
    if(isset($_POST['addqty'])){
        $sl = $_POST['addqty'] ;
    }
    else{
        $sl = 1;
    }
?>
<?php
require "config.php";
require "models/db.php";
require "models/product.php";
//
$product = new Product;
	
	if(isset($_GET['id'])):
        $laySPTheoID = $product -> getProductById($id);
		foreach($laySPTheoID as $value):
			if($value['id'] == $_GET['id']):
?>
<?php
    //b2: kiem tra session:
    if(isset($_SESSION['cart']))
    {
        
        if(isset($_SESSION['cart'][$id]) && isset($_POST['addqty'])){
            $_SESSION['cart'][$id]['qty'] += $sl;
        }
        else if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]['qty'] += 1;
        }
        else{
            $_SESSION['cart'][$id]['qty'] = $sl;
        }
        $_SESSION['cart'][$id]['id'] = $value['id'];
        $_SESSION['cart'][$id]['name'] = $value['name'];
        $_SESSION['cart'][$id]['price'] = $value['price'];
        $_SESSION['cart'][$id]['image'] = $value['image'];
        $_SESSION['cart'][$id]['description'] = $value['description'];
        $_SESSION['cart'][$id]['cost'] = $value['price'] * $_SESSION['cart'][$id]['qty'];
    }
    else
    {
        $_SESSION['cart'][$id]['id'] = $value['id'];
        $_SESSION['cart'][$id]['qty'] = $sl;
        $_SESSION['cart'][$id]['name'] = $value['name'];
        $_SESSION['cart'][$id]['price'] = $value['price'];
        $_SESSION['cart'][$id]['image'] = $value['image'];
        $_SESSION['cart'][$id]['description'] = $value['description'];
        $_SESSION['cart'][$id]['cost'] = $value['price'] * $_SESSION['cart'][$id]['qty'];
    }
    ?>
<?php
	endif;
		endforeach;
	endif;
    header("location: listcart.php");
?>

    

