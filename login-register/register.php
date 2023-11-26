<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>สมัครสมาชิก</h2>
    <form action="register_func.php" method="post">
        <input type="text" name="name" placeholder="name"><br>
        <input type="text" name="email" placeholder="email"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="submit" value="สมัครสมาชิก">
        <p>already to <a href="login.php"> เข้าสู่ระบบ</a></p>
    </form>
</body>
</html>