<?php
    session_start();
    $_SESSION;

    $userdata = checkLog($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">logout</a>
    <a href="login.php">login</a>
    <h1>this is index page</h1>
    hello <?php
        echo $userdata['username'];
    ?>
</body>
</html>