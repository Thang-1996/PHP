<?php
//ket noi db
function connect($db){
    $host = "localhost";
    $userDB = "root";
    $passDB = "";//xampp thi de "", mmam thi de "root"
    $dbName = $db;
    $conn = new mysqli($host, $userDB, $passDB, $dbName);//khong can port

    if($conn->connect_error){
        die("connect fail"); // die la hàm dùng luồng đang chạy, php là ngôn ngữ đơn luồng (single thread), ở dây kết nối lỗi gặp die ko chạy nữa
    }
    return $conn;
}

//function getAll($table){
//    $conn = connect();
//    //nếu connect thì code chạy tiếp bên dưới
//    //echo "connected successfully";
//    //Câu lệnh sql
//    $sql_text = "SELECT * FROM ".$table;
//
//    //gan bien result
//    $result = $conn -> query($sql_text);
//    //var_dump($result);
//    $data = [];
//    if($result -> num_rows > 0){
//        while ($row = $result -> fetch_assoc()){
//            $data[] = $row;
//            //mỗi row mà 1 mảng có các key là các column
//        }
//        //var_dump($students);
//    }
//    //students là mang chứa các sinh viên
//    return $data;
//}
function toArray($result){
    $data = [];
    if($result -> num_rows > 0){
        while ($row = $result -> fetch_assoc()){
            $data[] = $row;
            //mỗi row mà 1 mảng có các key là các column
        }
        //var_dump($students);
    }
    //students là mang chứa các sinh viên
    return $data;
}