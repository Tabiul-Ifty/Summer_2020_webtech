<?php
	
	require_once('../php/sessionController.php');	
	require_once('../service/userService.php');	


	$user = getById($_GET['id']);

	if(isset($_GET['error'])){
		if($_GET['error'] == 'dberror'){
			echo "something wrong ...please try again.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>
	<form action="../php/productController.php" method="post">
		<fieldset>
			<legend>Edit User</legend>
			<table>
				<tr>
					<td>Product Id</td>
					<td><input type="text" name="product_id"></td>
				</tr>
				<tr>
					<td>Product Name</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Description</td>
					<td><input type="text" name="description"></td>
				</tr>
				<tr>
					<td>Quantity</td>
					<td><input type="text" name="quantity"></td>
				</tr>
				<tr>
					<td>Date</td>
					<td><input type="Date" name="date"></td>
				</tr>
				<tr>
					<td>Price</td>
					<td><input type="text" name="price"></td>
				</tr>
				<tr>
					<td>Status</td>
					<td><input type="text" name="status"></td>
				</tr>
				<tr>
					<td>Product image</td>
					<td><input type= "file" name="product_img"></td>
				</tr>
					<td></td>
					<td>
						<input type="hidden" name="product_id" value="<?=$product['product_id']?>">
						<input type="submit" name="product_update" value="Update">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>