<?php 
session_start();
ob_start();


    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "ciu";

    $con = mysqli_connect($server,$username,$password,$db);

    if(!$con){
      die("Connection failed" . mysqli_connect_error());
    }
    else{}

    $id = $_POST['id'];
    $username = $_POST['username'];

    $s = "SELECT * from `student` WHERE `id` = '$id' && `username` = '$username'";
    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['id'] = $id;
        header('location:reg_home.php');
    }
    else{
    header('location:advising.php');
    }
?>