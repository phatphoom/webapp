<?php
include "db.php";
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = hash("sha256",$password);
$sql = "INSERT INTO user(full_name,email,password) VALUES('$name','$email','$password')";
$result = mysqli_query($conn,$sql);
if($result){
    echo "
    <script>
    alert('insert data successful');
    window.location='register.php'
    </script>
    ";
}else{
    echo "<script>alert('failed');</script>";
}

?>

