<?php
$user_name = $user_email = $name_error = $email_error = $user_gender = $gender_error = $id_error = "";
$user_dob_date = $user_dob_month = $user_dob_year = $date_error = $degree_error = $degree = $user_id = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		//$user_name = $_POST['user_name'];
		
		if(empty($_POST['user_name']))
			{ $name_error = "Name Cant be empty";}
		elseif (strlen($user_name)< 10) {
			$name_error = "Minimum 10 letters";
		}
		elseif(!preg_match("/^[a-zA-Z]*.-$/", $user_name)) {

			$name_error = "Only letters and white space allowed";
		}


		if(empty($_POST['user_email']))
			{ $email_error = "Email Can't be empty";}
		elseif (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
			$email_error = "Invalid email";
		}


		if(empty($_POST['user_gender']))
			{ $gender_error = "One of them has to be selected";}

		
		if(empty($_POST['user_dob_date']))
			{ $date_error = "date must be selected";}
		elseif(!preg_match("/[1-31]/", $user_dob_date)) {

			$date_error = "between 1 to 31";
		}

		elseif(empty($_POST['user_dob_month']))
			{ $date_error = "month must be selected";}
		elseif(!preg_match("/[1-12]/", $user_dob_month)) {

			$date_error = "between 1 to 12";
		}

		elseif(empty($_POST['user_dob_year']))
			{ $date_error = "year must be selected";}
		elseif(!preg_match("/[1900-2020]/", $user_dob_year)) {

			$date_error = "between 1900 to 2020";
		}


		if(empty($_POST['degree']))
			{ $degree_error = "At least 1";}

		if(empty($_POST['user_id']))
			{ $id_error = "User ID an'T be empty";}
		elseif ($user_id < 1) {
			$id_error = "Enter a positive number";
			# code...
		}


	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name Form</title>
</head>
<body>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Name: <input type="text" name="user_name" value="" placeholder="">
		<br>
			<?php if(isset($name_error)){
				 echo $name_error;
				 
			}?>
		<br/> 
		<br/>

		Email: <input type="Email" name="user_email" value="">
		<br>
		 <?php if (isset($email_error)){
		 	echo $email_error;
		 }

		 ?>
		
		<br/>

		
		 <fieldset>
		  <legend>Gender</legend>
		 	<input type="radio" name="user_gender">Male 
			<input type="radio" name="user_gender"> Female
			<input type="radio" name="user_gender">Other <br>

			<?php if(isset($gender_error)){
				echo $gender_error;
			}
			?>
		 </fieldset>

		 <br>

		  <fieldset>
		  <legend>Date of Birth</legend>
		 	<input type="text" name="user_dob_date"> /
		 	<input type="text" name="user_dob_month"> /
		 	<input type="text" name="user_dob_year"><br>

			<?php if(isset($date_error)){
				echo $date_error;
			}
			?>
		 </fieldset>
		 <br>

		  <fieldset>
		  <legend>Degree</legend>
		        <input type="checkbox" name="degree"> SSC
				<input type="checkbox" name="degree"> HSC
				<input type="checkbox" name="degree"> BSc.
				<input type="checkbox" name="degree"> MSc.
		 	
			<br>
			<?php if(isset($degree_error)){
				echo $degree_error;
			}
			?>
		 </fieldset>
		 <br>
		 Blood Group 
		 <select>
			<option>A-</option>
			<option>A+</option>
			<option>B+</option>
			<option>AB-</option>
			<option>AB+</option>
			<option>B-</option>
			<option>O+</option>
			<option>O-</option>
							
		</select>
		<br>

		 <fieldset>
		  <legend>Profile Picture</legend>
		  	User_ID
		        <input type="text" name="user_id"><br>
		        <br>
		    Picture    
				<input type="button" name="" value="Browse"> No file Selected
		 	
			<br>
			<?php if(isset($id_error)){
				echo $id_error;
			}
			?>
		</fieldset>

		<br>


	
		


		<input type="submit" name="" value="Submit">
	</form>



</body>
</html>