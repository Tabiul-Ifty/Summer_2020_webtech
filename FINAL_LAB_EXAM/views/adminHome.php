<?php
	require_once('sessionHeader.php');	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin-Home</title>
</head>
<body>
	<form action="adminCotoller.php">
		<fieldset>
			<legend>Register New Employee</legend>
			Employer Name
			<input type="text" id="employername" name="employername"> <br> 
			Company Name
			<input type="text" id="companyname" name="companyname"> <br>
			Contact No
			<input type="text" id="contactno" name="contactno"> <br>
			Username
			<input type="text" id="username" name="username"> <br>
			Password
			<input type="text" id="password" name="password"> <br>
			<div></div>
			<input type="button" value="Register" onclick="registerEmployee()">
		</fieldset>
	</form>
  <script>
    function registerEmployee() {
			var employername = document.getElementById('employername').value;
			var companyname = document.getElementById('companyname').value;
			var contactno = document.getElementById('contactno').value;
			var username = document.getElementById('username').value;
			var password = document.getElementById('password').value;

      var xhttp = new XMLHttpRequest();
			xhttp.open('POST', 'adminHomePageBackend.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('employername='+employername+'&companyname='+companyname+'&contactno='+contactno+'&username='+username+'&password='+password);
			xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					if (this.responseText == "Fields cannot be empty") {
						document.getElementsByTagName('div')[0].innerHTML = this.responseText;
					}
					else if (this.responseText == "Success") {
						document.getElementsByTagName('div')[0].innerHTML = this.responseText;
					}
					else {
						document.getElementsByTagName('div')[0].innerHTML = this.responseText;
					}
				}
			}
    }
	</script>
	<input type="button" value="Employee_List" onclick="checkEmployer()">
	<script>
		
	</script>
</body>
</html>