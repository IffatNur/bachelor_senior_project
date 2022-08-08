<?php
include "connection.php";
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="registration.css">

    <title>Chittagong Independent University</title>
  </head>
  <body>
  <h1
        style="text-align: center; background-color: #afafaf; margin: 0%;padding-top: 20px; padding-bottom: 20px; color: black;">
        <a class="navbar-brand" href="#">
            <img src="ciulogo.png" alt="" width="120" height="100" class="d-inline-block align-text-left"
                style="padding-left: 5px; padding-top: 0%; margin-top: 0px;">
        </a>
      <b style="color: black;font-family:cursive;font-size:40px">Chittagong Independent University</b>
    </h1>
   <nav class="navbar navbar-expand-lg navbar-light bg-light ">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
<div class="nav" >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="homelibrary.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="books.php">Books</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="feedback.php">Feedback</a>
      </li>
    </ul>
   </div>
   <div class="nav1">
       <?php
       if(isset($_SESSION['login_user']))
       { ?>
        <ul class="navbar-nav mr-auto">
         <li class="nav-item">
        <a class="nav-link" href="student.php">Student-Information</a>
      </li>
          
           <li class="nav-item">
          <a class="nav-link" href="logout.php"><img src="logout.png" height="30px">Logout</a>
      </li>
      <?php
      }
           else
           {?>
                <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="adminlogin.php"><img src="login.png" height="25px"> Login</a>
      </li>
      
      <li class="nav-item">
          <a class="nav-link" href="registration.php"><img src="user.png" height="30px">Signup</a>
      </li>
        </ul>
         <?php
           }
           ?>
       </div>
   <div class="logo">
       <img src="libraryhome.png" width="50%">
       <h4>ONLINE LIBRARY MANAGEMENT SYSTEM </h4>
   </div>
</nav>
           <section> 
              <div class="box"><br><br><br>
                 <div class="box1">
                      <h1 style="text-align:center; font-size:40px; color: antiquewhite">Library Management System</h1><br><br> 
             <h1 style="text-align:center; font-size:25px; color: antiquewhite;">User Registration Form</h1><br>
                    <form name="Registration" action="" method="post">
                       <div class="login">
                       <input type="text" name="first" placeholder="First Name" required=""><br><br>
                       <input type="text" name="last" placeholder="Last Name" required=""><br><br>
                        <input type="text" name="username" placeholder="Username" required=""> <br><br>
                        <input type="password" name="password" placeholder="Password" required=""><br><br>
                        <input type="text" name="email" placeholder="Email" required=""><br><br>
                        <input type="text" name="contact" placeholder="Phone No" required=""><br><br>
                        <input type="submit" name="submit" value="Sign Up" style="color:black; width:70px; height:30px;"></div>
                    </form>
                  
                     
                 </div>
                  
              </div>
      </section>
      <?php
      if(isset($_POST['submit']))
      {
          $count=0;
          $sql="SELECT username from admin";
          $res=mysqli_query($db,$sql);
          while($row=mysqli_fetch_assoc($res))
          {
              if($row['username']==$_POST['username'])
              {
                  $count=$count+1;
              }
          }
              if($count==0)
         
              {mysqli_query($db,"INSERT INTO `librarian` VALUES('', '$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[contact]');");
        ?>
        <script type="text/javascript">
      alert("Registration Successful");
      </script>
      <?php
      }
          else
          {
                ?> 
            <script type="text/javascript">
      alert("The username already exist.");
      </script> 
           <?php
          }
      }
      ?>
      
       
         <footer>
          <p style="color:black; background:gainsboro; text-align: center; margin-bottom: inherit;">
              <br>
              Email:&nbsp onlinelibrary@gmail.com<br>
              Mobile:&nbsp +8800155*******
          </p>
          
      </footer>   
       
   

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
      </nav>
  </body>
</html>