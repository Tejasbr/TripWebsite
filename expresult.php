<?php
include 'dbconnect.php';
$query = "SELECT * FROM `expense`";
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
        <th colspan="6"><h2>Expense Record</h2></th>
    </tr>
    
        <th> E-Id</th>
        <th> T-Id</th>
        <th> Expense Name</th>
        <th> Expense Category</th>
        <th> Amount</th>
        

    </thead>

    <?php
        while($rows=mysqli_fetch_assoc($result))
        {
    ?>
            <tr>
                <td><?php echo $rows['eid']; ?></td>
                <td><?php echo $rows['tid']; ?></td>
                <td><?php echo $rows['ename']; ?></td>
                <td><?php echo $rows['ecategory']; ?></td>
                <td><?php echo $rows['eamount']; ?></td>
                
            </tr>
    <?php
        }
    ?>

    </table>
    
</body>
</html>