<?php
$n = $_POST['name'];
$e = $_POST['email'];
$s = $_POST['subject'];
$m = $_POST['message'];
$con=mysqli_connect("localhost","root","","shop_dp");
$sql="INSERT INTO login(name,email,subject,message) values('$n','$e','$s','$m')";
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