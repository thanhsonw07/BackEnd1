<?php
class HoaDon extends Db
{
    public function addHoaDon($thoigian,$user_name,$fullname,$email,$dienthoai,$diachi,$ghichu,$tongcong)
    {
        $sql = self::$connection->prepare("INSERT INTO `hoadon`(`ThoiDiemDatHang`, `user_name`, `fullname`, `email`, `dienthoai`, `diachi`, `ghichucuakhach`, `tongcong`) VALUES (?,?,?,?,?,?,?,?)");
        $sql->bind_param("sssssssi",$thoigian,$user_name,$fullname,$email,$dienthoai,$diachi,$ghichu,$tongcong);
        return $sql->execute(); //return an object
    }
    public function addCTHoaDon($user_name,$tensp,$soluong,$giasp,$hinhsp,$thoigian,$tongcong)
    {
        $sql = self::$connection->prepare(" INSERT INTO `chitiethd`(`user_name`, `tensp`, `soluongsp`, `giasp`, `hinhsp`,`ThoiDiemDatHang`,`tongtien`) VALUES (?,?,?,?,?,?,?)");
        $sql->bind_param("ssiissi", $user_name,$tensp,$soluong,$giasp,$hinhsp,$thoigian,$tongcong);
        return $sql->execute(); //return an object
    }
    public function layHoaDonTheoTen($user_name)
    {
        $sql = self::$connection->prepare("SELECT * FROM `hoadon` WHERE `user_name` = ?");
        $sql->bind_param("s",$user_name);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function layCTHoaDon($user_name,$idHD)
    {
        $sql = self::$connection->prepare("SELECT * FROM chitiethd INNER JOIN hoadon ON hoadon.ThoiDiemDatHang = chitiethd.ThoiDiemDatHang WHERE hoadon.user_name = ? AND hoadon.idHD = ?");
        $sql->bind_param("si", $user_name,$idHD);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function countHoaDon()
    {
        $sql = self::$connection->prepare("SELECT * FROM `hoadon`");
        $sql->execute();
        //$items = array();
        $items = $sql->get_result()->num_rows;
        return $items;
    }      
    public function getAllHoaDon ()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM hoadon 
        ORDER BY 'idHD' DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function get10HoaDon($page, $perPage)
    {
        $fristLink = ($page -1) * $perPage;
        $sql = self::$connection->prepare("SELECT * 
        FROM hoadon 
        ORDER BY 'idHD'
        DESC LIMIT ?, ?");
        $sql->bind_param("ii",$fristLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    
    public function xoaHoaDon($user_name,$thoigian)
    {
        $sql = self::$connection->prepare("DELETE FROM `hoadon` WHERE `ThoiDiemDatHang` = ? AND `user_name` = ?");
        $sql->bind_param("ss", $thoigian,$user_name);
        return $sql->execute(); //return an object
    }
    public function xoaCTHoaDon($user_name,$thoigian)
    {
        $sql = self::$connection->prepare("DELETE FROM `chitiethd` WHERE `ThoiDiemDatHang` = ? AND `user_name` = ?");
        $sql->bind_param("ss", $thoigian,$user_name);
        return $sql->execute(); //return an object
    }
}