<?php

$alert = false;
$error = false;
if(isset($_POST['submit']))
{
include 'dbconnect.php';

$username = $_POST["username"];
$mobileno = $_POST["mobileno"];
$email = $_POST["email"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];

$existSql = "SELECT * FROM `user` WHERE username='$username'";
$result = mysqli_query($conn, $existSql);
$numExistRows = mysqli_num_rows($result);
if($numExistRows > 0)
{
    $error = "UserName Already Exist!!";
}
else
{

if(($password == $cpassword))
{
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql ="INSERT INTO `user` (`username`, `mobileno`, `email`, `password`) VALUES ('$username', '$mobileno', '$email', '$hash')";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        $alert = true;
    }
}
else
    {
        $error = "Password does not match!!";
    }
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <title>Register</title>
</head>
<body>
    
    <div class="container">
    <h1 class="text-center"><strong>Register to our Website</strong> </h1>

    <?php
    if($alert)
    {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!!!</strong> Your account now created and go to <a href="login.php">Login.</a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    }
    if($error)
    {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Fail!!!</strong> '.$error.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
    }
    ?>

    <form action="registration.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">User Name</label>
            <input type="text"  name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mobile No.</label>
            <input type="number" name="mobileno" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputPassword1">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1">
        </div>
       
        <button type="submit" name= "submit" class="btn btn-primary">Sign Up</button>
</form>
    </div>
</body>
</html>