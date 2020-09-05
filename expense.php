<?php

$insert = false;
if(isset($_POST['submit']))
{
include 'dbconnect.php';

$tid = $_POST['tid'];
$uid = $_POST['uid'];
$ename = $_POST['ename'];
$ecategory = $_POST['ecategory'];
$eamount = $_POST['eamount'];



$sql = "INSERT INTO `travel`.`expense` (`tid`, `uid`, `ename`, `ecategory`, `eamount`) VALUES ('$tid', '$uid', '$ename', '$ecategory', '$eamount');";


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
    <title>Expense</title>
    <link rel="stylesheet" href="css/trip.css">
</head>
<body>
    <img class="bg" src="./img/philippines.jpg" alt="">
   
    <div class="login">
        <img src="img/login.png" alt="">
        <h1>EXPENSE</h1>
        <?php
        if($insert == true){
         echo "<p>Thanks for submitting your form.</p>";
        }
        ?>
        <div class="form-box">
           
            <form action="expense.php" method="POST">
                <div class="form-group">
                    <label for="tid">Travel Id </label>
                    <input type="number" name="tid" placeholder="user id">
                </div>
                <div class="form-group">
                    <label for="uid">User Id </label>
                    <input type="number" name="uid" placeholder="user id">
                </div>
                <div class="form-group">
                    <label for="ename">Expense Name: </label>
                    <input type="text" name="ename" placeholder="Enter Your Expense">
                </div>
                <div class="form-group">
                    <label for="ecategory">Expense Category </label>
                    <input type="text" name="ecategory" placeholder="Enter Category">
                </div>
                <div class="form-group">
                    <label for="eamount">Expense Amount: </label>
                    <input type="number" name="eamount" placeholder="Enter expense amount">
                </div>
                
                
                <div id="btn">
                    <input type="Submit" name="submit" value="Submit">
                </div>
            </form>

        </div>

    </div>
</body>
</html>
