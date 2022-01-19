<?php
$host="localhost";
$user="root";
$password="";
$db="user";

session_start();

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $username=$_POST["username"];
        $password=$_POST["password"];

        $sql="select * from login where username='".$username."' AND password='".$password."' ";

        $result=mysqli_query($data,$sql);

        $row=mysqli_fetch_array($result);

        if($row["usertype"]=="user")
        {   
            $_SESSION["username"]=$username;
             
            header("location:dashboardsecondary.php");
        }
        else if($row["usertype"]=="admin")
        {   
            $_SESSION["username"]=$username;

            header("location:index.php");
        }
        else
        {
            echo "username or password incorrect";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
	background-image: white;
	display: flex;
	padding-left:5%;
	padding-top:30px;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

input {
	display: block;
	border:  1px solid #6e6a6a;
	width: 100%;
	height: 35px;
	padding: 5px;
	margin: 3px auto;
	border-radius: 5px;
	background: #ffffffbd;
}
label {
	color: #625f5f;
	font-size: 18px;
	padding: 12px;
	font-weight: 600;
}

.copy {
    font-size: 12px;
    text-align: center;
    text-transform: capitalize;
    margin-top: 50px;
    text-decoration: navajowhite;
}

.form {
	display: relative;
	width: 400px;
	height: 600px;
	border: 1px solid #6e6a6a;
	box-shadow: 0px 10px 50px #550;
	padding: 5px 30px;
	background: #ffffff42;
	border-radius: 15px;
}
h2 {
	text-align: center;
	margin-bottom: 25px;
	font-weight:900;
	font-size:32px;
    color:rgb(17, 64, 90);
    font-family: sans-serif;
}
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

.form .logo{
	top: 10px;
	position: relative;
    width: 110px;
    height: 100px;
}
.form .logo .rotate_1{
	position: absolute;
	top: 10px;
    width: 110px;
    height: 110px;
    -webkit-transition: -webkit-transform 1s;
}
.form .logo .rotate_2{
	position: absolute;
  	top: 10px;
    width: 110px;
    height: 110px;
    -webkit-animation: spin 15s linear infinite; 
    -moz-animation: spin 15s linear infinite;
    animation: spin 15s linear infinite;
}

@media(max-width:820px){
    .form .logo .rotate_1{
        display: inline-block;
        position: center;
        margin: -30px 0 -86px 0;
        width: 90px;
        height: 90px;
    }
    .from .logo .rotate_2{
        display: inline-block;
        position: center;
        margin: -30px 0 -94px 0;
        width: 90px;
        height: 90px;
	}
	h2{
		text-align: center;
		margin-bottom: 5px;
		font-weight:800;
		font-size:35px;
	}
	label {
	font-size: 18px;
	padding: 10px;
	font-weight: 600;
}
}
	
@media(max-width:768px){
    .form .logo .rotate_1{
        display: inline-block;
        margin: -30px 0 -74px 0;
        width: 90px;
        height: 90px;
    }
    .form .logo .rotate_2{
        display: inline-block;
        margin: -30px 0 100px 0;
        width: 90px;
        height: 90px;
	}
	.form .logo{
	top: 30px;
	position: relative;
    width: 80px;
    height: 80px;
	}
	h2{
		text-align: center;
		margin-bottom: 5px;
		font-weight:800;
		font-size:32px;
	}
}

@media(max-width:720px){
    .form .logo .rotate_1{
        display: inline-block;
        margin: -30px 0 -74px 0;
        width: 90px;
        height: 90px;
    }
    .form .logo .rotate_2{
        display: inline-block;
        margin: -30px 0 100px 0;
        width: 90px;
        height: 90px;
	}
	.form .logo{
	top: 30px;
	position: relative;
    width: 80px;
    height: 80px;
	}
	h2{
		text-align: center;
		margin-bottom: 25px;
		font-weight:800;
		font-size:32px;
	}
}

@media(max-width:620px){
    .form .logo .rotate_1{
        display: inline-block;
        margin: -10px 0 -113px 0;
        width: 110px;
        height: 110px;
    }
    .form .logo .rotate_2{
        display: inline-block;
        margin: -20px 0 -95px 0;
        width: 110px;
        height: 110px;
	}
	
}

@media(max-width:540px){
    .form .logo .rotate_1{
        display: inline-block;
        margin: -30px 0 -74px 0;
        width: 90px;
        height: 90px;
    }
    .form .logo .rotate_2{
        display: inline-block;
        margin: -30px 0 100px 0;
        width: 90px;
        height: 90px;
	}
	.form .logo{
	top: 30px;
	position: relative;
    width: 80px;
    height: 80px;
	}
	h2{
		text-align: center;
		margin-bottom: 5px;
		font-weight:800;
		font-size:32px;
	}
}

    </style>
</head>
<body>

    <form action="#" method="POST">
        <div class="form">
	 	    <div class="logo" style="padding-left:35%;">
                <img class="rotate_1" src="logo/Eleco new logo.png">
                <img class="rotate_2" src="logo/Eleco new logo 1975.png">
		    </div>
    <div>
        <h2>Data Management System</h2>

        <label>Username</label>
        <input type="text" 
			 		name="username" required
					placeholder="Name e.g (Juan G. Dela Cruz)">
    </div>
        <br><br>
    <div>
        <label>Password</label>
        <input type="password" 
			 		name="password" required
					placeholder="Password e.g (Enter Password)">
    </div>
    <br><br>
    <div>
        <input type="submit" value="Login">
    </div>
        <div class="copy">
            <p>&copy Coded by CPITETSD 2021.</p>
        </div>

    </form>

    <br><br>
    </div>
</body>
</html>