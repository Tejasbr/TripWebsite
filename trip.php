<?php

$insert = false;
if(isset($_POST['submit']))
{
include 'dbconnect.php';

$name = $_POST['name'];
$tname = $_POST['tname'];
$package = $_POST['package'];
$sdate = $_POST['sdate'];
$edate = $_POST['edate'];
$uid = $_POST['uid'];

$sql = "INSERT INTO `travel`.`trip` (`username`, `tripname`, `package`, `startdate`, `enddate`, `uid`) VALUES ('$name', '$tname', '$package', '$sdate', '$edate', '$uid');";

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
    <title>Trip</title>
    <link rel="stylesheet" href="css/trip.css">
</head>
<body>
    <img class="bg" src="./img/philippines.jpg" alt="">
   
    <div class="login">
        <img src="img/login.png" alt="">
        <h1>TRIP BOOK</h1>
        <?php
        if($insert == true){
         echo "<p>Thanks for submitting your form.</p>";
        }
        ?>
        <div class="form-box">
           
            <form action="trip.php" method="POST">
                <div class="form-group">
                    <label for="name">UserName: </label>
                    <input type="text" name="name" placeholder="Enter Your UserName">
                </div>
                <div class="form-group">
                    <label for="tname">Trip Name: </label>
                    <input type="text" name="tname" placeholder="Enter Your Trip Name">
                </div>
                <div class="form-group">
                    <label for="package">Package Amount: </label>
                    <input type="number" name="package" placeholder="Enter Your selected Package">
                </div>
                <div class="form-group">
                    <label for="sdate">Start Date: </label>
                    <input type="date" id="sdate" name="sdate"  placeholder="Enter Starting Date">
                </div>
                <div class="form-group">
                    <label for="edate">End Date: </label>
                    <input type="date" name="edate" placeholder="Enter Ending Date">
                </div>
                <div class="form-group">
                    <label for="uid">User Id </label>
                    <input type="number" name="uid" placeholder="user id">
                </div>
                
                
                <div id="btn">
                    <input type="Submit" name="submit" value="Submit">
                </div>
            </form>

        </div>

    </div>
</body>
</html>

