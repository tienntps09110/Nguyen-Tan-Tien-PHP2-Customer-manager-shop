<?php 
    class CartModel extends DB{
        function cart_id($id_customer){
            $query = "SELECT * FROM cart WHERE id_customer='$id_customer'";
            $db = new DB();
            return $db->execute1($query);
        }
        function cartDetail($id){
            $query = "SELECT * FROM cart WHERE id='$id'";
            $db = new DB();
            return $db->execute1($query);
        }
        function cartAll(){
            $query = "SELECT * FROM cart ORDER BY id DESC";
            $db = new DB();
            return $db->execute1($query);
        }
        function add_cart($id_customer, $total){
            $query = "INSERT INTO cart(id_customer, total) VALUES('$id_customer',  '$total')";
            $db = new DB();
            return $db->execute1($query);
        }
        function cart_id_last($id_customer){
            $query = "SELECT * FROM cart WHERE id_customer='$id_customer' ORDER BY id ASC";
            $db = new DB();
            return $db->execute1($query);
        }
        function update_total($total, $id_cart){
            $query = "UPDATE cart SET total='$total' WHERE id ='$id_cart'";
            $db = new DB();
            return $db->execute1($query);
        }
        public function delete_cart($id){
            $query = "DELETE FROM cart WHERE id='$id'";
            $db = new DB();
            return $db->execute1($query);
        }
    }
?>