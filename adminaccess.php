<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    header("location: admin.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/adminaccess.css">
</head>
<body>
    <!-- <img class="bg" src="./img/main4.jpg" alt=""> -->
    <div class="block1">
        <div class="main">
            <ul>
                <li class="item"><a href="registereduser.php"><strong>Registered Users</strong></a></li>
                <li class="item"><a href="resulttrip.php"><strong>Trip Booking</strong></a></li>
                <li class="item"><a href="resulthotel.php"><strong>Hotel Booking</strong></a></li>
                <li class="item"><a href="adminlogout.php"><strong>Logout</strong></a></li> 
            </ul>
        </div>
    </div>
</body>
</html>