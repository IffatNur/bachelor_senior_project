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
    <style type="text/css">
        body{
           height:650px;
            background-image:url("passpic.jpg");
            background-repeat: round;
          }
        .wrapper
        {
            width: 520px;
            height: 410px;
            margin:30px auto;
            background-color: black;
            opacity: 0.8;
            padding: 27px 15px;
        }
        .form-control{
            width: 300px;
        }
       
      </style>
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
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="student.php">Student-Info</a>
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
<div class="wrapper">
    <div style="">
     <h1 style="text-align:center; font-size:40px; color: antiquewhite">Change Your Password</h1><br><br> 
   
     </div>
     <div style="padding-left:30px;">
     <form action="" method="post">
        <input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
        <input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
        <input type="text" name="password" class="form-control" placeholder="New Password" required=""><br>
        
    <button class="btn btn-default" type="submit" name="submit"  style="color:white; background-color:red;">Update</button>
         
     </form>
    </div> 
</div>
<?php
       if(isset($_POST['submit']))
       {
           if(mysqli_query($db,"UPDATE librarian SET password='$_POST[password]' WHERE username='$_POST[username]' AND email='$_POST[email]' ;"))
           
       {
       ?>
       <script type="text/javascript">
       alert("The Password Updated Successfully.");
       </script>
       <?php
         }
         }
       ?>
        </nav>
     
    </body>
</html>








