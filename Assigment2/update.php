<?php
require_once "Student.php"
;?>
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
        <form action="post_update.php" method="POST">
            <?php
            $id = $_GET["id"];
            $student = new \Assigment2\Student();
            $student = $student->find($id);
            ?>
            <input type="hidden" name="id" value="<?php echo $student->id;?>"/>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $student->name;?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $student->email;?>">
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="text" name="age" class="form-control" value="<?php echo $student->age;?>">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo $student->address;?>">
            </div>
            <div class="form-group">
                <label>Mark</label>
                <input type="text" name="mark" class="form-control" value="<?php echo $student->mark;?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

</body>
</html>
