<?php
require_once("lib/connect.php");
// students là mảng chứa các sinh viên chứa cơ sở dữ liệu
$products = getResult("t1907m","product");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product </title>
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
<div class="container">
    <div class="title">
        <h1>Danh Sách Sản Phẩm</h1>
    </div>
    <table class="table table-hover">
        <thead>
        <tr class="table-danger">
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
        </tr>
        </thead>
        <tbody>
        <!--muốn viết riêng ra thì ?php tiếp-->
        <?php foreach ($products as $p) : // gọi thuộc tính của đối tượng dùng dâu -> ?>
        <tr>
            <td><?php echo $p["id"]?></td>
            <td><?php echo $p["name"] ?> </td>
            <td><?php echo $p["des"] ?> </td>
            <td><?php echo $p["price"] ?> $ </td>
            <td><?php echo $p["qty"] ?> </td>
        </tr>
        <?php endforeach;?><!-- // để end foreach không lẫn với dấu if else-->
        </tbody>
    </table>
</div>

</body>
</html>
