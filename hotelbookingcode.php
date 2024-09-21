<?php
$a=$_POST['name'];
$i=$_POST['lastname'];
$b=$_POST['room'];
$c=$_POST['date'];
$d=$_POST['time'];
$e=$_POST['departuredate'];
$f=$_POST['email'];
$g=$_POST['guests'];
$h=$_POST['req'];

$conn=mysqli_connect("localhost","root","","hoteltbl");
$ins="insert into bookroomtbl(name,lastname,roomtype,arivaldate,time,departuredate,email,numberofguests,request)values('$a','$i','$b','$c','$d','$e','$f','$g','$h')";
if(mysqli_query($conn,$ins))
{
   
    echo "<script>window.location.href='payment.php';alert('Booking Success')</script>";
    
    // session_start();
    //     $_SESSION['user']= $a;
        // header("location:show.php");
}
else{
    echo "data not save";
}
?>
