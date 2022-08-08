<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reg.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

    form {
        margin: 10px;

    }

    th {
        font-size: 20px;
        color: black;
        background-image: linear-gradient(gray, rgb(248, 245, 233), gray);
    }

    td {
        font-family: cursive;
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

    p {
        background-color: rgba(0, 0, 0, 0.2);
        padding: 5px;
        margin: 15px 0 15px 0;
        font-size: 20px;

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
    <div class="head" style="font-family: cursive; background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('book1.jpg');
         height: 200px;padding-top:50px">
        <img src=" ciulogo.png" alt="" width="120" height="100" class="d-inline-block align-text-left"
            style="padding-left: 5px; padding-top: 0%; margin-top: 0px;">
        <div style="color: white;font-family: cursive;">

            <h1>Chittagong Independent University</h1>
            <p style="padding: 5px;">Lord Advance Me In Knowledge</p>

        </div>
    </div>
    <h1 class="text-center" style="background-color:rgb(3, 3, 88);color:white;margin:0%;padding:5px;">
        Course Offer List</h1>
    <nav class="navbar navbar-expand-lg navbar-light navbar navbar-light"
        style="background-image: linear-gradient(gray,rgb(248, 245, 233),gray);">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="reg_home.php"> <b>HOME</b> </a>
                    </li>
                    <li class="nav-item" style="padding-left: 5px; padding-right: 5px;">
                        <a class="nav-link active" href="add_request.php"><b>ADD REQUEST</b></a>
                    </li>
                    <li class="nav-item" style="padding-left: 5px; padding-right: 5px;">
                        <a class="nav-link active" href="signup.php"><b>SIGNUP</b></a>
                    </li>
                </ul>

            </div>
        </div>

    </nav>
    <div class="container">
        <form action="" method="POST">

            <div style=" text-align:center;border-style: dashed;border-color: black;margin-bottom:10px">
                <p>Enter Your ID</p>
                <input type="number" id="sid" name="sid" placeholder="Student ID" required style=" width: 400px;"><br>
                <p>Enter Your Full Name</p>
                <input type="text" id="name" name="name" placeholder="Full Name" required style=" width: 400px;">
                <br>
                <p>Please select a valid reason</p>

                <select name="reason" id="reason" style="padding: 0 100px 0 35px">
                    <option value="">REASON</option>
                    <option value="Change of Mind">Change of Mind</option>
                    <option value="My friends are not in this course ">My friends are not in this course</option>
                    <option value="Time clash">Time clash</option>
                    <option value="Too much credit">Too much credit</option>
                    <option value="Financial problem">Financial problem</option>
                </select>
            </div>

            <table id="tabledata" class="table table-striped table-hover " style="background:lightgreen;cursor:pointer">
                <tr class="text-white text-center">
                    <th>Select</th>
                    <th>Course</th>
                    <th>Pre-Requisite Course</th>
                    <th>Faculty</th>
                    <th>Section</th>
                    <th>Credit</th>
                    <th>Bill</th>
                    <th>Seat</th>
                    <th>Day</th>
                    <th>Time</th>

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
                
                  $q = "SELECT * FROM `offer_list`";
                  $query = mysqli_query($con, $q);
                
                 
                  while($res = mysqli_fetch_array($query)){
                ?>

                <tr>
                    <td><input type="checkbox" name="sel_check[]" class="form-check-input"
                            value="<?php echo $res['id']; ?>" id="flexCheckDefault">
                    </td>
                    <td><?php echo $res['course']; ?></td>
                    <td><?php echo $res['pre_req']; ?></td>
                    <td><?php echo $res['faculty']; ?></td>
                    <td><?php echo $res['section']; ?></td>
                    <td><?php echo $res['credit']; ?></td>
                    <td><?php echo $res['credit']*4000; ?></td>
                    <td><?php echo $res['seat']; ?></td>
                    <td><?php echo $res['day']; ?></td>
                    <td><?php echo $res['time']; ?></td>

                </tr>
                <?php
                    }
                    ?>

            </table>

            <button type="submit" name="confirm" class="btn-success text-dark h4 text-decoration-none">SUBMIT
            </button>
            <?php 
             if(isset($_POST['confirm'])){

    $all_id = $_POST['sel_check'];
    $all_ids = implode(" ", $all_id);
    foreach($all_id as $value){
    $sq = "UPDATE offer_list SET seat =seat-1 where `id` = '$value'";
    $sq_result = mysqli_query($con, $sq);
    
    $q = "SELECT * FROM `offer_list` where `id` = '$value'";
    $query = mysqli_query($con, $q);
    
     while($res = mysqli_fetch_array($query)){
        $sid = $_POST['sid'];
        $name = $_POST['name'];
        $reason = $_POST['reason'];
        $course = $res['course'];
        $credit = $res['credit'];
        $bill = $res['credit']*4000;
        $day = $res['day'];
    
        $s = "SELECT * FROM `registered` WHERE `id` = '$_POST[sid]' && `name` = '$_POST[name]'";
        $r = mysqli_query($con, $s);
        $num = mysqli_num_rows($r); 
        if($num == 1){
            $sql = "INSERT INTO `ciu` . `drop_request` (sid,name,reason,course,credit,bill,day,time)
            VALUES ('$sid','$name','$reason','$course','$credit','$bill','$day',current_timestamp()) ";
            $result = mysqli_query($con, $sql);
        }
        
            else{
                print("PLEASE INSERT VALID NAME AND ID");
            }
?>



            <?php
                 
                }
                
                ?>
            <?php
        }
        
        ?>

            </table>
    </div>

    <?php
    }
    ?>
    </form>
    </div>
</body>

</html>

</html>