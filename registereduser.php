<?php
include 'dbconnect.php';
$query = "SELECT * FROM `user`";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>


    .table{
        /* border-collapse: collapse; */
        border: 3px solid mediumpurple;
        margin: 325px 828px;
        font-size: 20px;
        padding: 14px;
        min-width: 400px;
    }


    td{
        padding: 10px;
    }
    th{
        padding: 10px;
        background: cadetblue;
        color: currentcolor;
    }

    

    </style>
</head>
<body>

    <table class="table" border="2px">
    <thead>
    <tr>
        <th colspan="4"><h2>User Record</h2></th>
    </tr>
    
        <th> Id</th>
        <th> UserName</th>
        <th> MobileNo</th>
        <th> Email</th>

    </thead>

    <?php
        while($rows=mysqli_fetch_assoc($result))
        {
    ?>
            <tr>
                <td><?php echo $rows['uid']; ?></td>
                <td><?php echo $rows['username']; ?></td>
                <td><?php echo $rows['mobileno']; ?></td>
                <td><?php echo $rows['email']; ?></td>
            </tr>
    <?php
        }
    ?>

    </table>
    
</body>
</html>