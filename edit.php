<?php
$idd=$_REQUEST['id'];
$conn=mysqli_connect("localhost","root","","myphpdb");
$sel="select * from formtbl where id=$idd";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);
?>
<html>
    <body>
        <h1>Edit Page</h1>
        <form action="update.php" method="post">

        <input type="hidden" name="id" value="<?php echo $k['0'] ?>"/>
        
        First NAME<input type="text" name="name" value="<?php echo $k['1']?>"/><br><br>
        Last Name<input type="text" name="lastname" value="<?php echo $k['2']?>"/><br><br>
        Room Type<select name="room"   value="<?php echo $k['3']?>">
        <option>Standard Room(1-2people)</option>
        <option>Family Room(1-4 people)</option>
        <option>Private Room(1-3 people)</option>
        <option>Mixed Dorm Room(6 people)</option>
        </select>
        Arrival Date<input type="date" name="date" value="<?php echo $k['4']?>"/><br><br>
        Time<input type="time" name="time" value="<?php echo $k['5']?>"/><br><br>
        Departure Date<input type="date" name="departuredate" value="<?php echo $k['6']?>"/><br><br>
        Email<input type="email" name="email" value="<?php echo $k['7']?>"/><br><br>
        Number of Guests<input type="number" name="guests" value="<?php echo $k['8']?>"/><br><br>
        Request<textarea  name="req" value="<?php echo $k['9']?>"></textarea><br><br>
        
            <button>Update</button>
</form>
</body>
</html>
