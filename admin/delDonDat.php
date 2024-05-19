<?php
require "../config.php";
require "../models/db.php";
require "../models/hoadon.php";
$hoadon=new HoaDon();
if(isset($_GET['username']) == true && isset($_GET['thoigian']) ){
    $username = $_GET['username'];
    $thoigian = $_GET['thoigian'];
    $hoadon -> xoaHoaDon($username,$thoigian);
    $hoadon -> xoaCTHoaDon($username,$thoigian);
    header('location: danhSachHoaDon.php');      
}
?>