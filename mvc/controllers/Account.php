<?php 
    class Account extends Controller{
        function default(){
            $this->login();
        }
        function login(){
            if($this->admin() == 1){
                header('location: ../home/customer');
            }else{
                $this->view("masterlayout", [
                    "page"=> "login",
                ]);     
            }
        }
        function logout(){
            if($this->admin() == 1){
                unset($_SESSION['user']);
                unset($_SESSION['id']);
                header('location: ../account/login');
            }else{
                $this->erorr();
            }
        }
        function postLogin(){
            if(isset($_POST["username"]) && isset($_POST["password"])){
                $db = $this->model("AccountModel");
                $username = $_POST["username"];
                $password = $_POST["password"];
                $test_user = $db->account($username);
                foreach($test_user->fetchAll() as $user){}
                if(isset($user["password"])){
                    if(password_verify($password, $user["password"])){
                        $_SESSION['user'] = $user["user_name"];
                        $_SESSION['id'] = $user['id_user'];
                        if(isset($_POST['selector'])){
                            setcookie('user',$user['user_name']);
                            setcookie('password',$password);
                        }else{
                            setcookie('user', '', time()-300);
                            setcookie('password', '', time()-300);
                        }
                        header('location: ../home/customer');
                    }else{
                        $this->setCookie("danger", "Sai tài khoản hoặc mật khẩu", 1);
                        $this->back();
                    }
                }else{
                    $this->setCookie("danger", "Sai tài khoản hoặc mật khẩu", 1);
                    $this->back();
                } 
            }else{
                $this->erorr();
            }
        }
    }
?>