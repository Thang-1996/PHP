<?php
class Controller{
    //  controller login
    public function login(){
        require_once "View/Login.php";
    }
    public function register(){
        require_once "View/Register.php";
    }
    public function postLogin(){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        //bước 1 xác nhận login
        $user = new \Model\User();
        $user = $user->attempt($email,$pass);
        // bước 2 gọi biến session và gán user đã check vào
        if(!is_null($user)){ // nếu có thì chuyển về trang user
            $_SESSION['user'] = $user;
            header("Location: ?route=users");
        }else{
            header("Location: ?route=login"); //  không thì chuyển lại về trang login
        }
    }
    public function postRegister(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        //insert to table
        $user = new \Model\User(null,$name,$email,$pass);
        $user->save();
        header("Location: ?route=users");
    }
    public function users(){
        require_once "View/users.php";
    }
}