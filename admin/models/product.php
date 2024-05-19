<?php 
class Product extends Db{
    public function getAllProducts ()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM products,manufactures,protypes
        WHERE products.manu_id=manufactures.manu_id
        AND products.type_id=protypes.type_id
        ORDER BY products.id DESC
        ");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductByID ($id)
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM products,manufactures,protypes
        WHERE products.manu_id=manufactures.manu_id
        AND products.type_id=protypes.type_id
        AND id = $id
        ");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function get10Product( $page, $perPage)
    {
        $fristLink = ($page -1) * $perPage;
        $sql = self::$connection->prepare("SELECT * 
        FROM products,manufactures,protypes
        WHERE products.manu_id=manufactures.manu_id
        AND products.type_id=protypes.type_id
        ORDER BY products.id DESC
        LIMIT ?, ?");
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
    public function addProduct($name,$manu_id,$type_id,$price,$image,$description,$feature)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `products`(`name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`) 
        VALUES (?,?,?,?,?,?,?)");
        $sql->bind_param("siiissi", $name,$manu_id,$type_id,$price,$image,$description,$feature);
        return $sql->execute(); //return an object
    }
    public function deleteProduct($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `products` WHERE `id`=?");
        $sql->bind_param("i",$id);
        return  $sql->execute();
    } 
    public function editProduct($id,$name,$manu_id,$type_id,$price,$image,$description,$feature)
    {
        if($image == null){
            $sql = self::$connection->prepare("UPDATE `products` SET `name`= ?,`manu_id`= ?,`type_id`=?,`price`=?,`description`=?,`feature`=?
            WHERE `id`= ? ");
             $sql->bind_param("siiisii",$name,$manu_id,$type_id,$price,$description,$feature,$id);
        }
        else{
            $sql = self::$connection->prepare("UPDATE `products` SET `name`= ?,`manu_id`= ?,`type_id`=?,`price`=?,`image`=?,`description`=?,`feature`=?
            WHERE `id`= ? ");
             $sql->bind_param("siiissii",$name,$manu_id,$type_id,$price,$image,$description,$feature,$id);
        }
     
        return $sql->execute(); //return an object
    }
    public function search5($keyword,  $page, $perPage)
    {
        $fristLink = ($page -1) * $perPage;
        $sql = self::$connection->prepare("SELECT * 
        FROM products , manufactures, protypes
        WHERE `name` LIKE ?
        AND products.manu_id=manufactures.manu_id
        AND products.type_id=protypes.type_id
        LIMIT ?, ?");
        $keyword = "%$keyword%";
        $sql->bind_param("sii", $keyword,$fristLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function search($keyword)
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM products, manufactures, protypes 
        WHERE `name` LIKE ?
        AND products.manu_id=manufactures.manu_id
        AND products.type_id=protypes.type_id ");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function paginateSearch($url, $total, $perPage,$page)
    {
        $totalLinks = ceil($total/$perPage);
        $link ="";
       for($j=1; $j <= $totalLinks ; $j++)
        {
           if($j == $page){
                 $link = $link."<li  class='active' > <a  href='$url&page=$j'> $j </a></li>";
           }else{
               $link = $link."<li> <a  href='$url&page=$j'> $j </a></li>";
           }
        }
        return $link;
    }

    public function countProduct()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` ");
        $sql->execute();
        //$items = array();
        $items = $sql->get_result()->num_rows;
        return $items;
    }     
    
}