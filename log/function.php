<?php
function checkLog($conn){
    if(isset($_SESSION['userid'])){
        $id = $_SESSION['userid'];
        $query = "select * from user where userid = '$id' limit 1";
        $result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result)>0){
            $userdata = mysqli_fetch_assoc($result);
            return $userdata;
        }
        header("location: login.php");
        die;
    }
    function random_num($length){
        $text = "";
        if($length<5){
            $length = 5;
        }
        $len = rand(4,$length);
        for($i=0;$i<$len;$i++){
            $text = rand(0,9);
        }
        return $text;
    }
}
?>