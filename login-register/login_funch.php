<?php
session_start();

include "db.php";
$email = $_POST['email'];
$password = $_POST['password'];
$password = hash("sha256",$password);

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

if($row > 0){
    $_SESSION['email'] = $row["email"];
    $_SESSION['password'] = $row["password"];
    echo header("location:index.php");
}

?>