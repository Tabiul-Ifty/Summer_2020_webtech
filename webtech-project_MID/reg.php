<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<form action="regcheck.php" method="post">
		<center>
		<fieldset>
			<legend>Signup</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="uname"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"><a href="homepage.php">&ensp;Cancel</a>&ensp;</td>
				</tr>
			</table>
		</fieldset>
		</center>
	</form>
	
</body>
</html>