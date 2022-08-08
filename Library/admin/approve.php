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
    <style type="text/css">
        .srch{
            padding-left: 1000px;
           
        }
         body {
 background-image: url(requestbook.jpg); background-repeat: no-repeat ;
             background-size: cover;
        
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

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
        .container{
            height: 600px;
            background-color: black;
            opacity: .7;
            color: white;
        } 
        table{
           background-color: aliceblue;
        }
        .Approve{
            margin-left: 500px;
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
  <a href="books.php">Books</a>
  <a href="request.php">Book Request</a>
  <a href="issue_info.php">Issue Information</a>
   <a href="expired.php">Expired</a>
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "350px";
  document.getElementById("main").style.marginLeft = "350px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
     <div class="container">
         <h3 style="text-align:center;"><b><u>Approve Request</u></b></h3><br>
         <form class="Approve" action="" method="post">
         <input type="text" name="approve" placeholder="Yes or No" required=""><br><br>
             <input type="date" name="issue" placeholder="Issue date yyyy-mm-dd" required=""><br><br>
             <input type="date" name="return" placeholder="Return date yyyy-mm-dd" required=""><br><br>
             <button style="background-color:red" type="submit" name="submit"><b>Approve</b></button>
            
         </form>
         </div> 
      <?php 
    if(isset($_POST['submit']))
    
        mysqli_query($db,"UPDATE `issue_book` SET `approve` = '$_POST[approve]',`issue` = '$_POST[issue]', `return` = '$_POST[return]' WHERE username= '$_SESSION[name]'and bid = '$_SESSION[bid]';");
        
        mysqli_query($db,"UPDATE books SET quantity =quantity-1 where bid='$_SESSION[bid]';");
        $res=mysqli_query($db,"SELECT quantity from books where bid='$_SESSION[bid];");
        while($_row=mysqli_fetch_assoc($res))
        {
            if($row['quantity']==0)
            {
                mysqli_query($db,"UPDATE books SET status='not available' where bid='$_SESSION[bid]';");
            }
        }
        ?>
        <!-- <script type="text/javascript">
        alert("Update successfully.");
        window.location="request.php"
        </script> -->
          
    
      
   
       </div>
      </nav>
    </body>
</html>