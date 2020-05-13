<?php
require_once("Student.php");
$students = new \Assigment2\Student();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .title{
            display: flex;
            flex-direction: row;
            justify-content: center;
            padding: 30px 0;
            color: blue;
            font-family: Arial,sans-serif;
            text-transform: uppercase;
        }
        .action{
            padding: 30px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="title">
        <h2>Quản Lý Sinh Viên</h2>
    </div>
    <div class="action">
        <a href="create.php"><button type="button" class="btn btn-primary btn-lg">Create New Student</button></a>
    </div>
    <table class="table table-hover">
        <thead>
        <tr class="table-primary">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Address</th>
            <th scope="col">Mark</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <!--muốn viết riêng ra thì ?php tiếp-->
        <?php foreach ($students->getAll() as $s) : // gọi thuộc tính của đối tượng dùng dâu -> ?>
        <tr>
            <td><?php echo $s["id"]?></td>
            <td><?php echo $s["name"] ?> </td>
            <td><?php echo $s["email"] ?> </td>
            <td><?php echo $s["age"] ?></td>
            <td><?php echo $s["address"] ?></td>
            <td><?php echo $s["mark"] ?></td>
            <td><a href="update.php?id=<?php echo $s["id"]; ?>"</a>Update</td>
            <td><a href="delete.php?id=<?php echo $s["id"]; ?>"</a>Delete</td>
        </tr>
        <?php endforeach;?><!-- // để end foreach không lẫn với dấu if else-->
        </tbody>
    </table>
</div>
</body>
</html>