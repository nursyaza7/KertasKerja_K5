<?php
include("config.php");

$username=$_POST['username'];
$password=$_POST['password'];

$sql="insert into login_user values('$username','$password')";
$result=mysql_query($sql);

if($result)

{
	header("location:login.php");
}

else{
	echo "Error!";}
?>