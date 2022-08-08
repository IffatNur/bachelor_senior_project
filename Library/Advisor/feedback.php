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
      body
        {
            background-image: url("feedback.jpg");
             background-size: cover;
        }
        .wrapper{ 
            padding: 20px;
            margin: 30px auto;
            width: 900px;
        height:600px;
        background-color: black;
        opacity: .6;
        color:white;}
        .form-control{
            height: 70px;
            width: 70%;
        }
         .comments{
            background-color:aquamarine;
        }
      </style>
  </head>
    <body>
    <?php include('header.php') ?>
<div class="wrapper">
    <h3>If you have any suggestions or questions please comment below</h3>
    <form style="" action="" method="post">
       <input class="form-control" type="text" name="comment" placeholder="write something..."><br>
        <input type="submit" name="submit" value="comment" style="width:100px;">
    </form>
<br>
<div class="comments">
    <?php
    if(isset($_POST['submit']))
    {
        $sql="INSERT INTO `comments` VALUES('','$_SESSION[login_user]','$_POST[comment]');";
       if(mysqli_query($db,$sql))
       {
           $q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
           $res=mysqli_query($db,$q);
           echo "<table class='table table-bordered'>";
               while($row=mysqli_fetch_assoc($res))
               {
                   echo"<tr>";
                   echo"<td>"; echo $row['username']; echo"</td>";
                   echo"<td>"; echo $row['comment']; echo"</td>";
                   echo"</tr>";
                   
               }
       }
    
    }
    else
        
    {
       $q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
           $res=mysqli_query($db,$q);
           echo "<table class='table table-bordered'>";
               while($row=mysqli_fetch_assoc($res))
               {
                   echo"<tr>";
                   echo"<td>"; echo $row['username']; echo"</td>";
                   echo"<td>"; echo $row['comment']; echo"</td>";
                   echo"</tr>";
                   
               } 
    }
    ?>
    
</div>
      </div> 
        </nav>
    </body>

</html>




