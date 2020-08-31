<?php
	
	if(isset($_GET['error'])){
		if($_GET['error'] == 'dberror'){
			echo "something wrong ...please try again.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup page</title>
</head>
<body>
	<form action="../php/signupController.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Submit">
						<a href="login.php"> login </a>

					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	<div id = "data"></div>

	<script type="text/javascript">
		
		function ajax(){

			var name = document.getElementById('name').value;
			var name = document.getElementById('password').value;
			var name = document.getElementById('email').value;
			var xhttp = new XMLHttpRequest();
			
			/*xhttp.open('GET', 'abc.php?name='+name, false);
			xhttp.send();
			
			//document.getElementById('msg').innerHTML = xhttp.responseText;
			xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					//document.getElementById('msg').innerHTML =  this.responseText;
				}
			}*/


			xhttp.open('POST', 'signupController.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('name='+name && 'password='+password && 'email='+email);
			
			//document.getElementById('msg').innerHTML = xhttp.responseText;
			xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('data').innerHTML =  "reg done";

				}
			}
		}

		function abc(){
			alert('test');
		}
	</script>
</body>
</html>