<?php  

	require_once('db,php');
	$id = $_GET['id'];

	$con = dbConnection();

	$sql = "SELECT * FROM USER WHERE id='$ id'";
	$result = mysql_query($con, $sql)
	$row = mysql_fetch_assoc($con, $sql);

	$employername = $row['employer_name']
	$companyname = $row['company_name']
	$contactno = $row['contact_no']
	$username = $row['username']

?>


<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>

	Employer Name
	<input type="text" name="employername" value = "<?=$employername ?>" id ="employername">
	Company Name
	<input type="text" name="companyname" value = "<?=$companyname ?>" id ="companyname">
	Contact number
	<input type="text" name="contactno" value = "<?=$contactno ?>" id ="contactno">
	User Name
	<input type="text" name="username" value = "<?=$username ?>" id ="username">

	<input type="button" name="button" value = "Edit" onclick="editEmp()">


	<script type="text/javascript">
		function editEmp(){
			var employername = document.getElementById('employername').value;
			var employername = document.getElementById('employername').value;
			var employername = document.getElementById('employername').value;
			var employername = document.getElementById('employername').value;
		}
		




	</script>

</body>
</html>