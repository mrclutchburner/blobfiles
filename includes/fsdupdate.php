<?php
    include 'connect.php';

    $id=$_GET['updateid'];
    $sql="Select * from `fsd` where id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $type=$row['type'];
    $connum=$row['connum'];
    $date=$row['date'];
    //$file=$row['file'];

    if(isset($_POST['submit'])){
        $type=$_POST['type'];
        $connum=$_POST['connum'];
        $date=$_POST['date'];
        //$file=$_POST['file'];

        $sql="update `fsd` set id=$id,type='$type',connum='$connum',date='$date'
        where id=$id";
   
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Data updated successfully";
            header ('location:index.php');
            
        }else{
            die(mysqli_error($conn));
        }
    }
?>