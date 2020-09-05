<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "travel";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn)
// {
//     echo "Successfully Connected";
// }
// else
{
    die("Connection Failed". mysqli_connect_error());
}

?>