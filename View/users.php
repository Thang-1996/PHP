
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="title">
        <h2>Danh Sách Người dùng</h2>
    </div>
    <?php
    // lấy user
    $users = new \Model\User();
    $current = $_SESSION['user'];
    ?>
    <h2>Đang đăng nhập dưới tên: <?php echo $current['name']; ?></h2>
    <table class="table table-hover">
        <thead>
        <tr class="table-primary">
            <th scope="col">#</th>
            <th scope="col">UserName</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>
        </tr>
        </thead>
        <tbody>
        <!--muốn viết riêng ra thì ?php tiếp-->
        <?php foreach ($users->getAll() as $u) : // gọi thuộc tính của đối tượng dùng dâu ->  ?>
        <tr>
            <td><?php echo $u["id"] ?>"</td>
            <td><?php echo $u["name"] ?> </td>
            <td><?php echo $u["email"] ?> </td>
            <td><?php echo $u["password"] ?></td>
            <td><a href="?route=delete&id=<?php echo $u["id"]; ?>"</a>Delete</td>
            <td><a href="?route=edit&id=<?php echo $u["id"]; ?>"</a>Update</td>
        </tr>
        <?php endforeach; ?><!-- // để end foreach không lẫn với dấu if else-->
        </tbody>
    </table>
</div>
</body>
</html>