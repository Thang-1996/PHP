<?php
// sử dụng ky thuật session
// lấy dữ liệu từ form input sử dụng post
if(count($_POST) > 0): // tuc la co du lieu
    $email = $_POST['email'];
    $pass = $_POST['password'];
    //bước 1 xác nhận login
    $user = new \Assigment1\User();
    $user = $user->attempt($email,$pass);
    // bước 2 gọi biến session và gán user đã check vào
    if(!is_null($user)){ // nếu có thì chuyển về trang user
        $_SESSION['user'] = $user;
        header("Location: ?route=users");
    }else{
        header("Location: ?route=login"); //  không thì chuyển lại về trang login
    }
    ; // dieu huong tro lai trang danh sach
endif;