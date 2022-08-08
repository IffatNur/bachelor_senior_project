 <?php
    session_start();
?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/reg.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js"></script>

     <title>Chittagong Independent University</title>

     <style>
     div.head {
         justify-content: center;
         margin: 0%;
         padding: 20px;
         color: black;
         display: flex;
     }

     nav {
         background-image: linear-gradient(gray, white, gray);
         font-size: 20px;
     }

     form.login {
         background-image: linear-gradient(to top left, navy, orange);
         text-align: left;
         display: inline-block;
         font-size: 20px;
         padding: 30px;
         margin: 100px 0 0 500px;
         border-radius: 5px;
         border-color: solid;
         color: white;
     }

     h2 {
         text-align: center;
     }

     p {
         background-color: rgba(0, 0, 0, 0.1);
         padding: 5px;
         margin: 15px 0 15px 0;
         font-size: 20px;

     }

     img {
         width: 100px;
         height: 100px;
         background-color: rgba(0, 0, 0, 0.1);
         border-radius: 60px;
         color: white;
         animation: mymove 6s infinite;
     }

     @keyframes mymove {
         50% {
             box-shadow: 10px 20px 30px navy;
         }
     }

     table {

         border: solid 1px black;
     }

     th {
         font-size: 20px;
     }

     tr {
         font-size: 15px;

     }

     .alert {
         padding: 15px;
         background: lightgreen;
         color: black;
         font-size: 20px;
         margin-bottom: 15px;
         transition: opacity 0.6s;
     }

     /* The close button */
     .closebtn {
         margin-left: 15px;
         color: black;
         font-weight: bold;
         float: right;
         font-size: 30px;
         line-height: 20px;
         cursor: pointer;
         transition: 0.3s;
     }

     /* When moving the mouse over the close button */
     .closebtn:hover {
         color: black;
     }

     .btn-group {
         margin-top: 3%;
     }

     .btn-group button {
         background-color: rgb(3, 3, 88);
         border: 1px solid black;
         color: white;
         padding: 10px 24px;
         margin-left: 10%;

         cursor: pointer;
         width: 70%;
     }

     .btn-group button:not(:last-child) {

         border-bottom: none;
     }

     .btn-group button:hover {
         background-color: rgba(3, 3, 88, 0.9);
     }
     </style>
 </head>

 <body>
     <div class="head" style="font-family: cursive; background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('book1.jpg');
         height: 200px;padding-top:50px">
         <img src=" ciulogo.png" alt="" width="120" height="100" class="d-inline-block align-text-left"
             style="padding-left: 5px; padding-top: 0%; margin-top: 0px;">
         <div style="color: white;font-family: cursive;">

             <h1>Chittagong Independent University</h1>
             <p style="padding: 5px;">Lord Advance Me In Knowledge</p>

         </div>
     </div>
     <h1 class="text-center" style="background-color:rgb(3, 3, 88);margin:0%;padding:5px;color:white">
         Course Registration</h1>
     <nav class="navbar navbar-expand-lg navbar-light navbar navbar-light"
         style="background-image: linear-gradient(gray,rgb(248, 245, 233),gray);margin:0%">
         <div class="container-fluid">
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="reg_home.php"> <b>Home</b> </a>
                     </li>
                     <li class="nav-item" style="padding-left: 5px; padding-right: 5px;">
                         <a class="nav-link active" href="php/course_offer.php"><b>Offer List</b></a>
                     </li>
                     <li class="nav-item" style="padding-left: 5px; padding-right: 5px;">
                         <a class="nav-link active" href="contact.html"><b>Contact Us</b></a>
                     </li>
                 </ul>

             </div>
         </div>

     </nav>
     <div class="alert">
         <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
         Congratulations! Your Advising Has Successfully Completed.
     </div>

     <div class="" style="text-align:center;width:900px;margin-left:20%;">

         <table id="invoice" class="table table-hover">

             <tbody>
                 <tr>
                     <td><strong>NAME:<?php echo $_POST['name'];?></strong><br>
                         <strong>ID:<?php echo $_POST['sid'];?></strong>
                     </td>
                 </tr>
                 <tr class=" text-black text-center" style="background-image: linear-gradient(gray, rgb(248, 245, 233),
                     gray);">

                     <th>Course</th>
                     <th>Pre-Requisite Course</th>
                     <th>Faculty</th>
                     <th>Section</th>
                     <th>Credit</th>
                     <th>Bill</th>
                     <th>Seat</th>
                     <th>Day</th>
                     <th>Time</th>

                 </tr>
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
    $all_ids = implode(" ", $all_id);
    foreach($all_id as $value){
    $sql = "SELECT SUM(bill) as sum FROM `offer_list` where `id` = '$value' ";
            $query_result = mysqli_query($con, $sql);
            $tot_bill = 0;
            while($query= mysqli_fetch_assoc($query_result)){
                @$tot_bill = $output+$query['sum']; 
                $output = $tot_bill;
            }
    $s = "SELECT SUM(credit) as sum FROM `offer_list` where `id` = '$value' ";
            $q_result = mysqli_query($con, $s);
            $tot_credit = 0;
            while($qry= mysqli_fetch_assoc($q_result)){
                @$tot_credit = $output_credit+$qry['sum']; 
                $output_credit = $tot_credit;
            }
            
    $sq = "UPDATE offer_list SET seat =seat-1 where `id` = '$value'";
    $sq_result = mysqli_query($con, $sq);
    
    $q = "SELECT * FROM `offer_list` where `id` = '$value'";
    $query = mysqli_query($con, $q);
   while($res = mysqli_fetch_array($query)){
        $sid = $_POST['sid'];
        $name = $_POST['name'];
        $payment = $_POST['payment'];
        $course = $res['course'];
        $credit = $res['credit'];
        $bill = $res['credit']*4000;
        $day = $res['day'];
    
        $s = "SELECT * FROM `registered` WHERE `id` = '$_POST[sid]' && `name` = '$_POST[name]'";
        $r = mysqli_query($con, $s);
        $num = mysqli_num_rows($r); 
        if($num == 1){
            $sql = "INSERT INTO `ciu` . `advising` (sid,name,payment,course,credit,bill,day,time)
            VALUES ('$sid','$name','$payment','$course','$credit','$bill','$day',current_timestamp()) ";
            $result = mysqli_query($con, $sql);
        
                 }

        else{
               

        }

        ?>

                 <tr style="background-color: rgba(0,0,0,0.1);">
                     <td><?php echo $res['course']; ?></td>
                     <td><?php echo $res['pre_req']; ?></td>
                     <td><?php echo $res['faculty']; ?></td>
                     <td><?php echo $res['section']; ?></td>
                     <td><?php echo $res['credit']; ?></td>
                     <td><?php echo $res['credit']*4000; ?></td>
                     <td><?php echo $res['seat']; ?></td>
                     <td><?php echo $res['day']; ?></td>
                     <td><?php echo $res['time']; ?></td>

                 </tr>

                 <?php
                 
                }
                
                ?>
                 <?php
        }
        
        ?>
                 <tr>
                     <td>Semester Fee:</td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td>5,000</td>
                     <td></td>
                     <td></td>
                     <td></td>
                 </tr>
                 <tr>
                     <td>Total Credit & Fees:</td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td><?php echo $tot_credit;?></td>
                     <td><?php echo $tot_bill+5000;?></td>
                     <td></td>
                     <td></td>
                     <td></td>
                 </tr>

             </tbody>
         </table>
     </div>
     <div id="editor"></div>
     <?php
    }
    ?>

     <button id="download" style="position:center;margin-left:45%">Download PDF</button>

     <script>
     // Get all elements with class="closebtn"
     var close = document.getElementsByClassName("closebtn");
     var i;

     // Loop through all close buttons
     for (i = 0; i < close.length; i++) {
         // When someone clicks on a close button
         close[i].onclick = function() {

             // Get the parent of <span class="closebtn"> (<div class="alert">)
             var div = this.parentElement;

             // Set the opacity of div to 0 (transparent)
             div.style.opacity = "0";

             // Hide the div after 600ms (the same amount of milliseconds it takes to fade out)
             setTimeout(function() {
                 div.style.display = "none";
             }, 600);
         }
     }
     </script>

     <script>
     window.onload = function() {
         document.getElementById("download")
             .addEventListener("click", () => {
                 const invoice = this.document.getElementById("invoice");
                 console.log(invoice);
                 console.log(window);
                 var opt = {
                     margin: 0.10,
                     filename: 'bill.pdf',
                     image: {
                         type: 'jpeg',
                         quality: 0.98
                     },
                     html2canvas: {
                         scale: 1
                     },
                     jsPDF: {
                         unit: 'in',
                         format: 'letter',
                         orientation: 'portrait'
                     }
                 };
                 html2pdf().from(invoice).set(opt).save();
             })
     }
     </script>
 </body>

 </html>