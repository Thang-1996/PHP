
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
    <div class="menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="Login.php">Login<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Register.php">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="title">
        <h1>Edit</h1>
    </div>
    <div class="content">
        <form action="?route=post_edit" method="POST">
            <?php
            $id = $_GET["id"];
            $user = new \Model\User();
            $user = $user->find($id);
            $current = $_SESSION['user'];
            ?>
            <h2>Đang edit dưới tên: <?php echo $current['name']; ?></h2>
            <input type="hidden" name="id" value="<?php echo $user->id;?>"/>
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" value="<?php echo $user->name;?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $user->email;?>">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

</body>
</html>
