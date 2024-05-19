<?php
class User extends Db
{
    public function checkLogin($username, $password)
    {
        $sql = self::$connection->prepare("SELECT * FROM `user` WHERE `username` = ? AND `password` = ? AND `role_id` = 0");
        $password = md5($password);
        $sql->bind_param("ss",$username, $password);
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
    public function checkLoginCustomer($username, $password)
    {
        $sql = self::$connection->prepare("SELECT * FROM `user` WHERE `username` = ? AND `password` = ? AND `role_id` = 1");
        $password = md5($password);
        $sql->bind_param("ss",$username, $password);
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
    public function addUser($username, $password,$fullname,$address,$email,$phone)
    {
        $sql = self::$connection->prepare("INSERT INTO `user`(`username`, `password`, `role_id`, `fullname`, `address`, `email`, `phone`) VALUES (?,?,1,?,?,?,?)");
        $password = md5($password);
        $sql->bind_param("ssssss",$username, $password,$fullname,$address,$email,$phone);
        $sql->execute();
        return $sql;
    }
    public function checkUser($username)
    {
        $sql = self::$connection->prepare("SELECT * FROM `user` WHERE `username`= ?");
        $sql->bind_param("s",$username);
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
    public function countUser()
    {
        $sql = self::$connection->prepare("SELECT * FROM `user` WHERE `role_id` = 1");
        $sql->execute();
        //$items = array();
        $items = $sql->get_result()->num_rows;
        return $items;
    }      

    public function getAllUsers()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM user 
        WHERE `role_id` = 1 
        ORDER BY 'user_id' DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function get10User( $page, $perPage)
    {
        $fristLink = ($page -1) * $perPage;
        $sql = self::$connection->prepare("SELECT * 
        FROM user 
        WHERE `role_id` = 1
        ORDER BY 'user_id' 
        DESC LIMIT ?, ?");
        $sql->bind_param("ii",$fristLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function paginate($url, $total, $perPage,$page)
    {
        $totalLinks = ceil($total/$perPage);
 	    $link ="";
    	for($j=1; $j <= $totalLinks ; $j++)
     	{
            if($j == $page){
      		    $link = $link."<li  class='active' > <a  href='$url?page=$j'> $j </a></li>";
            }else{
                $link = $link."<li> <a  href='$url?page=$j'> $j </a></li>";
            }
     	}
     	return $link;
    }
    public function deleteUser($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `user` WHERE `user_id`=?");
        $sql->bind_param("i",$id);
        return  $sql->execute();
    } 
    public function getUserBy($username)
    {
        $sql = self::$connection->prepare("SELECT * FROM `user` WHERE `role_id` = 1 AND `username`= ?");
        $sql->bind_param("s",$username);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}
?>