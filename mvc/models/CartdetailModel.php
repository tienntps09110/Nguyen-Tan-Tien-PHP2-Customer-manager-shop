<?php 
    class CartdetailModel extends DB{
        function cartDetail_id($id_cart){
            $query = "SELECT * FROM detail_cart WHERE id_cart='$id_cart'";
            $db = new DB();
            return $db->execute1($query);
        }
        function add_cartdetail($id_cart, $id_product, $total){
            $query = "INSERT INTO detail_cart(id_cart, id_product, total) VALUES('$id_cart', '$id_product', '$total')";
            $db = new DB();
            return $db->execute1($query);
        }
    }
?>