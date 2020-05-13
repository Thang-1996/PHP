<?php
// lấy dữ liệu từ form input sử dụng post
require_once "Student.php";
if(!empty($_GET["id"])): // tuc la co du lieu<?php
    $student = new \Assigment2\Student();
    $student = $student->find($_GET["id"]);
    $student->delete();
    header("Location: students.php");
endif;