 <?php
    session_start();
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
      $course = $_POST['course'];
      $pre_req = $_POST['pre_req'];
      $faculty = $_POST['faculty'];
      $section = $_POST['section'];
      $credit = $_POST['credit'];
      $bill = $_POST['credit']*4000;
      $seat = $_POST['seat'];
      $day = $_POST['day'];
      $time = $_POST['time'];

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
         <a href="add_student.php" class="w3-bar-item w3-button">ADD NEW STUDENT</a>
         <a href="add_advisor.php" class="w3-bar-item w3-button">ADD NEW ADVISOR</a>
         <a href="signup.php" class="w3-bar-item w3-button ">SIGN UP</a>

     </div>

     <div id="main">
         <div style="background-color:rgb(3, 3, 88);">
             <button id="openNav" class="w3-button w3-xlarge" style="color:white;" onclick="w3_open()">&#9776;</button>
             <div class="w3-container" style="color:white;">
                 <h1 style="font-family: cursive;text-align:center">COURSE OFFER</h1>
             </div>
         </div>

         <div class="row" style="margin:20px;font-size:15px;">
             <form method="POST" style="text-align:left;width: 400px;background:lightblue">
                 <h5 style="margin: 10px 0 0 0"> Please select Course </h5>
                 <input type="radio" id="pre_req3" name="course" value="PHY101: Physics-I" required>
                 <label for="pre_req3">Physics-I</label><br><br>
                 <input type="radio" id="pre_req4" name="course" value="PHY101L: Physics-I Lab" required>
                 <label for="pre_req4">Physics-I Lab</label><br><br>
                 <input type="radio" id="pre_req5" name="course" value="PHY102: Physics-II" required>
                 <label for="pre_req5">Physics-II</label><br><br>
                 <input type="radio" id="pre_req6" name="course" value="PHY102L: Physics-II Lab" required>
                 <label for="pre_req6">Physics-II Lab</label><br><br>
                 <input type="radio" id="pre_req7" name="course" value="none" required>
                 <label for="pre_req7">None</label><br><br>
                 <input type="radio" id="pre_req8" name="course" value="MAT201: Calculus" required>
                 <label for="pre_req8">Calculus</label><br><br>
                 <input type="radio" id="pre_req9" name="course" value="MAT251:Complex Variable & Vector Analysis" required>
                 <label for="pre_req9">Complex Variable & Vector Analysis</label><br><br>
                 <input type="radio" id="pre_req10" name="course" value="MAT303: DIfferrential Equation" required>
                 <label for="pre_req10">DIfferrential Equation</label><br><br>
                 <input type="radio" id="pre_req11" name="course" value="MAT305: Boundary Value Problem" required>
                 <label for="pre_req11">Boundary Value Problem</label><br><br>
                 <input type="radio" id="pre_req12" name="course" value="CCR205: Structured Programming language" required>
                 <label for="pre_req12">Structured Programming language</label><br><br>
                 <input type="radio" id="pre_req13" name="course" value="CCR205L: Structured Programming language Lab" required>
                 <label for="pre_req13">Structured Programming language Lab</label><br><br>
                 <input type="radio" id="pre_req14" name="course" value="CCR207: Data Structure" required>
                 <label for="pre_req14">Data Structure</label><br><br>
                 <input type="radio" id="pre_req15" name="course" value="CCR207L: Data Structure Lab" required>
                 <label for="pre_req15">Data Structure Lab</label><br><br>
                 <input type="radio" id="pre_req16" name="course" value="CCR401L: Database Management System Lab" required>
                 <label for="pre_req16">Database Management System Lab</label><br><br>
                 <input type="radio" id="pre_req17" name="course" value="CSE430: Computer Networks" required>
                 <label for="pre_req17">Computer Networks</label><br><br>
                 <input type="radio" id="pre_req18" name="course" value="CSE430L: Computer Networks Lab" required>
                 <label for="pre_req18">Computer Networks Lab</label><br><br>
                 <input type="radio" id="pre_req19" name="course" value="CSE438: Theory of Computation" required>
                 <label for="pre_req19">Theory of Computation</label><br><br>
                 <input type="radio" id="pre_req20" name="course" value="CSE437: Compilers" required>
                 <label for="pre_req20">Compilers</label><br><br>


                 <h5>Please select Pre-requisite Course</h5>
                 <input type="radio" id="pre_req2" name="pre_req" value="none" required>
                 <label for="pre_req2">None</label><br><br>
                 <input type="radio" id="pre_req3" name="pre_req" value="PHY101: Physics-I" required>
                 <label for="pre_req3">Physics-I</label><br><br>
                 <input type="radio" id="pre_req4" name="pre_req" value="PHY101L: Physics-I Lab" required>
                 <label for="pre_req4">Physics-I Lab</label><br><br>
                 <input type="radio" id="pre_req5" name="pre_req" value="PHY102: Physics-II" required>
                 <label for="pre_req5">Physics-II</label><br><br>
                 <input type="radio" id="pre_req6" name="pre_req" value="PHY102L: Physics-II Lab" required>
                 <label for="pre_req6">Physics-II Lab</label><br><br>
                 <input type="radio" id="pre_req7" name="pre_req" value="none" required>
                 <label for="pre_req7">None</label><br><br>
                 <input type="radio" id="pre_req8" name="pre_req" value="MAT201: Calculus" required>
                 <label for="pre_req8">Calculus</label><br><br>
                 <input type="radio" id="pre_req9" name="pre_req" value="MAT251:Complex Variable & Vector Analysis" required>
                 <label for="pre_req9">Complex Variable & Vector Analysis</label><br><br>
                 <input type="radio" id="pre_req10" name="pre_req" value="MAT303: DIfferrential Equation" required>
                 <label for="pre_req10">DIfferrential Equation</label><br><br>
                 <input type="radio" id="pre_req11" name="pre_req" value="MAT305: Boundary Value Problem" required>
                 <label for="pre_req11">Boundary Value Problem</label><br><br>
                 <input type="radio" id="pre_req12" name="pre_req" value="CCR205: Structured Programming language" required>
                 <label for="pre_req12">Structured Programming language</label><br><br>
                 <input type="radio" id="pre_req13" name="pre_req" value="CCR205L: Structured Programming language Lab" required>
                 <label for="pre_req13">Structured Programming language Lab</label><br><br>
                 <input type="radio" id="pre_req14" name="pre_req" value="CCR207: Data Structure" required>
                 <label for="pre_req14">Data Structure</label><br><br>
                 <input type="radio" id="pre_req15" name="pre_req" value="CCR207L: Data Structure Lab" required>
                 <label for="pre_req15">Data Structure Lab</label><br><br>
                 <input type="radio" id="pre_req16" name="pre_req" value="CCR401L: Database Management System Lab" required>
                 <label for="pre_req16">Database Management System Lab</label><br><br>
                 <input type="radio" id="pre_req17" name="pre_req" value="CSE430: Computer Networks" required>
                 <label for="pre_req17">Computer Networks</label><br><br>
                 <input type="radio" id="pre_req18" name="pre_req" value="CSE430L: Computer Networks Lab" required>
                 <label for="pre_req18">Computer Networks Lab</label><br><br>
                 <input type="radio" id="pre_req19" name="pre_req" value="CSE438: Theory of Computation" required>
                 <label for="pre_req19">Theory of Computation</label><br><br>
                 <input type="radio" id="pre_req20" name="pre_req" value="CSE437: Compilers" required>
                 <label for="pre_req20">Compilers</label><br><br>

                 <h5> Please Select Faculty</h5>
                 <select name="faculty" id="faculty" style="padding: 0 100px 0 35px">
                     <option value="">Faculty</option>
                     <option value="Dr. Aseef Iqbal">Dr. Aseef Iqbal</option>
                     <option value="Dr. Mohammad Rezaul Karim">Dr. Mohammad Rezaul Karim</option>
                     <option value="Md. Sajjatul Islam">Md. Sajjatul Islam</option>
                     <option value="Atiqur Rahman">Atiqur Rahman</option>
                     <option value="Amran Haroon">Amran Haroon</option>
                     <option value="Risul Islam Rasel">Risul Islam Rasel
                     </option>
                     <option value="Golap Kanti Dey">Golap Kanti Dey</option>
                     <option value="Md. Rabiul Hossain">Md. Rabiul Hossain</option>
                     <option value="Habibur Rahman">Habibur Rahman
                     </option>
                     <option value="Ms. Samia Muntaha">Ms. Samia Muntaha</option>
                 </select>

                 <h5>Please Select Section</h5>

                 <input type="radio" id="s1" name="section" value="section-1" required>
                 <label for="day1">Section-01</label><br>
                 <input type="radio" id="s2" name="section" value="section-2" required>
                 <label for="day2">Section-02</label><br>
                 <input type="radio" id="s3" name="section" value="section-3" required>
                 <label for="day2">Section-03</label><br><br>

                 <h5>Please Select Credit Hour</h5>

                 <input type="radio" id="c1" name="credit" value="1" required>
                 <label for="">Credit 1</label><br>
                 <input type="radio" id="c3" name="credit" value="3" required>
                 <label for="">Credit 3</label><br><br>

                 <h5>Please Select Total Seats to Offer</h5>
                 <input type="radio" id="seat1" name="seat" value="20" required>
                 <label for="seat1">20 Seats</label><br>
                 <input type="radio" id="seat2" name="seat" value="40" required>
                 <label for="seat2">40 Seats</label><br>
                 <input type="radio" id="seat3" name="seat" value="60" required>
                 <label for="seat3">60 Seats</label><br><br>

                 <h5>Please Select Days</h5>
                 <input type="radio" id="day1" name="day" value="ST" required>
                 <label for="day1">ST &nbsp</label><br>
                 <input type="radio" id="day2" name="day" value="MW" required>
                 <label for="day2">MW</label><br>
                 <input type="radio" id="day2" name="day" value="R" required>
                 <label for="day2">R &nbsp&nbsp&nbsp</label><br><br>

                 <h5>Please Select Time</h5>
                  <input type="radio" id="time1" name="time" value="08:00 - 09:30" required>
                 <label for="time">08:00 - 09:30 </label>
                 <input type="radio" id="time2" name="time" value="09:30 - 11:00" required>
                 <label for="time">09:30 - 11:00</label><br>
                 <input type="radio" id="time3" name="time" value="11:00 - 12:30" required>
                 <label for="time">11:00 - 12:30 &nbsp</label>
                 <input type="radio" id="time4" name="time" value="12:30 - 14:00" required>
                 <label for="time">12:30 - 14:00</label><br>
                 <input type="radio" id="time5" name="time" value="14:00 - 15:30" required>
                 <label for="time">14:00 - 15:30 &nbsp</label>
                 <input type="radio" id="time6" name="time" value="15:30 - 17:00" required>
                 <label for="time">15:30 - 17:00</label><br><br>


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
                             <button class="btn ">
                                 <a href=" update.php?id=<?php echo $res['id']; ?>" class="text-success"><i
                                         class="fa fa-pencil-square-o" aria-hidden="true"
                                         style="font-size:25px"></i></a>
                             </button>
                         </td>
                         <td>
                             <button class=" btn">
                                 <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-danger"><i
                                         class="fa fa-trash" aria-hidden="true" style="font-size:25px"></i></a>
                             </button>
                         </td>
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