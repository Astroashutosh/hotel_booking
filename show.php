<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Show Page</h>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First NAME</th>
            <th>Last Name</th>
            <th>Room Type</th>
            <th>Arrival Date</th>
            <th>Time</th>
            <th>Departure Date</th>
            <th>Email</th>
            <th>Number of Guests</th>
            <th>Request</th>
        </tr>
        <?php
        $conn=mysqli_connect("localhost","root","","hoteltbl");
        $sel="select * from bookroomtbl";
        $r=mysqli_query($conn,$sel);
        while($k=mysqli_fetch_array($r,MYSQLI_BOTH))
        {

        ?>
        <tr>
            <td><?php echo $k['0']?></td>
            <td><?php echo $k['1']?></td>
            <td><?php echo $k['2']?></td>
            <td><?php echo $k['3']?></td>
            <td><?php echo $k['4']?></td>
            <td><?php echo $k['5']?></td>
            <td><?php echo $k['6']?></td>
            <td><?php echo $k['7']?></td>
            <td><?php echo $k['8']?></td>
            <td><?php echo $k['9']?></td>
            <td><a href="delete.php?id=<?php echo $k['0'] ?>">Delete</a></td>
            <td><a href="edit.php?id=<?php echo $k['0']?>">Edit</a></td>
        </tr>
        <?php
        }
        ?>
</table>

</body>
</html>