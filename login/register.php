<!DOCTYPE html>
<html>
<head>
		<title>Pratikum Pemrograman WEB</title>
		<?php
require 'koneksi.php';
if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
		$privilege = $_POST['privilege'];
		$query = mysql_query("INSERT into login
		VALUES('','$username','$password','$privilege')");
		if($query){
			header('location: ./login.php');
		} else{
			echo "Gagal register";
		}
		}
		?>
</head>
<body>
<form method="POST">
		<u>REGISTER</u>
				<table>
						<tr>
								<td>Username</td>
								<td><input type="text" name="username"></td>
						</tr>
						<tr>
								<td>Password</td>
								<td><input type="password" name="password"></td>
						</tr>
						<tr>
								<td>Hak akses</td>
								<td>
						<select name="privilege">
						<option disabled selected>--pilih hak akses--</option>
						<option value="1">Admin</option>
						<option value="0">User biasa</option>
						</select>
								</td>
						</tr>
						<tr>
				<td><input type="submit" name="submit" value="Register"></td>
						</tr>
			</table>
	</form>
</body>
</html>