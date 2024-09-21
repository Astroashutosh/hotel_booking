<?php
session_start();
$sesid=$_SESSION['user'];
$a=$_POST['opass'];
$b=$_POST['npass'];
$c=$_POST['cpass'];

$conn=mysqli_connect("localhost","root","","hoteltbl");

$sel="select * from signuptbl where email='$sesid'";
$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

if($k['3']==$a)
{
if($b==$c)
{
    $up="update signuptbl set password='$b' where email='$sesid'";
    if(mysqli_query($conn,$up))
    {
        // echo "password change";
        echo "<script>window.location.href='changepassword.php';alert('password change')</script>";
    }
    else{
        echo "password not change";
    }
}
else{
    echo "new and conf pass not same";
}
}
else{
    echo "old password wrong";
}
?>
