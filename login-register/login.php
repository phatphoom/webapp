<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>เข้าสู่ระบบ</h2>
    <form action="login_funch.php" method="post">
        <input type="text" name="email" placeholder="email"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="submit" value="เข้าสู่ระบบ">
        <p>not have user yet <a href="register.php">สมัครสมาชิก</a></p>

    </form>
</body>
</html>