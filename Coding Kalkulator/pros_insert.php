<?php
include('config.php');

$nama=$_POST['nama'];
$noic=$_POST['noic'];
$noang=$_POST['noang'];

$sql="insert into form values('$nama','$noic','$noang')";
$result=mysql_query($sql);

if($result)

{
	header("location:kalkulator.html");
}

else{
	echo "Error!";}
?>