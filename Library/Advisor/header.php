<?php
include "connection.php";
session_start();
?>
<h1
        style="text-align: center; background-color: #afafaf; margin: 0%;padding-top: 20px; padding-bottom: 20px; color: black;">
        <a class="navbar-brand" href="#">
            <img src="ciulogo.png" alt="" width="120" height="100" class="d-inline-block align-text-left"
                style="padding-left: 5px; padding-top: 0%; margin-top: 0px;">
        </a>
      <b style="color: black;font-family:cursive;font-size:40px">Chittagong Independent University</b>
    </h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="../advising_home.php">LIBRARY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="homelibrary.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="books.php">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="feedback.php">Feedback</a>
        </li>
        <?php
      if(isset($_SESSION['login_user']))
      {
      ?>
       <li class="nav-item">
          <a class="nav-link"  href="profile.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="logout.php">Logout</a>
        </li>
        <?php 
      }else{
        ?>
        <li class="nav-item">
          <a class="nav-link" href="studentlogin.php">Login</a>
        </li>
        <?php 
      }
        ?>
      </ul>
    </div>
  </div>
</nav>