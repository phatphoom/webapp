<?php
 session_start();
 
 include "db.php";
 if(!isset($_SESSION['email'])){
  header("localtion:learn.php");
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h2>Hello</h2>
    <h3>Wellcome</h3>

    <!-- <a class="btn btn-primary" href="login.php" role="button">login</a> -->
    <a class="btn btn-danger" href="logout.php" role="button">logout</a>
</body>
</html>