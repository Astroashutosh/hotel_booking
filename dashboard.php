<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    
    <h1>Dashboard page</h1>
    <?php
    session_start();
    $sesid=$_SESSION['user'];
    $conn=mysqli_connect("localhost","root","","hoteltbl");

    $sel="select * from signuptbl where email='$sesid'";
    $r=mysqli_query($conn,$sel);
    $k=mysqli_fetch_array($r,MYSQLI_BOTH);
    ?>
   <center> <table border="1">
        <tr>
            <th>Name</th>
            <td><?php echo $k['1']?></td>
</tr>
<tr>
            <th>Email</th>
            <td><?php echo $k['2']?></td>
</tr>
<tr>
            <th>Password</th>
            <td><?php echo $k['3']?></td>
</tr>
<!-- <tr>
            <th>Mobile</th>
            <td><?php echo $k['4']?></td>
</tr>
<tr>
            <th>City</th>
            <td><?php echo $k['5']?></td>
</tr>
<tr>
            <th>Picture</th>
            <td><img src="../picture/<?php echo $k['6']?>" heght="150px" width="150px"/></td>
</tr>
<tr> -->
    <th>Action</th>
    <td><a href="changepassword.php">Change password</a>
    ! <a href="logout.php">Logout</a>
</td>
</tr>
</table></center>
</body>
</html>