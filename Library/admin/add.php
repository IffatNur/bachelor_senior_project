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
        body {
            background-color: #a44029fa;
 
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
    margin-top:261px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #080037;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
        .s:hover{
            color: white;
            height: 50px;
            width: 350px;
            background-color:royalblue;
        }

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
        .book
        {
            width: 400px;
            margin: 0 auto;
        }
        .form-control{
            background-color: #080707;
            height: 23px;
            color:white;
        }
      </style>
  </head>    
    <body>
    <?php include('header.php'); ?>
      <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div style="color:white; text-align:center; font-size:25px">
    <u><?php
        if(isset($_SESSION['login_user']))
      echo "Welcome ".$_SESSION['login_user'];
      ?> </u> 
  </div><br>
  <div class="s"><a href="add.php">Add Books</a></div>
  <div class="s"><a href="#">Book Request</a></div>
 <div class="s"><a href="#">Issue-Information</a></div>
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
<div class="container" style="text-align:center;">
    <h2 style="font-family:Lucida Console; text-align:center;"><b><u>Add New Books</u></b></h2>
    <form class="book" action="" method="post" >
        <input type="" name="bid" class="form-control" placeholder="Book id" required=""><br>
         <input type="text" name="name" class="form-control" placeholder="Book Name" required=""><br>
        <input type="text" name="authors" class="form-control" placeholder="Authors Name" required=""><br>
        <input type="text" name="edition" class="form-control" placeholder="Edition" required=""><br>
         <input type="text" name="status" class="form-control" placeholder="Status" required=""><br>
          <input type="text" name="quantity" class="form-control" placeholder="Quantity" required=""><br>
          <input type="text" name="department" class="form-control" placeholder="Department" required=""><br>
   <button class="btn btn-default" style="color:white; background-color:red; " type="submit" name="submit">ADD</button>
     </form>
</div>
<?php 
    if(isset($_POST['submit']))
    {
        if(isset($_SESSION['login_user']))
        {
            mysqli_query($db,"INSERT INTO books VALUES ('$_POST[bid]','$_POST[name]','$_POST[authors]','$_POST[edition]','$_POST[status]','$_POST[quantity]','$_POST[department]') ;");
           ?>
           <script type="text/javascript">
    alert("Books Added Successfully")
    </script>
           <?php
        }
        else
        { ?>
             <script type="text/javascript">
    alert("You need to login first.")
    </script>
          <?php  
            
        }
    }
    ?>
 </div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "350px";
  document.getElementById("main").style.marginLeft = "350px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "#a44029fa";
}
</script>
      
        </nav>
    </body>
</html>