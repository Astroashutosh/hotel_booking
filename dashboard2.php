<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard page</h1>
    <?php
    session_start();
    $sesid=$_SESSION['user'];
    $conn=mysqli_connect("localhost","root","","hoteltbl");

    $sel="select * from bookroomtbl ";
    $r=mysqli_query($conn,$sel);
    $k=mysqli_fetch_array($r,MYSQLI_BOTH);
    ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <td><?php echo $k['1']?></td>
</tr>
<tr>
            <th>Last Name</th>
            <td><?php echo $k['2']?></td>
</tr>
<tr>
            <th>Room Type</th>
            <td><?php echo $k['3']?></td>
</tr>
<tr>
            <th>Arrival Date</th>
            <td><?php echo $k['4']?></td>
</tr>
<tr>
            <th>Time</th>
            <td><?php echo $k['5']?></td>
</tr>
<tr>
            <th>Departure Date</th>
            <td><?php echo $k['6']?></td>
</tr>
<tr>
            <th>Email</th>
            <td><?php echo $k['7']?></td>
</tr>
<tr>
            <th>Number of Guests</th>
            <td><?php echo $k['8']?></td>
</tr>
<tr>
            <th>Request</th>
            <td><?php echo $k['9']?></td>
</tr>
<tr>
    <th>Action</th>
    <td><a href="changepassword.php">Change password</a>
    ! <a href="logout.php">Logout</a>
</td>
</tr>
</table>
</body>
</html>