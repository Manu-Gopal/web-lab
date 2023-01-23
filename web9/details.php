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
