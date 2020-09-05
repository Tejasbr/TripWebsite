<?php
include 'dbconnect.php';
$query = "SELECT * FROM `trip`";
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
        <th colspan="6"><h2>Trip Record</h2></th>
    </tr>
    
        <th> Id</th>
        <th> User Name</th>
        <th> Trip Name</th>
        <th> Package</th>
        <th> Start Date</th>
        <th> End Date</th>

    </thead>

    <?php
        while($rows=mysqli_fetch_assoc($result))
        {
    ?>
            <tr>
                <td><?php echo $rows['tid']; ?></td>
                <td><?php echo $rows['username']; ?></td>
                <td><?php echo $rows['tripname']; ?></td>
                <td><?php echo $rows['package']; ?></td>
                <td><?php echo $rows['startdate']; ?></td>
                <td><?php echo $rows['enddate']; ?></td>
            </tr>
    <?php
        }
    ?>

    </table>
    
</body>
</html>