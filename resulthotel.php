<?php
include 'dbconnect.php';
$query = "SELECT * FROM `hotel`";
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
        
        border: 3px solid mediumpurple;
        margin: 325px 828px;
        font-size: 20px;
        padding: 13px;
        width: max-content;
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
        <th colspan="7"><h2>Hotel Booking Record</h2></th>
    </tr>
    
        <th> Id</th>
        <th> User Name</th>
        <th> Email</th>
        <th> Mobile</th>
        <th> Birth Date</th>
        <th> No. Of Guest</th>
        <th> Room Type</th>

    </thead>

    <?php
        while($rows=mysqli_fetch_assoc($result))
        {
    ?>
            <tr>
                <td><?php echo $rows['uid']; ?></td>
                <td><?php echo $rows['uname']; ?></td>
                <td><?php echo $rows['email']; ?></td>
                <td><?php echo $rows['mobile']; ?></td>
                <td><?php echo $rows['bdate']; ?></td>
                <td><?php echo $rows['noofguest']; ?></td>
                <td><?php echo $rows['roomtype']; ?></td>
            </tr>
    <?php
        }
    ?>

    </table>
    
</body>
</html>