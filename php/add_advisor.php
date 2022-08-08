<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require '../mail/src/Exception.php';
    require '../mail/src/PHPMailer.php';
    require '../mail/src/SMTP.php';
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
     if(isset($_POST['done'])){
      $id = $_POST['id'];
      $name = $_POST['name'];
      $username = $_POST['username'];
      $dept = $_POST['dept'];
      $email = $_POST['email'];
      

          if(empty($_POST['id']) ||  empty($_POST['name']) || empty($_POST['dept']) || empty($_POST['email']))
          {
          }
          else{
            $password = rand(22222,99999);
            $sql = "INSERT INTO `ciu` . `advisor` (name,id,dept,username,email,password) 
                VALUES ('$name','$id','$dept','$username','$email','$password')";
                $result = mysqli_query($con, $sql);
                $mail = new PHPMailer(true);
                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'server222.web-hosting.com';                     //Set the SMTP server to send              through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'ciu@dreamtechnology.xyz';                     //SMTP username
                    $mail->Password   = 'oS~rjDSSX=Gc';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you                have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('ciu@dreamtechnology.xyz', 'Mailer');
                    $mail->addAddress('dreamtechnology2050@gmail.com', 'Fahim Hasan');     //Add a recipient
                    $mail->addReplyTo('ciu@dreamtechnology.xyz', 'Information');
                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Your Login Credentials at CIU';
                    $mail->Body    = 'Email: '.$email.' & password: '.$password;
                    

                    $mail->send();
                    
                } catch (Exception $e) {
                    //
                }
                header('location:add_advisor.php');
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
    <div id="main">
        <div style="background-color:rgb(3, 3, 88);">
            <nav class="navbar navbar-expand-lg navbar-light navbar navbar-light"
                style="background-image: linear-gradient(gray,rgb(248, 245, 233),gray);">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="course_insert.php"> <b>Home</b>
                                </a>
                            </li>
                            <li class="nav-item" style="padding-left: 5px; padding-right: 5px;">
                                <a class="nav-link active" href="signup.php"><b>Signup</b></a>
                            </li>
                        </ul>

                    </div>
                </div>

            </nav>
            <div class="w3-container" style="color:white;">
                <h1 style="font-family: cursive;text-align:center">ADD NEW STUDENT</h1>
            </div>
        </div>

        <div class="row" style="margin:20px;font-size:15px;">
            <form method="POST" style="text-align:left;width: 400px;background:lightblue">
                <h5>Please Insert Advisor ID</h5>
                <input style="width: 380px;margin-top:10px" type="number" id="id" name="id" required>

                <h5 style="margin: 10px 0 0 0"> Please Insert Advisor Full Name </h5>
                <input style="width: 380px;margin-top:10px" type="text" id="name" name="name" required>

                <h5 style="margin: 10px 0 0 0"> Please Insert Advisor User Name </h5>
                <input style="width: 380px;margin-top:10px" type="text" id="name" name="username" required>

                <h5>Please Select Department</h5>

                <input type="radio" id="CSE" name="dept" value="CSE" required>
                <label for="">CSE</label><br>
                <input type="radio" id="EEE" name="dept" value="EEE" required>
                <label for="">EEE</label><br>
                <input type="radio" id="ETE" name="dept" value="ETE" required>
                <label for="day">ETE</label><br><br>

                <h5 style="margin: 10px 0 0 0"> Please Insert Advisor Email </h5>
                <input style="width: 380px;margin-top:10px" type="text" id="email" name="email" required><br><br>

                <button type="submit" value="SUBMIT" name="done"
                    style=" background-color:rgb(3, 3, 88);color:white;padding:10px">
                    Submit</button>

                 
                <button type="reset" style="background-color:rgb(3, 3, 88);color:white;padding:10px 15px 10px 15px">
                    Reset</button><br><br>
            </form>
            <div style="text-align:center;width:800px">

                <table id="tabledata" class="table table-striped table-hover" style="width:1000px">
                    <tr class=" text-black text-center"
                        style="font-size:15px;background-image: linear-gradient(gray,rgb(248, 245, 233),gray);">

                        <th>Advisor ID</th>
                        <th>Advisor NAME</th>
                        <th>DEPT</th>
                        <th>EMAIL</th>
                    </tr>
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
                        
                        $q = "SELECT * FROM `advisor`";
                        $query = mysqli_query($con, $q);
                        while($res = mysqli_fetch_array($query)){
                        ?>
                    <tr>

                        <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['name']; ?></td>
                        <td><?php echo $res['dept']; ?></td>
                        <td><?php echo $res['email']; ?></td>
                    </tr>
                    <?php     
                            }
                            ?>

                </table>
                <script type=" text/javascript">
                $(document).ready(function() {
                    $('#tabledata').DataTable();
                })
                </script>
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
</body>

</html>