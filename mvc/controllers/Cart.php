<?php
    class Cart extends Controller{
        function default(){
            $this->erorr();
        }
        function list_cart(){
            if($this->admin() == 1){
                $db = $this->model("CartModel");
                $db1 = $this->model("CustomerModel");
                $data = $db1->customerAll()->fetchAll();
                $this->view("masterlayout",[
                    "page"=>"cart_all",
                    "customer" => $data,
                    "cart" => $db, 
                ]);
            }else{
                $this->backLogin();
            }
        }
        function detail($id){
            if($this->admin() == 1){
                $db = $this->model("CartModel");
                $db1 = $this->model("CustomerModel");
                $db2 = $this->model("ProductModel");
                $db3 = $this->model("CartdetailModel");
                $data = $db->cartDetail($id)->fetchAll();
                $this->view("masterlayout",[
                    "page"=>"cart_detail",
                    "cart" => $data,
                    "cart_detail" => $db3,
                    "product" => $db2,
                    "customer" => $db1,
                    
                ]);
            }else{
                $this->backLogin();
            }
        }
        function customer_cart($id){
            if($this->admin() == 1){
                $db = $this->model("CartModel");
                $db1 = $this->model("CustomerModel");
                $data = $db->cart_id($id)->fetchAll();
                $data1 = $db1->customer_id($id)->fetchAll();
                $this->view("masterlayout",[
                    "page"=>"cart_customer",
                    "cart" => $data,
                    "customer" => $data1,
                    
                ]);
            }else{
                $this->backLogin();
            }
        }
        function add_cart(){
            $db = $this->model("CustomerModel");
            $db1 = $this->model("ProductModel");
            $customer = $db->customerAll()->fetchAll();
            $product = $db1->productAll()->fetchAll();
            $this->view("masterlayout", [
                "page"=>"add_cart",
                "customer"=> $customer,
                "product" => $product,

            ]);
        }

        function post_add_cart(){
            if($this->admin() == 1){
                $db = $this->model("CartModel");
                $db1 = $this->model("CartdetailModel");
                $db2 = $this->model("ProductModel");
                if(isset($_POST["submit_cart"])){
                    $id_customer = $_POST["id_customer"];
                    $total = 1000;
                    $tong = 0;
                    $db->add_cart($id_customer, $total);
                    $lastId = $db->cart_id_last($id_customer)->fetchAll();
                    foreach($lastId as $row){}
                    $id_cart = $row["id"];
                    for($i = 1 ; $i <= 4 ; $i++){
                        $name = "cart".$i;
                        $gettotal = "total".$i; 
                        if($_POST[$name] > 0){
                            $id_product = $_POST[$name];
                            $total = $_POST[$gettotal];
                            $db1->add_cartdetail($id_cart, $id_product, $total);
                            $product = $db2->product_id($id_product)->fetchAll();
                            foreach($product as $row1){}
                            $tong += ($row1["price"] * $total);
                        }
                    }
                    $db->update_total($tong, $id_cart);
                    $this->setCookie("success", "Thêm đơn hàng thành công", 1);
                    $this->back();
                }else{
                    $this->erorr();
                }
            }else{
                $this->backLogin();
            }
        }
        function delete_cart($id){
            if($this->admin() == 1){
                $db = $this->model("CartModel");
                $db->delete_cart($id);
                $this->setCookie("success", "Xóa đơn hàng thành công", 1);
                $this->back();
            }else{
                $this->backLogin();
            }
        }
    }
?>