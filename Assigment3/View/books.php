
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
        <h2>Danh Sách Sách</h2>
    </div>
    <a href="?route=view_book_create"><button type="button" class="btn btn-primary btn-lg">Create new Book</button></a>
    <?php
    // lấy user
    $category_id = $_GET["category_id"];
    $books = new \Model\Book();
//    $current = $_SESSION['user'];
    ?>
<!--    <h2>Đang đăng nhập dưới tên: --><?php //echo $current['name']; ?><!--</h2>-->
    <table class="table table-hover">
        <thead>
        <tr class="table-primary">
            <th scope="col">#</th>
            <th scope="col">BookName</th>
            <th scope="col">Author</th>
            <th scope="col">Quantity</th>
            <th scope="col">Category_ID</th>
            <th scope="col">Category_Name</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>
        </tr>
        </thead>
        <tbody>
        <!--muốn viết riêng ra thì ?php tiếp-->
        <?php foreach ($books->getBook($category_id) as $u) : // gọi thuộc tính của đối tượng dùng dâu ->  ?>
        <tr>
            <td><?php echo $u["book_id"] ?>"</td>
            <td><?php echo $u["book_name"] ?> </td>
            <td><?php echo $u["author"] ?> </td>
            <td><?php echo $u["qty"] ?></td>
            <td><?php echo $u["category_id"] ?></td>
            <td><?php echo $u["name"] ?></td>
            <td><a href="?route=post_book_delete&book_id=<?php echo $u["book_id"]; ?>"</a>Delete</td>
            <td><a href="?route=view_book_edit&book_id=<?php echo $u["book_id"]; ?>"</a>Update</td>
        </tr>
        <?php endforeach; ?><!-- // để end foreach không lẫn với dấu if else-->
        </tbody>
    </table>
</div>
</body>
</html>