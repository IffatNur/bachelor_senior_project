
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
        .srch{
            padding-left: 1000px;
           
        }
      </style>
  </head>    
    <body>
       <h1
        style="text-align: center; background-color:#afafaf; margin: 0%;padding-top: 20px; padding-bottom: 20px; color: black;">
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
       <div class="srch">
           <form class="navbar-form" method="post" name="form1">
                   <input type="text" name="search" placeholder="Student Username.." required="">
                <button style="background-color:#e14444" type="submit" name="submit">search
                       <span class="glyphicon glyphicon-search"></span>
               </button>
           </form>
       </div>
        <h2>List of Students</h2>
        <?php
        if(isset($_POST['submit']))
        {
            $q=mysqli_query($db,"SELECT first,last,username,id,email,contact FROM `student` where username like '%$_POST[search]%'");
            if(mysqli_num_rows($q)==0)
            {
                echo "Sorry!No student found with that username.Try searching again";
            }
            else {
                 echo "<table class='table table-bordered table-hover'>";
            echo "<tr style='background-color:#e14444;'>";
        echo"<th>"; echo "First name"; echo"</th>";
        echo"<th>"; echo "Last name"; echo"</th>";
        echo"<th>"; echo "Username"; echo"</th>";
        echo"<th>"; echo "Id"; echo"</th>";
        echo"<th>"; echo "Email"; echo"</th>";
        echo"<th>"; echo "Contact"; echo"</th>";
        echo "</tr>";
        
        while($row=mysqli_fetch_assoc($q))
        {
            echo "<tr>";
            
            echo "<td>"; echo $row['first']; echo "</td>";
            echo "<td>"; echo $row['last']; echo "</td>";
            echo "<td>"; echo $row['username']; echo "</td>";
            echo "<td>"; echo $row['id']; echo "</td>";
            echo "<td>"; echo $row['email']; echo "</td>";
            echo "<td>"; echo $row['contact']; echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
            }
        }
        else{$res=mysqli_query($db,"SELECT first,last,username,id,email,contact FROM `student`;");
            echo "<table class='table table-bordered table-hover'>";
            echo "<tr style='background-color:#e14444;'>";
        echo"<th>"; echo "First name"; echo"</th>";
        echo"<th>"; echo "Last name"; echo"</th>";
        echo"<th>"; echo "Username"; echo"</th>";
        echo"<th>"; echo "Id"; echo"</th>";
        echo"<th>"; echo "Email"; echo"</th>";
        echo"<th>"; echo "Contact"; echo"</th>";
        echo "</tr>";
        
        while($row=mysqli_fetch_assoc($res))
        {
            echo "<tr>";
            
            echo "<td>"; echo $row['first']; echo "</td>";
            echo "<td>"; echo $row['last']; echo "</td>";
            echo "<td>"; echo $row['username']; echo "</td>";
            echo "<td>"; echo $row['id']; echo "</td>";
            echo "<td>"; echo $row['email']; echo "</td>";
            echo "<td>"; echo $row['contact']; echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
            
        }
        
        
        
        
            ?>
        
        
        
        
        
        </nav>
    </body>
    
</html>