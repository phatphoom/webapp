<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .content {
            width: 400px;
        }
    </style>
</head>
<body>
    <h2 class="text-center mt-5">เข้าสู่ระบบ</h2>
   
    <div class="container-md mt-5 content">
        <form action="login_funch.php" method="post">
            <input type="text" name="email" placeholder="email" 
            class="form-control"><br>
            <input type="password" name="password" placeholder="password" class="form-control"><br>
            <input type="submit" value="สมัครสมาชิก" class="btn btn-primary mt-2">
            <p>not have user yet<a href="register.php"> สมัครสมาชิก</a></p>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>