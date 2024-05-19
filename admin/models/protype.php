<?php
    class Protype extends Db{
        public function getAllProtype()
        {
            $sql = self::$connection->prepare("SELECT * FROM protypes");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }

        public function getProtypeByID($type_id)
        {
            $sql = self::$connection->prepare("SELECT * 
            FROM protypes
            WHERE `type_id` = $type_id");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        } 

        public function addProtype($type_name)
        {
            $sql = self::$connection->prepare("INSERT INTO `protypes`(`type_name`)
            VALUES (?)");
            $sql->bind_param("s", $type_name);
            return $sql->execute(); //return an object
        }
        
        public function deleteProtype($type_id)
        {
            $sql = self::$connection->prepare("DELETE FROM `protypes` WHERE `type_id` =$type_id AND 0>= (SELECT COUNT(type_id) FROM `products` WHERE `type_id`=$type_id)");
            $sql->execute();
            return $sql; 
        }  
        public function editProtype($type_id,$type_name)
        {
            $sql = self::$connection->prepare("UPDATE `protypes` SET `type_name`= ? WHERE `type_id`= ? ");
            $sql->bind_param("si",$type_name,$type_id);
            return $sql->execute();
        }

        public function checkProtype($type_id)
        {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `type_id`= ?");
        $sql->bind_param("i",$type_id);
        $sql->execute();
        //$items = array();
        $items = $sql->get_result()->num_rows;
        if ($items >= 1){
           return true;
        }
        else {
           return false;
            }
        }    
    }
?>