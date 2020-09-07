<?php
	
	if(isset($_GET['error'])){

		if($_GET['error'] == 'null'){
			echo "username/password can't left empty...";
		}

		if($_GET['error'] == 'invalid'){
			echo "invalid username/password";
		}

		if($_GET['error'] == 'invalid_request'){
			echo "invalid request...please login first..";
		}
	}

	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'success'){
			echo "Registration done! now you can sign in...";
		}
	}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>

	<h1>Login page</h1>

	<form action="../php/loginController.php" method="post" onsubmit="return validateform()">
		<fieldset>
			<legend>Login</legend>
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
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
<script type="text/javascript">
	"use strict"

function validate(){
	//var username  = document.getElementById('username').value;
	//var password  = document.getElementById('userpassword').value;
	//var error = false;
	/*if(username == ""){
		document.getElementById('userMsg').innerHTML = "Username Can't left empty!";
		error = true;
	}else if(password == ""){
		document.getElementById('passMsg').innerHTML = "PasswordCan't left empty!";
		error =true;
	}*/

	var name=document.form1.username.value;  
	var password=document.form1.password.value;  
	  
	if (name==null || password==""){  
	  alert("Name and password can't be blank");  
	  return false;  
	}else if(password.length<6){  
	  alert("Password must be at least 6 characters long.");  
	  return false;  
	  }  
	}  
	if(error){
		return false;
	}else{
		return true;
	}
	

var f2 = function(){
	var username = document.getElementById('username').value;
	var password = document.getElementById('userpassword').value;
	
	if(username != ''){
		document.getElementById('userMsg').innerHTML = "";
	}

	if(password != ''){
		document.getElementById('passMsg').innerHTML = "";
	}


</script>