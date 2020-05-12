<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>"Đây là ví dụ lồng ghép php và html"</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .title{
            display: flex;
            flex-direction: row;
            justify-content: center;
            padding: 30px 0;
            color: pink;
            font-family: Arial,sans-serif;
            text-decoration: underline;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
<!--muốn gọi file php vào thi-->
<?php
include_once ("students.php"); // nap file php vào 1 file khác
?>
<div class="container">
    <div class="title">
        <h1>Thông tin sinh viên</h1>
    </div>
<table class="table table-hover">
    <thead>
    <tr class="table-danger">
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Gender</th>
        <th scope="col">Address</th>
        <th scope="col">Point</th>
    </tr>
    </thead>
    <tbody>
<!--muốn viết riêng ra thì ?php tiếp-->
<?php foreach ($students as $s) : // gọi thuộc tính của đối tượng dùng dâu -> ?>
    <tr>
        <td><a href="#"><?php echo $s -> id ?> </a></td>
        <td><?php echo $s -> name ?> </td>
        <td><?php echo $s -> age ?> </td>
        <td><?php echo $s -> gender ?> </td>
        <td><?php echo $s -> address ?> </td>
        <td><?php echo $s -> point ?> </td>
    </tr>
<?php endforeach;?><!-- // để end foreach không lẫn với dấu if else-->
    </tbody>
</table>
</div>
</body>
</html>