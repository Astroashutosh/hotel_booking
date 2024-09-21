<?php
$conn=mysqli_connect("localhost","root","","hoteltbl");

$delid=$_REQUEST['id'];

$del="delete from bookroomtbl where id=$delid";
if(mysqli_query($conn,$del))
{
    echo "data deleted";
}
else{
    echo "data not deleted";
}
?>