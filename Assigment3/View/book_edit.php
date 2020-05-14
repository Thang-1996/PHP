
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .title{
            display: flex;
            justify-content: center;
            color: blue;
            margin-top: 50px;
        }
        .content{
            display: flex;
            flex-direction: column;
            margin-top: 50px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="title">
        <h1>Edit</h1>
    </div>
    <div class="content">
        <form action="?route=post_book_edit" method="POST">
            <?php
            $book_id = $_GET["book_id"];
            $book = new \Model\Book();
            $book = $book->find($book_id);
            //            $current = $_SESSION['user'];
            ?>
            <!--            <h2>Đang edit dưới tên: --><?php //echo $current['name']; ?><!--</h2>-->
            <input type="hidden" name="id" value="<?php echo $book->book_id;?>"/>
            <div class="form-group">
                <label for="exampleInputName">Book Name</label>
                <input type="text" name="book_name" class="form-control" value="<?php echo $book->book_name;?>">
            </div>
            <div class="form-group">
                <label for="exampleInputName">Author</label>
                <input type="text" name="author" class="form-control" value="<?php echo $book->author;?>">
            </div>
            <div class="form-group">
                <label for="exampleInputName">Quantity</label>
                <input type="text" name="qty" class="form-control" value="<?php echo $book->qty;?>">
            </div>
            <div class="form-group">
                <label for="exampleInputName">Category ID</label>
                <input type="text" name="category_id" class="form-control" value="<?php echo $book->category_id;?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

</body>
</html>
