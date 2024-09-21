<?php
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['pass'];

$conn=mysqli_connect("localhost","root","","hoteltbl");

 $ins="insert into signuptbl(name,email,password)values('$a','$b','$c')";
if(mysqli_query($conn,$ins))
{
    echo "data save";
    header("location:login.php");
}
else{
    echo "data not save";
}
?>
