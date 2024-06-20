<?php
$n = $_POST['name'];
$e = $_POST['email'];
$c = $_POST['comment'];
$con=mysqli_connect("localhost","root","","blog");
$sql="INSERT INTO comment(name,email,comment) values('$n','$e','$c')";
$r=mysqli_query($con,$sql);
if($r)
{
echo "Message Send Successfuly";
}
else
{
echo "Message NOT Sended";
}



?>