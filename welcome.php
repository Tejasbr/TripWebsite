<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    header("location: login.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME </title>
    <link rel="stylesheet" href="css/welcome.css">
</head>
<body>
    
    <nav id="navbar">
        
        <ul>
            <!-- <li class="item"><a href=#><strong>Trip Packages</strong></a> </li> -->


           <div class="dropdown">
            <button onclick="hide()" class="btn">Trip Packages</button>
           
            <div style="display:none;" id="drop-content">
            <a href="summer.html"><strong>Summer</strong></a>
            <a href="winter.html"><strong>Winter</strong></a>
            <a href="monsoon.html"><strong>Monsoon</strong></a>
            </div>
           </div>
           
            <li class="item"><a href="trip.php"><strong>Trip Booking</strong></a></li>
            
            <li class="item"><a href="hotel.php"><strong>Hotel Booking</strong></a></li>
            <li class="item"><a href="expense.php"><strong>Expense</strong></a></li>
            <li class="item"><a href="help.html"><strong>Help</strong></a></li>
            <li class="item"><a href="expresult.php"><strong>Show Expense Details</strong></a></li>
            <li class="item"><a href="logout.php"><strong>Logout</strong></a></li>
        </ul>
    </nav>
    <section id="home">
        <h1 class="h-primary"><strong>There is a whole world out there. Pack your backpack, your best friend and go.</strong></h1>

    </section>
    <section class="help">
        
        <h1 class="h-primary center">Steps to Book Your Trip.</h1> 
        <div class="list">
            <p id="content">
                First of all go in "Help" section and follow those setps like search for packages and accordind to it you will complete some steps to successfully book your trip and Hotel.
            </p>

        </div>

    </section>

    <script>
        function hide()
        {
            let click = document.getElementById("drop-content");
            {
                if(click.style.display == "none")
                {
                    click.style.display = "block";
                }
                else
                {
                    click.style.display = "none";
                }
            }
        }
    </script>

</body>
</html>