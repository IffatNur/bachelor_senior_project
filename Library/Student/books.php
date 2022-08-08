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
      </style>
  </head>
  <body>
  <?php include('header.php') ?>
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
      <div class="srch">
           <form class="navbar-form" method="post" name="form1">
                   <input class="" type="text" name="search" placeholder="search books.." required="">
                <button style="background-color:#e14444; heigth:40px;" type="submit" name="submit" class="" >
                      <img src="search%20icon.png" width="35px" height="22px">
                     </button>
           </form><br>
           <form class="navbar-form" method="post" name="form1">
                   <input  class="" type="text" name="bid" placeholder="Enter Book Id" required="">
                <button style="background-color:#e14444" type="submit" name="submit1" class="">Request
                      </button>
           </form>
           
       </div>
        <h2>List of Books</h2>
        <?php
        if(isset($_POST['submit']))
        {
            $q=mysqli_query($db,"SELECT * from books where name like '%$_POST[search]%'");
            if(mysqli_num_rows($q)==0)
            {
                echo "Sorry!No book found.Try searching again";
            }
            else {
                 echo "<table class='table table-bordered table-hover'>";
            echo "<tr style='background-color:#e14444;'>";
        echo"<th>"; echo "ID"; echo"</th>";
        echo"<th>"; echo "Book Name"; echo"</th>";
        echo"<th>"; echo "Authors Name"; echo"</th>";
        echo"<th>"; echo "Edition"; echo"</th>";
        echo"<th>"; echo "Status"; echo"</th>";
        echo"<th>"; echo "Quantity"; echo"</th>";
        echo"<th>"; echo "Department"; echo"</th>";
        echo "</tr>";
        
        while($row=mysqli_fetch_assoc($q))
        {
            echo "<tr>";
            echo "<td>"; echo $row['bid']; echo "</td>";
            echo "<td>"; echo $row['name']; echo "</td>";
            echo "<td>"; echo $row['authors']; echo "</td>";
            echo "<td>"; echo $row['edition']; echo "</td>";
            echo "<td>"; echo $row['status']; echo "</td>";
            echo "<td>"; echo $row['quantity']; echo "</td>";
            echo "<td>"; echo $row['department']; echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
            }
        }
        else{$res=mysqli_query($db,"SELECT * FROM `books`;");
            echo "<table class='table table-bordered table-hover'>";
            echo "<tr style='background-color:#e14444;'>";
        echo"<th>"; echo "ID"; echo"</th>";
        echo"<th>"; echo "Book Name"; echo"</th>";
        echo"<th>"; echo "Authors Name"; echo"</th>";
        echo"<th>"; echo "Edition"; echo"</th>";
        echo"<th>"; echo "Status"; echo"</th>";
        echo"<th>"; echo "Quantity"; echo"</th>";
        echo"<th>"; echo "Department"; echo"</th>";
        echo "</tr>";
        
        while($row=mysqli_fetch_assoc($res))
        {
            echo "<tr>";
            echo "<td>"; echo $row['bid']; echo "</td>";
            echo "<td>"; echo $row['name']; echo "</td>";
            echo "<td>"; echo $row['authors']; echo "</td>";
            echo "<td>"; echo $row['edition']; echo "</td>";
            echo "<td>"; echo $row['status']; echo "</td>";
            echo "<td>"; echo $row['quantity']; echo "</td>";
            echo "<td>"; echo $row['department']; echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
            
        }
        
         if(isset($_POST['submit1']))
    {
        if(isset($_SESSION['login_user']))
     { 
       $olds =  mysqli_query($db,"SELECT * FROM `issue_book` WHERE username = '$_SESSION[login_user]' AND approve = 'Yes'");
       $count=mysqli_num_rows($olds);
       if($count >2){
         ?>
          <script type ="text/javascript">
           alert('Limit exceeds');
          </script>
         <?php
       }else{
          mysqli_query($db,"INSERT INTO issue_book Values('$_SESSION[login_user]','$_POST[bid]','','','');");
       
      
            ?>
       <script type ="text/javascript">
           window.location="request.php"
    </script>
       <?php
       }
        }
    
    else 
    {
        ?>
       <script type ="text/javascript">
           alert("You must login to Request a book.");
    </script>
       <?php
    }
    }   
        
        
            ?>
        
        
        
        
       </div>
      </nav>
        
    </body>
    
</html>