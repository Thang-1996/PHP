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
        <h2>Danh Sách Thể Loại</h2>
    </div>
    <a href="?route=post_create"><button type="button" class="btn btn-primary btn-lg">Create new Category</button></a>
    <?php
    // lấy user
    $category = new \Model\Category();
    //    $current = $_SESSION['user'];
    ?>
    <!--    <h2>Đang đăng nhập dưới tên: --><?php //echo $current['name']; ?><!--</h2>-->
    <table class="table table-hover">
        <thead>
        <tr class="table-primary">
            <th scope="col">#</th>
            <th scope="col">Category Name</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>
        </tr>
        </thead>
        <tbody>
        <!--muốn viết riêng ra thì ?php tiếp-->
        <?php foreach ($category->getAll() as $u) : // gọi thuộc tính của đối tượng dùng dâu ->   ?>
        <tr>
            <td><?php echo $u["category_id"] ?>"</td>
            <td><a href="?route=books&category_id=<?php echo $u["category_id"]; ?>"</a><?php echo $u["name"] ?> </td>
            <td><a href="?route=post_category_delete&category_id=<?php echo $u["category_id"]; ?>"</a>Delete</td>
            <td><a href="?route=post_edit&category_id=<?php echo $u["category_id"]; ?>"</a>Update</td>
        </tr>
        <?php endforeach; ?><!-- // để end foreach không lẫn với dấu if else-->
        </tbody>
    </table>
</div>
</body>
</html>