<?php
    class Home extends Controller{
        function default(){
            $this->erorr();
        }
        function list_customer(){
            if($this->admin() == 1){
                $db = $this->model("CustomerModel");
                $db1 = $this->model("CartModel");
                $customer = $db->customerAll();
                $data = $customer->fetchAll();
                $this->view("masterlayout",[
                    "page"=>"list_customer",
                    "customer" => $data,
                    "cart" => $db1,
                ]);
            }else{
                $this->backLogin();
            }
            
        }
        function customer(){
            if($this->admin() == 1){
                $db = $this->model("CustomerModel");
                $db1 = $this->model("CartModel");
                $customer = $db->customerAll();
                $data = $customer->fetchAll();
                $this->view("masterlayout",[
                    "page"=>"customer",
                    "customer" => $data,
                    "cart" => $db1,
                ]);
            }else{
                $this->backLogin();
            }
        }
        function delete_customer($id){
            if($this->admin() == 1){
                $db = $this->model("CustomerModel");
                $db->delete_customer($id);
                $this->setCookie("success", "Xóa Customer thành công!", 1);
                $this->back();
            }else{
                $this->backLogin();
            }
        }
        function add_customer(){
            if($this->admin() == 1){
                $this->view("masterlayout", [
                    "page" => "add_customer",
                ]);
            }else{
                $this->backLogin();
            }
        }
        function post_add_customer(){
            if($this->admin() == 1){
                if(isset($_POST["submit"])){
                    $db = $this->model("CustomerModel");
                    $firstName = $_POST["firstName"];
                    $lastName = $_POST["lastName"];
                    $gender = $_POST["gender"];
                    $email = $_POST["email"];
                    $address = $_POST["address"];
                    $city = $_POST["city"];
                    $state = $_POST["state"];
                    $zip = $_POST["zip"];
                    $firstName = $_POST["firstName"];
                    $db->add_customer($firstName,  $lastName, $gender, $email, $address, $city,  $state, $zip);
                    $this->setCookie("success", "Thêm customer thành công !", 1);
                    $this->back();
                }else{
                    $this->erorr();
                }
                
            }else{
                $this->backLogin();
            }
        }
        function update_customer($id){
            if($this->admin() == 1){
                $db = $this->model("CustomerModel");
                $data = $db->customer_id($id)->fetchAll();
                $this->view("masterlayout", [
                    "page" => "update_customer",
                    "customer" => $data, 
                ]);
            }else{
                $this->backLogin(); 
            }
        }
        function post_update_customer(){
            if($this->admin() == 1){
                if(isset($_POST["update_submit"])){
                    $db = $this->model("CustomerModel");
                    $firstName = $_POST["firstName"];
                    $lastName = $_POST["lastName"];
                    $gender = $_POST["gender"];
                    $email = $_POST["email"];
                    $address = $_POST["address"];
                    $city = $_POST["city"];
                    $state = $_POST["state"];
                    $zip = $_POST["zip"];
                    $firstName = $_POST["firstName"];
                    $id = $_POST["id"];
                    $db->update_customer($firstName,  $lastName, $gender, $email, $address, $city,  $state, $zip, $id);
                    $this->setCookie("success", "Update customer thành công !", 1);
                    header('location: ../home/update_customer/'.$id);
                }else{
                    $this->erorr();
                }
            }else{
                $this->backLogin(); 
            }
        }
    }
?>