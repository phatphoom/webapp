<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "web_app";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(!$conn){
    die("failed");
}
?>