<?php

	if(isset($_GET['msg'])){
		echo $_GET['msg'];
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form action="logcheck.php" method="post">
		<fieldset>
			<legend>LogIn</legend>
			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td>Remember Me<input type="checkbox" id="" name="" value=""></td>
				</tr>
				<tr>
					
					<td><input type="submit" name="submit" value="Login"> <a href="Reg.php">Register</a><br> </td>
				</tr>
				
			</table>
		</fieldset>
	</form>
</body>
</html>