<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST['sname'];
		if($name==""){
			echo "name required";
		}
	}
				    
?>
<html>
	<head>
		<title>Lab Task</title>
	</head>
	<body>

					<form method="post">Name <br>
				    <input type="text" name="sname" value="" size="90px" placeholder="<?php 
				    	if(isset($name)){
				    		echo $name;

				    	}
				    	else
				    	{
				    		echo "can't be empty";
				    	}

				    ?>"
				    >
				</form>
					
				    										
	</body>
</html>
