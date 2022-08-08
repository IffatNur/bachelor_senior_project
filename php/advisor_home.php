<?php
    session_start();
    if(isset($_SESSION['advisor_name'])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ciu";
        $advisor = $_SESSION['advisor_name'];
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM student WHERE advisor='$advisor'";
        $result = $conn->query($sql);
        $conn->close();
    }
?>
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
    <title>Chittagong Independent University</title>
    <style>
    body {
        font-size: 15px;
    }

    div.head {
        justify-content: center;
        margin: 0%;
        color: black;
        display: flex;
    }

    form.login {
        background-image: linear-gradient(to top left, navy, orange);
        text-align: left;
        display: inline-block;
        font-size: 20px;
        border-radius: 5px;
        border-color: solid;
        color: white;
    }

    h2 {
        text-align: center;
    }

    tr {
        font-size: 13px;
    }

    label {
        text-align: center;
        margin: 10px 0 0 0;
    }

    select {
        margin: 15px 0 15px 0;
    }

    a {
        text-decoration: none;
    }

    form {
        border-style: dashed;
        border-color: gray;
        padding: 10px;
    }

    table {
        border: 2px solid;
    }

    h5 {

        padding: 2px;
        width: 380px;
        background-color: rgba(0, 0, 0, 0.1);
        border-style: outset;
    }

    img {
        width: 100px;
        height: 100px;
        background-color: rgba(0, 0, 0, 0.1);
        border-radius: 60px;
        color: white;
        animation: mymove 6s infinite;
    }

    @keyframes mymove {
        50% {
            box-shadow: 10px 20px 30px navy;
        }
    }
    </style>
</head>

<body>

    <?php 
        //course add
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
     if(isset($_POST['submit'])){
      $name = $_POST['name'];
$id = $_POST['id'];

          if(empty($_POST['course']) ||  empty($_POST['pre_req']) || empty($_POST['faculty']) || empty($_POST['section'])
          ||  empty($_POST['credit']) || empty($_POST['seat']) || empty($_POST['day']) ||empty($_POST['time']))
          {
           
          }
          
          else{
            $sql = "INSERT INTO `ciu` . `offer_list` (course,pre_req,faculty, section,credit,bill,seat,day,time) 
                VALUES ('$course','$pre_req','$faculty','$section','$credit','$bill','$seat','$day','$time')";
                $result = mysqli_query($con, $sql);
                header('location:course_insert.php');
               
              }
    
    } 
    ?>
    <div class="head" style="font-family: cursive; background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('book1.jpg');
         height: 200px;padding-top:50px">
        <img src=" ciulogo.png" alt="" width="120" height="100" class="d-inline-block align-text-left"
            style="padding-left: 5px; padding-top: 0%; margin-top: 0px;">
        <div style="color: white;font-family: cursive;">

            <h1>Chittagong Independent University</h1>
            <p style="padding: 5px;">Lord Advance Me In Knowledge</p>

        </div>
    </div>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none;font-family: cursive"
        id="mySidebar">
        <button class="w3-bar-item w3-button w3-large" style="position:sticky;background-color:gray"
            onclick="w3_close()">Close
            &times;</button>

        <a href="drop.php" class="w3-bar-item w3-button">DROP COURSE</a>
        <a href="add.php" class="w3-bar-item w3-button">ADD COURSE</a>
        <a href="view_drop_request.php" class="w3-bar-item w3-button">VIEW DROP REQUEST</a>
        <a href="view_add_request.php" class="w3-bar-item w3-button">VIEW ADD REQUEST</a>
        <a href="signup.php" class="w3-bar-item w3-button ">SIGN UP</a>

    </div>

    <div id="main">
        <div style="background-color:rgb(3, 3, 88);">
            <button id="openNav" class="w3-button w3-xlarge" style="color:white;" onclick="w3_open()">&#9776;</button>
            <div class="w3-container" style="color:white;">
                <h1 style="font-family: cursive;text-align:center">MY STUDENTS</h1>
            </div>
        </div>
        <div>
            <h4 class="text-center">Students List</h4>
            <br>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                <?php if(isset($_SESSION['advisor_name'])){ ?>
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">Contact</th>
    </tr>
  </thead>
  <tbody>
    <?php 
   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {  
   ?>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['username']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['contact']; ?></td>
    </tr>
    <?php   }
  } else {
    echo "0 results";
  } ?>
  </tbody>
</table>
<?php } ?>
                    </div>
                    <div class="col-md-2"></div>
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





    <script>
    function getOption() {
        selectElement = document.querySelector('#course');
        output = selectElement.value;
        document.querySelector('.output').textContent = output;
    }

    function getOption1() {
        selectElement = document.querySelector('#pre_req');
        output = selectElement.value;
        document.querySelector('.output1').textContent = output;
    }

    function w3_open() {
        document.getElementById("main").style.marginLeft = "15%";
        document.getElementById("mySidebar").style.width = "15%";

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