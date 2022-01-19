<?php

session_start();
if(!isset($_SESSION["username"]))
{
    header("location:login.php");
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Management System</title>
    <style>
        
        /** My Side Nav start**/

        .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: rgb(17, 44, 70);
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 20px;
      }

      /** .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
        transition: 0.3s;
      }

      .sidenav a:hover {
        color: #f1f1f1;
      }*/

      .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 24px;
        margin-left: 50px;
      }

      @media screen and (max-height: 450px) {
        .sidenav {
          padding-top: 15px;
        }
        .sidenav a {
          font-size: 18px;
        }
      }

   

        /** My Side Nav END**/
         
         /*use keyframes*/
            @-webkit-keyframes spin{
                100%{-webkit-transform: rotate(360deg);}
            }
            @-moz-keyframes spin{
                100%{-webkit-transform: rotate(360deg);}
            }
            @keyframes spin{
                100%{-webkit-transform: rotate(360deg);}
            }
 
        /*Responsive start here*/
        /*Media Queries*/
 
            .sidenav .logo{
                top: 10px;
                position: relative;
                width: 110px;
                height: 100px;
            }
            .sidenav .logo .rotate_1{
                position: absolute;
                top: 10px;
                width: 110px;
                height: 110px;
                -webkit-transition: -webkit-transform 1s;
            }
            .sidenav .logo .rotate_2{
                position: absolute;
                top: 10px;
                width: 110px;
                height: 110px;
                -webkit-animation: spin 15s linear infinite; 
                -moz-animation: spin 15s linear infinite;
                animation: spin 15s linear infinite;
            }
    </style>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">