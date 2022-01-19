<?php

include 'db.php';

if (isset($_POST['submit'])) {

    $type=$_POST['type'];
    $connum=$_POST['connum'];
    $date=$_POST['date'];
    $pdf = $_FILES['pdf'];
    //print_r($file);
    $fileName = $_FILES['pdf']['name'];
    $fileTmpName = $_FILES['pdf']['tmp_name'];
    $fileSize = $_FILES['pdf']['size'];
    $fileError = $_FILES['pdf']['error'];
    $fileType = $_FILES['pdf']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('pdf');
    //any type of file here just add file type 

    $sql="insert into `fsd` (type,connum,date,pdf) 
        values ('$type','$connum','$date','$pdf')";

    $result=mysqli_query($conn,$sql);   
    
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                if($result){
                    //echo "Data inserted successfully";
                    //header('location:uploaded.php');
                }else{
                    die(mysqli_error($conn));
                }
                $fileNameNew = uniqid('', true).".".$fileActualExt;

                //this is destination folder
                $fileDestination = 'uploads/'.$fileNameNew;
                //file destination folder uploads 
                //it can be change if you want just create a root folder
                //and happy haacking!

                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: upload.php?uploadsuccess");
            } else {
                echo "Your file is too big!";
            }
        } else {
            echo "There was an error uploading your file!";
        }
    }   else {
            echo "You cannot upload files of this type!";     
    }
}
