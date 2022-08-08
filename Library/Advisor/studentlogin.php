<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="studentlogin.css">

    <title>Chittagong Independent University</title>
  </head>
  <body>
  <?php include('header.php') ?>
           <section> 
              <div class="box"><br><br><br>
                 <div class="box1">
                      <h1 style="text-align:center; font-size:40px; color: antiquewhite">Library Management System</h1><br><br> 
             <h1 style="text-align:center; font-size:25px; color: antiquewhite;">Login</h1><br>
                    <form name="login" action="" method="post">
                       <div class="login">
                        <input type="text" name="username" placeholder="Username" required=""> <br><br>
                        <input type="password" name="password" placeholder="Password" required=""><br><br>
                         <input type="submit" name="submit" value="Login" class="btn btn-primary" style="min-height:50px" ></div>
                    </form>
                    <p style="color: white ; padding-left:30px";><br><br>
                    <a style="color:yellow" href="updatepass.php">Forgot Password?</a>
                    </p>
                     
                 </div>
                  
              </div>
      </section>
      <?php
      if(isset($_POST['submit']))
      {
          echo $_POST['username'].$_POST['password'];
          $count=0;
          $res=mysqli_query($db,"SELECT * FROM `advisor` WHERE username='$_POST[username]' && password='$_POST[password]';");
         $count=mysqli_num_rows($res);
         if($count==0)
{
              ?>
           
         <div class="alert alert-danger" style="width:700px; margin-left:450px;">
             <strong>The username and password doesn't match.</strong>
         </div>
          <?php
          }
          else
          {
              $_SESSION['login_user']=$_POST['username'];
              ?>
              <script type="text/javascript">
      window.location="homelibrary.php"
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