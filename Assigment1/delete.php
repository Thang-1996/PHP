<?php
// lấy dữ liệu từ form input sử dụng post
require_once "User.php";
if(!empty($_GET["id"])): // tuc la co du lieu<?php
    $user = new \Assigment1\User();
    $user = $user->find($_GET["id"]);
    $user->delete();
    header("Location: users.php");
endif;