<?php

$con = mysqli_connect("127.0.0.1", "root", "", "mid");
 

if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$uname = mysqli_real_escape_string($con, $_REQUEST['uname']);
$password = mysqli_real_escape_string($con, $_REQUEST['password']);
$email = mysqli_real_escape_string($con, $_REQUEST['email']);

if(empty($uname) || empty($password) || empty($email) )
	{
			//echo "null submission found!";
			header('location: reg.php?error=emptyfields');
			exit();
	}
else if (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $uname) ) {
		header("location: reg.php?error=invalidEmailName");
		exit();
	}
else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {

		header("location: reg.php?error=invalidEmail");
		exit();
	}
elseif (!preg_match("/^[a-zA-Z0-9]*$/", $uname)) {
		header("location: reg.php?error=invalidName");
		exit();
	}

else{

	$sql = "INSERT INTO user (name,email,password) VALUES ('$uname', '$email', '$password')";
	if(mysqli_query($con, $sql)){

	    header('location: login.php');
	} 

	else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}


}

mysqli_close($con);

?>