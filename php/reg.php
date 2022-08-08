 <?php 
  session_start();
  
  ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="reg.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <link rel="stylesheet" href="index.js">
     <title>Chittagong Independent University</title>
 </head>

 <body style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('front.jpg');">
     <div class="head" style="background-color: rgb(3, 3, 88);">
         <img src="ciulogo.png" alt="" width="120" height="100" class="d-inline-block align-text-left"
             style="padding-left: 5px; padding-top: 0%; margin-top: 0px;">
         <div style="color: white;">
             <h1>Chittagong Independent University</h1>
             <p style="padding: 5px;">Lord Advance Me In Knowledge</p>
         </div>
     </div>
     <nav class="navbar navbar-expand-lg navbar-light">
         <div class="container-fluid">

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="#"><b> Home</b></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="#"><b> Course Available</b></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="#"><b> Course Reg.</b></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="#"><b> Home</b></a>
                     </li>
                 </ul>

             </div>
         </div>
     </nav>
     <div class="container" style="width: 600px;">
         <form name="form1" class="red" method="POST" action="reg.php">
             <h2 style="text-align: center;"> Registration</h2>
             <label>Enter Your Full Name</label>
             <input type="text" id="name" name="name" placeholder="Full Name" required><br />
             <label>Enter Your ID</label>
             <input type="number" id="id" name="id" placeholder="1710XXXX" required><br />
             <label>Enter Password</label>
             <input type="password" id="pass" name="pass" required><br />

             <button class="btn-primary" name="submit" type="submit"
                 onclick="idnumber(document.form1.id)">Submit</button>
             <button class="btn-primary" type="reset">Reset</button>
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
      $id = $_POST['id'];
      $name = $_POST['name'];
      $pass = $_POST['pass'];
       
      $sql = "INSERT INTO `ciu` . `student` (pass) VALUES ('$pass') where `id`= '$_POST[id]' && `name`= '$_POST[name]'";
      $result = mysqli_query($con, $sql);
  
     }
     ?>
     </div>
     <script>
     function idnumber(inputtxt) {
         var idno = /^\d{8}$/;
         if (inputtxt.value.match(idno)) {
             return true;
         } else {
             alert("Not a valid ID");
             return false;
         }
     }
     </script>

 </body>

 </html>