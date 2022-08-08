 <?php
 session_start();
        $server = "localhost";
        $username = "root";
        $password = "";
        $db = "ciu";
        $con = mysqli_connect($server,$username,$password,$db);

        if(!$con){
        die("Connection failed" . mysqli_connect_error());
        }
        else{}

        if(isset($_POST['submit'])) 
            {
                
                $sid = $_POST['sid'];
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['course'] = $_POST['course'];
                $_SESSION['credit'] = $_POST['credit'];
                $_SESSION['bill'] = $_POST['credit']*4000;
                $_SESSION['day'] = $_POST['day'];
                $_SESSION['time'] = $_POST['time'];
        
                $sql = "INSERT INTO `ciu` . `advising` (sid,name,course,credit,bill,day,time) 
                VALUES ('$sid','$name','$course','$credit','$bill','$day',current_timestamp())"; 
                $result = mysqli_query($con, $sql); 
            }  
?>