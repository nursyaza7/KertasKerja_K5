<?php
include('config.php');

$jawapan=$_POST['jawapan'];
$catatan=$_POST['catatan'];

$sql="insert into papar values('$jawapan','$catatan')";
$result=mysql_query($sql);

if($result)

{
	header("location:papar.php");
}

else{
	echo "Sorry Username already taken!";}
?>