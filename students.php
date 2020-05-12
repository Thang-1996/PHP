<?php
// đây là nơi viết code php ở bên ngoài phạm vi sẽ là code html
// lấy data từ json
$studentsJson = file_get_contents("data/students.json"); // string json
// chuyển đổi thành mảng hoặc đối tượng của sdt class
$students = json_decode($studentsJson);
?>