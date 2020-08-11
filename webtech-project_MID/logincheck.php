<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$uname 		= $_POST['uname'];
		$password 	= $_POST['password'];

		if(empty($uname) || empty($password) ){
			echo "null submission found!";
		}
		elseif (!preg_match("/^[a-zA-Z0-9]*$/", $uname)) {
				header("location: login.php?error=invalidName");
				exit();
		}
		
		else{
			
			$con = mysqli_connect("127.0.0.1", "root", "", "mid");
			$sql = "SELECT name , password from user where name ='".$uname."' and password='".$password."'";

		$sql = "SELECT name , password from user where name ='$uname' and password='$password'";
			
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_assoc($result);

			if(count($row) > 0){
				$_SESSION['name'] = $row['name'];
				$_SESSION['status'] = "OK";
				header('location: homepage.php');
			}
			else{
				header('location: login.php?msg=invalid_username/password');
			}
		}	
	}

	else{
		//echo "invalid request";
		header('location: login.php');
	}

?>