<?php
$a=$_POST['email'];
$b=$_POST['password'];

$conn=mysqli_connect("localhost","root","","hoteltbl");
$sel="select * from signuptbl where email='$a'";
$r=mysqli_query($conn,$sel);
$s=mysqli_fetch_array($r,MYSQLI_BOTH);
if($s['2']==$a)
{
if($s['3']==$b)
{
    //echo "you are login ";
    session_start();
        $_SESSION['user']= $a;
        header("location:dashboard.php");
}
else{
    echo "password wrong";
}
}
else{
    echo "email id wrong";
}
?>
