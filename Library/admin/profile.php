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
            background-color:#a44029fa;;
         
          
        }
        .wrapper{
            width: 300px;
            margin: 0 auto;
            color: white;
            
        }
       </style>
  </head>
    <body>
    <?php include('header.php'); ?>
<div class="container">
    <form action="" method="post">
        <button class="btn btn-default" style="float:right; color:white; background-color:black;  width:70px" name="submit1">Edit
            </button>
        </form>
        <div class="wrapper">
        <?php
            $q=mysqli_query($db,"SELECT * FROM librarian where username='$_SESSION[login_user]';");
            ?>
            <h2 style="text-align:center;"><u>My Profile</u></h2>
            <?php
            $row=mysqli_fetch_assoc($q);
          ?>
          <div style="text-align:center;"><b>Welcome, </b>
          <h4>
              <?php echo $_SESSION['login_user'];
           ?>
          </h4>
          </div>
          <?php
            echo "<b>";
            echo "<table class='table table-bordered' >";
            echo "<tr>";
            echo "<td>";
            echo "<b>First Name:</b>";
            echo "</td>";
            echo "<td>";
            echo $row['first'];
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo "<b> Last Name: </b>";
            echo "</td>";
            echo "<td>";
            echo $row['last'];
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
              echo "<b> User Name: </b>";
            echo "</td>";
            echo "<td>";
            echo $row['username'];
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
             echo "<b> Password: </b>";
            echo "</td>";
            echo "<td>";
            echo $row['password'];
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo "<b> Email: </b>";
            echo "</td>";
            echo "<td>";
             echo $row['email'];
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo "<b> Contact: </b>";
            echo "</td>";
            echo "<td>";
            echo $row['contact'];
            echo "</td>";
            echo "</tr>";
            echo "</table>";
               echo "</b>";
            
            ?>
          
          
          
          
         </div>
</div>
        </nav>
    </body> 
    </html>










