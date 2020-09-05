<?php

$insert = false;
if(isset($_POST['submit']))
{
include 'dbconnect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$contactno = $_POST['contactno'];
$message = $_POST['message'];

$sql = "INSERT INTO `travel`.`contact` (`name`, `email`, `contactno`, `message`) VALUES ('$name', '$email', '$contactno', '$message');";

if($conn->query($sql) == true)
{
    $insert = true;
    header("location: main.html");
}
else{
    echo "ERROR: Try Again!!!!";
}

$conn->close();
}


?>

