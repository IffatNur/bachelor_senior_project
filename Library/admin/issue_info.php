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
        .scroll
        {
           height:80%;
            width: 100%;
            overflow:auto;
        }
        th,td{
            width:10%;
            
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
    <h3 style="text-align:center;"><b><u>Information of Borrowed Books</u></b></h3>
    <?php
    if(isset($_SESSION['login_user']))
    {
          $sql="SELECT student.username,id,books.bid,name,authors,edition,issue,issue_book.return FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve ='Yes' ORDER BY `issue_book`.`return` ASC";
        $res=mysqli_query($db,$sql);
         
         echo "<table class='table table-bordered table-hover'>";
       
            echo "<tr style='background-color:#e14444; '>";
        echo"<th>"; echo "Username"; echo"</th>";
        echo"<th>"; echo "Student Id"; echo"</th>";
        echo"<th>"; echo "Book Id"; echo"</th>";
        echo"<th>"; echo "Book Name"; echo"</th>";
        echo"<th>"; echo "Authors Name"; echo"</th>";
        echo"<th>"; echo "Edition"; echo"</th>";
        echo"<th>"; echo "Issue Date"; echo"</th>";
        echo"<th>"; echo "Return Date"; echo"</th>";
        echo "</tr>";
          echo "</table>";
        echo "<div class='scroll'>";
         echo "<table class='table table-bordered table-hover'>";
       
            echo "<tr style='background-color:#e14444; '>";
        while($row=mysqli_fetch_assoc($res))
        {
            $d=date("Y-m-d");
           
            if($d > $row['return'])
            {
                $c=$c+1;
                $var='<p style="color:yellow; background-color:red;">EXPIRED</p>';
                mysqli_query($db,"UPDATE issue_book SET approve='$var' where `return`='$row[return]' and approve='Yes' limit $c;");
                echo $d."</br>";
                
            }
            echo "<tr>";
            echo "<td>"; echo $row['username']; echo "</td>";
            echo "<td>"; echo $row['id']; echo "</td>";
            echo "<td>"; echo $row['bid']; echo "</td>";
            echo "<td>"; echo $row['name']; echo "</td>";
            echo "<td>"; echo $row['authors']; echo "</td>";
            echo "<td>"; echo $row['edition']; echo "</td>";
            echo "<td>"; echo $row['issue']; echo "</td>";
            echo "<td>"; echo $row['return']; echo "</td>";
            echo "</tr>"; 
        }
        
        echo "</table>";
         echo "</div>";
    }
    else
    {
        ?>
        <h3 style="text-align:center;">Login to see information of Borrowed Books</h3>
        <?php
    }
    
    
    ?>
    
    
    
    
    
</div>
       </div>
      </nav>
    </body>
</html>