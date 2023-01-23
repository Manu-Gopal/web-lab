<?php
include "connection.php";
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $pass=$_POST['password'];
        $check="select * from login where name='$name' and password='$pass'";
        $result=mysqli_query($conn,$check);
        if(mysqli_num_rows($result)>0){
            session_start();
            header("Location:home.php");
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Teacher Login</h3>
    <form method="post">
        <input type="text" name="name" placeholder="Name"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="submit" value="login">
    </form>
</body>
</html>
