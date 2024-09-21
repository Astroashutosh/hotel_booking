<?php
$a=$_POST['name'];
$b=$_POST['lastname'];
$c=$_POST['email'];
$d=$_POST['phone'];
$e=$_POST['request'];
$f=$_POST['writeus'];

$conn=mysqli_connect("localhost","root","","hoteltbl");
$ins="insert into contactustbl(firstName,lastName,email,phone,request,writeus)values('$a','$b','$c','$d','$e','$f')";
if(mysqli_query($conn,$ins))
{
    // echo "alert'data save'";
    // header("location:Contactus.php");
    echo "<script>window.location.href='Contactus.php';alert('save')</script>";
}
else
{
echo "massage not send";
}
?>