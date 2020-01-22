<?php
    class CustomerModel extends DB{
        public function customerAll(){
            $query = "SELECT * FROM customer ORDER BY id DESC";
            $db = new DB();
            return $db->execute1($query);
        }
        public function customer_id($id){
            $query = "SELECT * FROM customer WHERE id='$id'";
            $db = new DB();
            return $db->execute1($query);
        }
        public function delete_customer($id){
            $query = "DELETE FROM customer WHERE id='$id'";
            $db = new DB();
            return $db->execute1($query);
        }
        public function add_customer($firstName,  $lastName, $gender, $email, $address, $city,  $state, $zip){
            $query = "INSERT INTO customer(first_name, last_name, gender, email, address, city, state, zip) VALUES('$firstName',  '$lastName', '$gender', '$email', '$address', '$city',  '$state', '$zip')";
            $db = new DB();
            return $db->execute1($query);
        }
        public function update_customer($firstName,  $lastName, $gender, $email, $address, $city,  $state, $zip, $id){
            $query = "UPDATE customer SET first_Name='$firstName', last_Name='$lastName', gender='$gender',  email='$email', address='$address', city='$city', state='$state', zip='$zip' WHERE id ='$id'";
            $db = new DB();
            return $db->execute1($query);
        }
    }
?>