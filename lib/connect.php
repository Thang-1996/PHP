<?php
function connect($db)
{
// lay du lieu tu mysql dua vao php
    $host   = "localhost";
    $userDB = "root";
    $passDB = "";
    $dbName = $db;
    $conn   = new mysqli($host, $userDB, $passDB, $dbName); // không cần truyền port
// kiểm tra kết nối
    if ($conn->connect_error) {
        die("Connect fail"); // die là hàm dùng để dừng luồng đang chạy php là ngôn ngữ chỉ có 1 luồng chạy
    }
    return $conn;
}
function getResult($db,$query){
    $conn = connect($db);
    $sql_text = $query;
    $data = [];
    $rs = $conn->query($sql_text); // chay cau querry lấy về biến rs
//var_dump($rs);
// kiểm tra số lượng hàng nhận được là num_rows
    if($rs->num_rows > 0){ //-> dùng để truy xuất đến thuộc tính thay cho dấu. ngôn ngữ khác
        while($row = $rs->fetch_assoc()){ // phân giải từng hàng row là hàng lấy được
            $data[] = $row; // tạo mảng để bỏ vào từng phần từ lấy được mỗi row sẽ là 1 mảng có các key và value
        }
//    var_dump($data);
    }
    return $data;
}

// ra ngoài này có nghĩa kết nối thành công
//echo "Connect Successful";