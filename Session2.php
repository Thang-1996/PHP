<?php
// array trong php không giới hạn số lượng phần tử
// array php : kết hợp cửa array javascript và hashmap của java
// khai báo mảng trong php
$ary = []; //
// thêm phần tử trong mảng
$ary[0] = 10;
// có thể lưu vừa số vừa chuỗi
$ary[1] = "Hello";
$ary[] = 3.14; // tự động nạp vào vị trí index tiếp theo
// vòng lặp trong php dùng hàm count để đếm số lượng
for ($i = 0 ; $i < count($ary);$i++){
    echo $ary[$i];
}
// foreach
foreach ($ary as $e){ // array as element nguoc voi java -c #
    echo $e;
}
$ary["point"] = 100;
var_dump($ary); // nếu set nhãn sẽ liên quan đến 1 giá trị riêng không phụ thuộc vào index nữa
$ary[] = 11;
var_dump($ary);

$student = [
    "name" => "Hoang trong ha",
    "age" => 15,
    "id" => 1
];
var_dump($student);
// mảng kiểu hashmap hay dùng để định nghĩa dữ liệu cho 1 phần tử
$student["point"] = 10;
var_dump($student);
// if else
if ($student["point"] == 5){
    echo $student["name"];
}else{
    echo "khong cho sinh vien";
}
// định nghĩa 1 hàm
function alert(){
    echo "thong bao khan cap";
}
// tham số có thể gán giá trị ngay từ ban đầu
function sendMessage($msg = "hehe"){ //  hơn javascript có thể truyền giá trị mặc định vào
    echo $msg;
}
sendMessage("hello"); // nếu không truyền tham số sẽ chạy tham số mặc định còn truyền sẽ thay thế tham số đó
// thông dịch ( runtime ) xong file này sẽ chuyển kết quá thành html





