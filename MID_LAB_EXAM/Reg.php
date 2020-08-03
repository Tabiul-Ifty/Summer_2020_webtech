<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<form action="regcheck.php" method="post">
		<fieldset>
			<legend>Registration</legend>
			<table>
				<tr>
					<td>Id</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="con_password"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="Email" name="email"></td>
				</tr>
				<tr>
					<td>User Type [USER/Admin]</td>
					<td> <select name="" id="">
    						<option value="user"></option>
    						<option value="admin"></option>
    					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Register"> <a href="login.php">Login</a><br> </td>

				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>