<!DOCTYPE html>
<html>
<head>
	<title> Request </title>
</head>
<body>
<form method="REQUEST" action="requestAct.php">
	<a href="http://localhost/praktikum5/requestAct.php?nama=primandika&email=asd%40gmail.com&btnLogin=Login"> Link ke Cek </a>
	<table width="400" align="center" cellpadding="2" cellspacing="2">
		<tr>
			<td width="130"> Nama </td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td width="130"> Email </td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td><input type="submit" name="btnLogin" value="Login">
				<input type="reset" name="reset" value="Reset"></td>
		</tr>
	</table>
</form>
</body>
</html>