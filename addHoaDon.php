<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/hoadon.php";
require "models/user.php";
$hoadon = new HoaDon;
session_start();
$tongcong = 0;
if(isset($_SESSION['user']) == true && isset($_POST['terms'])==true){
        $thoigian = date("d/m/Y H:i");
        $user_name = $_SESSION['user'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $diachi = $_POST['address'];
        $dienthoai = $_POST['phone'];
        $ghichu = $_POST['note'];
        
        foreach($_SESSION['cart'] as $key => $val ){
            $soluong = $val['qty'];
            $tensp = $val['name'];
            $giasp = $val['price'];
            $hinhsp = $val['image'];
            $total = $val['price']*$val['qty'];
            $hoadon -> addCTHoaDon($user_name,$tensp,$soluong,$giasp,$hinhsp,$thoigian,$total);
            $tongcong += $soluong * $giasp;
        }
        $hoadon -> addHoaDon($thoigian,$user_name,$fullname,$email,$dienthoai,$diachi,$ghichu,$tongcong);
        unset ($_SESSION['cart']);
        echo '<script language="javascript">alert("Thanh Toán Thành Công!!!"); window.location="checkout.php";</script>';
}
else{
    echo '<script language="javascript">alert("Vui lòng chấp nhận các điều khoản và điều kiện!"); window.location="checkout.php";</script>';
}
?>