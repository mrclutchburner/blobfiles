<?php
$host="localhost";
$user="root";
$pass="";
$db="mydata";

$conn=new mysqli($host,$user,$pass,$db);

if($conn){
    //echo "Connected";
}else{
    die(mysqli_error($conn));
}

?>
