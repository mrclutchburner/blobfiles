<?php
    include 'db.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="delete from `fsd` where id=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            //echo "Deleted successfully";
            header('location:fileinserted.php');
        }else{
            die(mysqli_error($conn));
        }

    }

?>