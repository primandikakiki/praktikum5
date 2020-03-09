<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
if (empty($_POST['nama'])) {
	header("Location:tugas1kosong.php");
} elseif (empty($_POST['email'])) {
	header("Location:tugas1kosong.php");
} else {
	include "tugas1include.php";
}
?>
</body>
</html>