<?php
	require_once('../php/sessionController.php');
	require_once('../service/userService.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>user List</title>
</head>
<body>

	<h1>User List page</h1>
	<a href="home.php"> Home</a>
	<br>

	<?php
		$user = getAllUser();
	?>
	<br>

	<table border=1> 
		<tr>
			<td>ID</td> 
			<td>NAME</td>
			<td>password</td> 
			<td>Email</td>
			<td>Action</td>
		</tr>
		<?php for($i=0; $i != count($user); $i++ ){ ?>
			<tr>
				<td><?= $user[$i]['id'] ?></td>
				<td><?= $user[$i]['username'] ?></td>
				<td><?= $user[$i]['password'] ?></td>
				<td><?= $user[$i]['email'] ?> </td>
				<td>
					<a href="edit.php?id=<?=$user[$i]['id']?>"> Edit</a> |
					<a href="delete.php?id=<?=$user[$i]['id']?>"> Delete</a> 

				</td>
			</tr>
		<?php } ?>
	</table>

</body>
</html>