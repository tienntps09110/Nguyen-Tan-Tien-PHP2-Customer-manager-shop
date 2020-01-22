<?php
    class Controller{
        // Gọi đến model và require_once model
        public function model($model){
            require_once "./mvc/models/".$model.".php";
            return new $model;
        }
        // Gọi đến view và truyền mảng
        public function view($view, $data=[]){
            require_once "./mvc/views/".$view.".php";
        }
        // Trả về trang 404
        function erorr(){
            $this->view("masterlayout", [
                "page"=>"erorr",
            ]);
        }
        // Check đăng nhập admin
        function admin() {
            if(isset($_SESSION["user"])){
                $login = 1;
            }else{
                $login = 0;
            }
            return $login;
        }
        // Set cookie
        function setCookie($name, $content, $time){
            setcookie($name, $content, time() + ($time), "/");
        }
        // Trở về trang trước
        function back(){
            return header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
        // Trở về trang login
        function backLogin(){
            return header('location: ../account/login');
        }
    }
?>