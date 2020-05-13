<?php
// lấy dữ liệu từ form input sử dụng post
if(count($_POST) > 0): // tuc la co du lieu
    require_once "Student.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $mark = $_POST['mark'];
    //insert to table
    $student = new \Assigment2\Student(null,$name,$email,$age,$address,$mark);
    $student->save();
    header("Location: students.php"); // dieu huong tro lai trang danh sach
endif;