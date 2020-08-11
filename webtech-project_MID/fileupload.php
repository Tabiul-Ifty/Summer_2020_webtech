<?php

	if(isset($_POST['submit'])){

		
		$filedir = 'upload/'.$_FILES['myfile']['name'];
		
		//$filedir = 'upload/'.time().'.pdf';

		if(move_uploaded_file($_FILES['myfile']['tmp_name'], $filedir)){
			header('location: profile.php');
		}else{
			header('location: profile.php?msg=invalid_username/password');
		}
	}
?>