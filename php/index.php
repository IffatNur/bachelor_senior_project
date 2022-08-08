<?php
$session_start();

if(isset($_SESSION['id'])){
    $_SESSION['msg'] = "Login first";
    header("location: advising.html");

}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['id']);
    header("location: advising.html");
}
?>