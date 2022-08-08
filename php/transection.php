 <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "ciu";

    $con = mysqli_connect($server,$username,$password,$db);

    if(!$con){
    die("Connection failed" . mysqli_connect_error());
    }
    else{}
                
    if(isset($_POST['confirm'])){
    $all_id = $_POST['sel_check'];
    $all_ids = implode(",", $all_id);
    echo $all_ids;

    $query = "SELECT * from `offer_list`";
    $sql = mysqli_query($con, $query);
    }
?>