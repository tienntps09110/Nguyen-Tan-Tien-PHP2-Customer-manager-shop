<?php
    class AccountModel extends DB{
        public function account($user_name){
            $db = new DB();
            $query = "SELECT * FROM user WHERE user_name='$user_name'";
            return $db->execute1($query);
        }
    }
?>