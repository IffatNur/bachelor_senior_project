     <?php 
      
    session_start();

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
     $id = $_GET['id'];
     if(isset($_POST['done'])){
     $course = $_POST['course'];
     $pre_req = $_POST['pre_req'];
     $faculty = $_POST['faculty'];
     $section = $_POST['section'];
     $seat = $_POST['seat'];
     $day = $_POST['day'];
     $time = $_POST['time'];

     if(empty($_POST['course']) || empty($_POST['pre_req']) || empty($_POST['faculty']) || empty($_POST['section'])
     || empty($_POST['seat']) || empty($_POST['day']) ||empty($_POST['time']))
     {
     echo "invalid data";
     }

     else{
     $sql = "UPDATE `offer_list` set id = $id, pre_req='$pre_req', faculty = '$faculty',section='$section',
     seat=$seat,day='$day', time= '$time' where id= $id";
     $result = mysqli_query($con, $sql);
     header('location:course_insert.php');

     }

     }
     ?>
     <!DOCTYPE html>
     <html lang="en">

     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet"
             href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
             integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
             crossorigin="anonymous">
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

         <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none;font-family: cursive"
             id="mySidebar">
             <button class="w3-bar-item w3-button w3-large" style="background-color:gray" onclick="w3_close()">Close
                 &times;</button>
             <a href="#" class="w3-bar-item w3-button">Offer list</a>
             <a href="#" class="w3-bar-item w3-button">Sign Up</a>

         </div>

         <div id="main">

             <div style="background-color:rgb(3, 3, 88);">
                 <button id="openNav" class="w3-button w3-xlarge" style="color:white;"
                     onclick="w3_open()">&#9776;</button>
                 <div class="w3-container" style="color:white;">
                     <h1 style="font-family: cursive;text-align:center">Update Course</h1>
                 </div>
             </div>
             <div class="container" style="text-align:center;padding-right:20%;padding-left:20%;">
                 <form method="POST" style=" text-align:center;font-family: cursive;font-size:20px;width: 800px;">
                     <p>
                     <p style="background-color:rgba(0,0,0,0.1)"> Please select Course </p>
                     <select name="course" id="course" style="padding: 0 50px 0 50px">
                         <option value="">Courses</option>
                         <option value="PHY101: Physics-I">Physics-I</option>
                         <option value="PHY101L: Physics-I Lab">Physics-I Lab</option>
                         <option value="PHY102: Physics-II">Physics-II</option>
                         <option value="PHY102L: Physics-II Lab">Physics-II Lab</option>
                         <option value="MAT201: Calculus">Calculus</option>
                         <option value="MAT251:Complex Variable & Vector Analysis">Complex Variable & Vector Analysis
                         </option>
                         <option value="MAT303: DIfferrential Equation">DIfferrential Equation</option>
                         <option value="MAT305: Boundary Value Problem">Boundary Value Problem</option>
                         <option value="CCR205: Structured Programming language">Structured Programming language
                         </option>
                         <option value="CCR205L: Structured Programming language Lab">Structured Programming language
                             Lab
                         </option>
                         <option value="CCR207: Data Structure">Data Structure</option>
                         <option value="CCR207L: Data Structure Lab">Data Structure Lab</option>
                         <option value="CCR401: Database Management System">Database Management System</option>
                         <option value="CCR401L: Database Management System Lab">Database Management System Lab</option>
                         <option value="CSE430: Computer Networks">Computer Networks</option>
                         <option value="CSE430L: Computer Networks Lab">Computer Networks Lab</option>
                         <option value="CSE438: Theory of Computation">Theory of Computation</option>
                         <option value="CSE437: Compilers">Compilers</option>
                     </select>
                     <input type="button" value="Select" onclick="getOption()"></input>

                     </p>

                     <p>
                         The Course Code is =
                         <span class="output"></span>
                     </p>

                     <p>
                     <p style="background-color:rgba(0,0,0,0.1)"> Please select Pre-requisite Course</p>
                     <select name="pre_req" id="pre_req" style="padding: 0 50px 0 50px">
                         <option value="">Courses</option>
                         <option value="none">None</option>
                         <option value="PHY101: Physics-I">Physics-I</option>
                         <option value="PHY101L: Physics-I Lab">Physics-I Lab</option>
                         <option value="PHY102: Physics-II">Physics-II</option>
                         <option value="PHY102L: Physics-II Lab">Physics-II Lab</option>
                         <option value="MAT201: Calculus">Calculus</option>
                         <option value="MAT251:Complex Variable & Vector Analysis">Complex Variable & Vector Analysis
                         </option>
                         <option value="MAT303: DIfferrential Equation">DIfferrential Equation</option>
                         <option value="MAT305: Boundary Value Problem">Boundary Value Problem</option>
                         <option value="CCR205: Structured Programming language">Structured Programming language
                         </option>
                         <option value="CCR205L: Structured Programming language Lab">Structured Programming language
                             Lab
                         </option>
                         <option value="CCR207: Data Structure">Data Structure</option>
                         <option value="CCR207L: Data Structure Lab">Data Structure Lab</option>
                         <option value="CCR401: Database Management System">Database Management System</option>
                         <option value="CCR401L: Database Management System Lab">Database Management System Lab</option>
                         <option value="CSE430: Computer Networks">Computer Networks</option>
                         <option value="CSE430L: Computer Networks Lab">Computer Networks Lab</option>
                         <option value="CSE438: Theory of Computation">Theory of Computation</option>
                         <option value="CSE437: Compilers">Compilers</option>
                     </select>
                     <input type="button" value="Select" onclick="getOption1()"></input>
                     </p>
                     <p>
                         The Course Code is =
                         <span class="output1"></span>
                     </p>
                     <p style="background-color:rgba(0,0,0,0.1)"> Please select Faculty</p>
                     <select name="faculty" id="faculty" style="padding: 0 140px 0 140px">
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
                     </p>
                     <p style="background-color:rgba(0,0,0,0.1)">Please select section</p>

                     <input type="radio" id="s1" name="section" value="section-1">
                     <label for="day1">Section-01</label><br>
                     <input type="radio" id="s2" name="section" value="section-2">
                     <label for="day2">Section-02</label><br>
                     <input type="radio" id="s3" name="section" value="section-3">
                     <label for="day2">Section-03</label><br><br>

                     <p style="background-color:rgba(0,0,0,0.1)">Please select total seats to offer</p>
                     <input type="radio" id="seat1" name="seat" value="20">
                     <label for="seat1">20 Seats</label><br>
                     <input type="radio" id="seat2" name="seat" value="40">
                     <label for="seat2">40 Seats</label><br>
                     <input type="radio" id="seat3" name="seat" value="60">
                     <label for="seat3">60 Seats</label><br><br>

                     <p style="background-color:rgba(0,0,0,0.1)">Please select Days</p>
                     <input type="radio" id="day1" name="day" value="ST">
                     <label for="day1">ST &nbsp</label><br>
                     <input type="radio" id="day2" name="day" value="MW">
                     <label for="day2">MW</label><br>
                     <input type="radio" id="day2" name="day" value="R">
                     <label for="day2">R &nbsp&nbsp&nbsp</label><br><br>

                     <p style="background-color:rgba(0,0,0,0.1)">Please select Time</p>
                      <input type="radio" id="time1" name="time" value="08:00 - 09:30">
                     <label for="time">08:00 - 09:30 </label>
                     <input type="radio" id="time2" name="time" value="09:30 - 11:00">
                     <label for="time">09:30 - 11:00</label><br>
                     <input type="radio" id="time3" name="time" value="11:00 - 12:30">
                     <label for="time">11:00 - 12:30 &nbsp</label>
                     <input type="radio" id="time4" name="time" value="12:30 - 14:00">
                     <label for="time">12:30 - 14:00</label><br>
                     <input type="radio" id="time5" name="time" value="14:00 - 15:30">
                     <label for="time">14:00 - 15:30 &nbsp</label>
                     <input type="radio" id="time6" name="time" value="15:30 - 17:00">
                     <label for="time">15:30 - 17:00</label><br><br>

                      <button type="submit" value="submit" name="done"
                         style=" background-color:rgb(3, 3, 88);color:white;padding:10px">
                         Update</button>
                     <button type="reset"
                         style="background-color:rgb(3, 3, 88);color:white;padding:10px 15px 10px 15px">
                         Reset</button><br><br>
                 </form>

             </div>
             <footer>
                 <p style="width: 1519px;border-top: 1px solid black; height: 100px; 
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

         function valid() {

         }
         </script>


     </body>

     </html>