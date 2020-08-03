<?php
	
	session_start();
	
	if(isset($_POST['submit'])){

		$name 	= $_POST['name'];
		$email 	= $_POST['email'];
		$password = $_POST['password'];

		if(empty($uname) || empty($password) || empty($email) ){
			echo "null submission found!";
		}
		else{
			$_SESSION['name'] 		= $name;
			$_SESSION['password'] 	= $password;
			$_SESSION['email'] 		= $email;

			$file = fopen('user.txt', 'a');
			$user = $name."|".$password."|".$email."/r/n".;
			fwrite($file, $user);
			fclose($file);


			$file = fopen('user.txt', 'w');
			$user = $name."|".$password."|".$email;
			fwrite($file, $user);
			fclose($file);

			header('location: login.php');
		}	

	}
	else{
		header('location: login.html');
	}




?>