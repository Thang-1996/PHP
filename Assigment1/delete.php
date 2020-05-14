<?php
// lấy dữ liệu từ form input sử dụng post
if(!empty($_GET["id"])): // tuc la co du lieu<?php
    $user = new \Model\User();
    $user = $user->find($_GET["id"]);
    $user->delete();
    header("Location: ?route=users");
endif;