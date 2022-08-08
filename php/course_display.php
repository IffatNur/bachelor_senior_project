<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reg.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="js/index.js">
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

    input,
    label {
        text-align: center;
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

    <div class="container">

        <div class="col-lg-12">
            <h1 class="text-center">Course Offer List</h1>
            <table id="tabledata" class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">

                    <th>Course</th>
                    <th>Pre-Requisite Course</th>
                    <th>Faculty</th>
                    <th>Section</th>
                    <th>Credit</th>
                    <th>Seat</th>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Update</th>
                    <th>Delete</th>
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

                    <td><?php echo $res['course']; ?></td>
                    <td><?php echo $res['pre_req']; ?></td>
                    <td><?php echo $res['faculty']; ?></td>
                    <td><?php echo $res['section']; ?></td>
                    <td><?php echo $res['credit']; ?></td>
                    <td><?php echo $res['seat']; ?></td>
                    <td><?php echo $res['day']; ?></td>
                    <td><?php echo $res['time']; ?></td>
                    <td>
                        <button class="btn-primary btn ">
                            <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a>
                        </button>
                    </td>
                    <td>
                        <button class="btn-danger btn">
                            <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a>
                        </button>
                    </td>
                </tr>
                <?php     
                }
                ?>

            </table>
            <button class="btn-primary "><a href="course_insert.php" class="text-dark h4 text-decoration-none">Back to
                    Home</a></button>
        </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#tabledata').DataTable();
    })
    </script>
</body>

</html>