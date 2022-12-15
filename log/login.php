<?php
session_start();
include("connection.php");
include("function.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty($username) && !empty($password) && !is_numeric($username)) {
        // read to db
        $query = "select * from user where username = '$username' limit 1 )";
        $result = mysqli_query($conn, $query);
        
        if($result){
            if($result && mysqli_num_rows($result)>0){
                $userdata = mysqli_fetch_assoc($result);
                if($userdata['password']===$password){
                    $_SESSION['userid'] = $userdata['userid'];
                    header("location: login.php");
                    die;
                }
            }
        }echo "wrong username or password";
    } else {
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
            background-color: #fefe;
        }
    </style>
</head>

<body>
    <div class="box">
        <form action="" method="post">
            <h2>login</h2>
            username:<input type="text" name="username"><br>
            password:&nbsp<input type="password" name="pasword"><br>
            <input type="submit" value="login"><br>
            click here to <a href="signup.php">signup</a>
        </form>
    </div>
</body>

</html>