<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/advising.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="js/index.js">
    <title>Chittagong Independent University</title>
    <style>
    div.head {
        justify-content: center;
        margin: 0%;
        padding: 20px;
        color: black;
        display: flex;
    }

    nav {
        background-image: linear-gradient(gray, white, gray);
        font-size: 20px;
    }

    form.login {
        background-image: linear-gradient(to top left, navy, orange);
        text-align: left;
        display: inline-block;
        font-size: 20px;
        padding: 30px;
        margin: 100px 0 0 500px;
        border-radius: 5px;
        border-color: solid;
        color: white;
    }

    a:hover {
        background-color: white;
    }

    h2 {
        text-align: center;
    }
    </style>
</head>

<body style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('front.jpg');">
    <div class="head" style="background-color: rgb(3, 3, 88)">
        <img src="ciulogo.png" alt="" width="120" height="100" class="d-inline-block align-text-left"
            style="padding-left: 5px; padding-top: 0%; margin-top: 0px;">
        <div style="color: white;">
            <h1>Chittagong Independent University</h1>
            <p style="padding: 5px;">Lord Advance Me In Knowledge</p>
        </div>
    </div>

    <form name="form1" class="login" action="" method="POST" style=" margin-bottom: 100px;">
        <h2> Advisor login</h2>
        <label for="name" style="padding: 0 5px 5px 0;">Username</label>
        <input type="text" name="name" id="name" placeholder="Enter Username"
            style="padding: 5px;width: 300px; margin: 20px 0 5px 0;" required><br>

        <label for="id" style="padding: 0 75px 5px 0;">ID</label>
        <input type="number" name="id" id="id" placeholder="Enter ID" style=" padding: 5px; width: 300px;
         margin: 5px 0 10px 0;" required><br>

        <span id="message" style="color:red;margin-bottom: 10px;"> </span><br>

        <input type="submit" name="submit" value=" login" onclick="Validate()" style="padding: 5px; width: 200px; font-size: 20px;border-radius: 5px; 
                background-image: linear-gradient(gray,white,gray);">

        <input type="reset" value="Cancel" style="padding: 5px; width: 200px; font-size: 20px;border-radius: 5px; 
                background-image: linear-gradient(gray,white,gray);">


    </form>

    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "ciu";

    $con = mysqli_connect($server,$username,$password,$db);

    if(!$con){
    die("Connection failed" . mysqli_connect_error());
    }
    else{}
    


if(isset($_POST['submit'])){
$name = $_POST['name'];
$id = $_POST['id'];


    $s = "SELECT * from `advisor` WHERE `id` = '$id' && `name` = '$name'";
    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);
    
    if($num == 1){
    $_SESSION['advisor_name'] = $name;
    header('location:advisor_home.php');
    }
    else{  
    header('location:advisor_login.php');
    }
}
    ?>
</body>

</html>