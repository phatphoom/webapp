<?php
    session_start();
    include("connection.php");
    include("function.php");
    if($_SERVER['REQUEST_METHOD'] =="POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(!empty($username) && !empty($password) && !is_numeric($username)){
            // save to db
            $userid = rand(20);
            $query = "insert into user (userid,username,password) values('$userid','$username','$password')";
            mysqli_query($conn,$query);
            header("location: login.php");
        }
        else{
            echo "please enther valid";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            background-color: #999;
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="" method="post">
            <h2>signup</h2>
            username:<input type="text" name="username"><br>
            password:&nbsp<input type="password" name="password"><br>
            <input type="submit" value="signup"><br>
            click here to <a href="login.php">login</a>
        </form>
    </div>
</body>
</html>