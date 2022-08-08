<?php
     $server = "localhost";
     $username = "root";
     $password = "";
     $db = "ciu";

     $con = mysqli_connect($server,$username,$password,$db);

     if(!$con){
     die("Connection failed" . mysqli_connect_error());
     }
     else{
       
     }
     
    $id = $_GET['id'];

    $q = " DELETE FROM `offer_list` WHERE id = $id ";

    mysqli_query($con, $q);

    header('location:course_insert.php');
    ?>