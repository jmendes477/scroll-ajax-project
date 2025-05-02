<?php
include ('conn.php');

for($x = 0; $x < 10; $x++){
    $file = file_get_contents('https://baconipsum.com/api/?type=meat-and-filler',true);
    $uTime = time();
    $query = "INSERT INTO `bposts` ( `content`, `date`) VALUES ('".$file."' ,$uTime )";
    // echo $query;
    $result = mysqli_query($link,$query);
}
?>