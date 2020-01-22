<?php
    class ProductModel extends DB{
        public function productAll(){
            $query = "SELECT * FROM product ORDER BY id DESC";
            $db = new DB();
            return $db->execute1($query);
        }
        public function product_id($id){
            $query = "SELECT * FROM product WHERE id='$id'";
            $db = new DB();
            return $db->execute1($query);
        }
    }
?>