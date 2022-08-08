<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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


    h2 {
        text-align: center;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 40%;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .container1 {
        padding: 2px 16px;
    }
    </style>
</head>

<body>
    <div class=" head"
        style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('book1.jpg');height:250px;padding-top:60px">
        <img src="ciulogo.png" alt="" width="120" height="100" class="d-inline-block align-text-left"
            style="padding-left: 5px; padding-top: 0%; margin-top: 0px;">
        <div style="color: white;font-family:cursive">
            <h1>Chittagong Independent University</h1>
            <p style=" padding: 5px;">Lord Advance Me In Knowledge</p>
        </div>
    </div>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none;font-family: cursive"
        id="mySidebar">
        <button class="w3-bar-item w3-button w3-large" style="position:sticky;background-color:gray"
            onclick="w3_close()">Close
            &times;</button>

        <a href="add_request.php" class="w3-bar-item w3-button">ADD Request</a>
        <a href="drop_request.php" class="w3-bar-item w3-button">DROP Request</a>
        <a href="signup.php" class="w3-bar-item w3-button">Sign Up</a>

    </div>

    <div id="main">

        <div style="background-color:rgb(3, 3, 88);">
            <button id="openNav" class="w3-button w3-xlarge" style="color:white;" onclick="w3_open()">&#9776;</button>
            <div class="w3-container" style="color:white;">
                <h1 style="font-family:cursive;text-align:center">COURSE MANAGEMENT SYSTEM</h1>
            </div>
        </div>
        <div class="container1"
            style="padding: 80px;display:inline-flex;text-align:center;padding-right:20%;padding-left:20%;">
            <div class="card m-3">
                <img src="book1.jpg" alt="Avatar" style="width:100%;height:150px;padding:10px">
                <div class="container1">
                    <h4><b>Course Offer List</b></h4>
                    <button class="btn-primary "><a href="course_offer.php"
                            class="text-light h5 text-decoration-none">Click Here</a></button>
                </div>
            </div>
            <div class="card m-3">
                <img src="book2.jpg" alt="Avatar" style="width:100%;height:150px;padding:10px">
                <div class="container1">
                    <h4><b>Course Registration</b></h4>
                    <button class="btn-primary "><a href="course_reg.php"
                            class="text-light h5 text-decoration-none">Click Here</a></button>
                </div>
            </div>
            <div class="card m-3">
                <img src="money.jpeg" alt="Avatar" style="width:100%;height:150px;padding:10px">
                <div class="container1">
                    <h4><b>Payment Method</b></h4>
                    <button class="btn-primary "><a href="" class="text-light h5 text-decoration-none">Click
                            Here</a></button>
                </div>
            </div>

        </div>
        <footer>
            <p style="width: 100%;border-top: 1px solid black; height: 100px; 
                 text-align: center;font-size: 13px;padding: 10px; background-color:rgb(3, 3, 88); color: white;">
                Minhaj Complex, 12, Jamal Khan Road, Chattogram, Bangladesh <br>
                <i class="fa fa-mobile"></i>+880-1946973778,<i class="fa fa-mobile"></i> +880-1844216660 ,
                <i class="fa fa-phone"></i>+88-031-622946, 611262, 636484,<br>
                <i class="fa fa-phone"></i>+88-02333352926 ,
                <i class="fa fa-phone"></i>+88-031-611263 , <a href="contact.html" style="color: white;"> <i
                        class="fa fa-envelope"></i>Contact Info</a>
            </p>

        </footer>
    </div>

    </div>



    <script>
    function w3_open() {
        document.getElementById("main").style.marginLeft = "25%";
        document.getElementById("mySidebar").style.width = "25%";
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("openNav").style.display = 'none';
    }

    function w3_close() {
        document.getElementById("main").style.marginLeft = "0%";
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("openNav").style.display = "inline-block";
    }
    </script>

</body>

</html>