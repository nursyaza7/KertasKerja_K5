<?php
include ("config.php");
?>
<html>
<head><title>KALKULATOR SYAREEN</title>
</head>
<body>
<h3>
<style>
body{
  background-color:lightpink;
}
  table,tr,th,td{
  padding:10px;}
  tr,th,td
  {
	  border:1px solid red;
  }
  th{
  background-color:#ff6699;}
  </style>
 

  <body>
  <center>
  <h2><i>SENARAI PENGUNAAN KALKULATOR</i></h2>
  <table>
  <tr>
  <th style="text-align;">Bil</th><br>
  <th>Jawapan</th><br>
  <th>Catatan</th>
  </tr>
    </center>
	<?php

$no=1;
$ambil=mysql_query("SELECT *FROM papar");


while($data=mysql_fetch_array($ambil))
{?>

	<tr>
		<td><?php echo $no++;?></td>
		<td><?php echo $data['jawapan'];?></td>
		<td><?php echo $data['catatan'];?></td>
		</tr>
		<?php
			}
				?>

				</h3>
</table>
 </html>