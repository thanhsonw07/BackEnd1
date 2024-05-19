<?php
class Wishlist extends Db
{
    public function addWish($user_name,$sp_id)
    {
        $sql = self::$connection->prepare("INSERT INTO `wishlist`(`user_name`, `sp_id`) VALUES (?,?)");
        $sql->bind_param("si", $user_name,$sp_id);
        return $sql->execute(); //return an object
    }
    public function checkWish($user_name, $sp_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `wishlist` WHERE `user_name` = ? AND `sp_id` = ?");
        $sql->bind_param("si",$user_name, $sp_id);
        $sql->execute();
        //$items = array();
        $items = $sql->get_result()->num_rows;
        if ($items == 1){
           return true;
       }
       else {
           return false;
       }
    }
    public function getWishList($user_name)
    {
        $sql = self::$connection->prepare("SELECT * FROM wishlist
        INNER JOIN products ON wishlist.sp_id = products.id
        INNER JOIN user ON wishlist.user_name = user.username
        WHERE wishlist.user_name = ? ");
        $sql->bind_param("s", $user_name);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function delWish($wish_id)
    {
        $sql = self::$connection->prepare("DELETE FROM `wishlist` WHERE `wish_id` = ?");
        $sql->bind_param("i", $wish_id);
        return $sql->execute(); //return an object
    }
    
    public function getTopWish()
    {
        $sql = self::$connection->prepare("SELECT *,COUNT(*) FROM `wishlist` GROUP BY `sp_id` ORDER BY COUNT(*) DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
?>