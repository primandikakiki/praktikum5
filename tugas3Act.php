<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
if (empty($_POST['nama'])) {
	header("Location:tugas3kosong.php");
} elseif (empty($_POST['panggilan'])) {
	header("Location:tugas3kosong.php");
} elseif (empty($_POST['ttl'])) {
	header("Location:tugas3kosong.php");
} elseif (empty($_POST['alamat'])) {
	header("Location:tugas3kosong.php");	
} elseif (empty($_POST['pekerjaan'])) {
	header("Location:tugas3kosong.php");
} elseif (empty($_POST['hobby'])) {
	header("Location:tugas3kosong.php");
} elseif (empty($_POST['cita'])) {
	header("Location:tugas3kosong.php");
} elseif (empty($_POST['nomor'])) {
	header("Location:tugas3kosong.php");
} elseif (empty($_POST['email'])) {
	header("Location:tugas3kosong.php");						
} else {
	echo "<center> Nama :".$_POST['nama']."</center><br>";
	echo "<center> Nama :".$_POST['panggilan']."</center><br>";
	echo "<center> Nama :".$_POST['ttl']."</center><br>";
	echo "<center> Nama :".$_POST['alamat']."</center><br>";
	echo "<center> Nama :".$_POST['pekerjaan']."</center><br>";
	echo "<center> Nama :".$_POST['hobby']."</center><br>";
	echo "<center> Nama :".$_POST['cita']."</center><br>";
	echo "<center> Nama :".$_POST['nomor']."</center><br>";
	echo "<center> Nama :".$_POST['email']."</center><br>";						
	date_default_timezone_set("Asia/Jakarta");
	echo "<center>Login pada ".date("D, d F Y G:i:s"."</center>");
}
?>
</body>
</html>