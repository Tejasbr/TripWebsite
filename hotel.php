<?php

$insert = false;
if(isset($_POST['submit']))
{
include 'dbconnect.php';


$uname = $_POST['uname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$bdate = $_POST['bdate'];
$noofguest = $_POST['noofguest'];
$roomtype = $_POST['roomtype'];


$sql = "INSERT INTO `travel`.`hotel` (`uname`, `email`, `mobile`, `bdate`, `noofguest`, `roomtype`) VALUES ('$uname', '$email', '$mobile', '$bdate', '$noofguest', '$roomtype');";

if($conn->query($sql) == true)
{
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $conn->error";
}

$conn->close();
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Book</title>
    <link rel="stylesheet" href="css/trip.css">
</head>
<body>
    <img class="bg" src="./img/philippines.jpg" alt="">
   
    <div class="login">
        <img src="img/login.png" alt="">
        <h1>HOTEL BOOK</h1>
        <?php
        if($insert == true){
         echo "<p>Thanks for submitting your form.</p>";
        }
        ?>
        <div class="form-box">
           
            <form action="hotel.php" method="POST">
                <div class="form-group">
                    <label for="uname">User Name: </label>
                    <input type="text" name="uname" placeholder="Enter Your UserName">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile No: </label>
                    <input type="number" name="mobile" placeholder="Enter Your mobile number">
                </div>
                <div class="form-group">
                    <label for="bdate">Birth Date: </label>
                    <input type="date" id="bdate" name="bdate"  placeholder="Enter your Birth Date">
                </div>
                <div class="form-group">
                    <label for="noofguest">No of Guest: </label>
                    <input type="number" name="noofguest" placeholder="Enter total no. of guest">
                </div>
                <div class="form-group">
                    <label for="roomtype">Room Type: </label>
                    <input type="text" name="roomtype" placeholder="Enter Room Type">
                </div>
                
                
                <div id="btn">
                    <input type="Submit" name="submit" value="Submit">
                </div>
            </form>

        </div>

    </div>
</body>
</html>
