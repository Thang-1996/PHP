<?php
include_once("lib/connect.php");
$sql_text = "SELECT * FROM student";
$rs = $conn->query($sql_text); // chay cau querry
//var_dump($rs);
// kiểm tra số lượng hàng nhận được là num_rows
if($rs->num_rows > 0){ //-> dùng để truy xuất đến thuộc tính thay cho dấu. ngôn ngữ khác
    while($row = $rs->fetch_assoc()){ // phân giải từng hàng row là hàng lấy được
        $students[] = $row; // tạo mảng để bỏ vào từng phần từ lấy được mỗi row sẽ là 1 mảng có các key và value
    }
//    var_dump($students);
}
// students là mảng chứa các sinh viên chứa cơ sở dữ liệu
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sinh viên từ mysql</title>
</head>
<body>
    <?php foreach ($students as $s): ?>
    <ul>
        <li><?php echo $s["id"];?></li>
        <li><?php echo $s["name"];?></li>
        <li><?php echo $s["age"];?></li>
        <li><?php echo $s["address"];?></li>
        <li><?php echo $s["gender"];?></li>
        <li><?php echo $s["point"];?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>
