function Validate() {
var username = document.getElementById('user').value;
var password = document.getElementById('pass').value;

if ($username != "Admin" && $password != "admin") {
alert("Invalid login");
} else {
header("Location:course_offer.php");
ob_start();

}

}



$user = $_POST['user'];
$pass = $_POST['pass'];

if($user != "Admin" || $pass != "admin"){
header('location:admin.php');
}
else{
$_SESSION['user'] = $user;
header('location:course_insert.php');
die;
}
<td name="course[]" value="<?php echo $res['course']; ?>"><?php echo $res['course']; ?></td>
<td value="<?php echo $res['pre_req']; ?>"><?php echo $res['pre_req']; ?></td>
<td><?php echo $res['faculty']; ?></td>
<td value="<?php echo $res['section']; ?>"><?php echo $res['section']; ?></td>
<td name="credit" value="<?php echo $res['credit']; ?>"><?php echo $res['credit']; ?></td>
<td name="bill" value="<?php echo $res['credit']*4000; ?>"><?php echo $res['credit']*4000; ?>
</td>


if(isset($_POST['confirm'])){
$name = $_POST['name'];
$sid = $_POST['sid'];
$payment = $_POST['payment'];
$course = $_POST['course'];
$credit = $_POST['credit'];
$bill = $_POST['bill'];

$sql = "INSERT INTO `ciu` . `course_reg` (sid,name,payment,course,credit,bill) VALUES ($sid,$name,
$payment,$course,$credit, $bill) ";
$result = mysqli_query($con, $sql);
}