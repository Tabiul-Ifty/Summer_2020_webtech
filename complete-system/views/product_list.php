
<?php
	require_once('../php/sessionController.php');
	require_once('../service/productService.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Product List</title>
</head>
<body>

	<h1>Product List page</h1>

	<?php
		$product = getAllProduct();
	?>

	<table border=1> 
		<tr>
			<td>PRODUCT ID</td> 
			<td>NAME</td>
			<td>DESCRIPTION</td>
			<td>Quantity</td> 
			<td>DATE</td>
			<td>PRICE</td>
			<td>STATUS</td>
			<td>PRODUCT IMG</td>
		</tr>
		<?php for($i=0; $i != count($product); $i++ ){ ?>
			<tr>
				<td><?= $product[$i]['product_id'] ?></td>
				<td><?= $product[$i]['name'] ?></td>
				<td><?= $product[$i]['description'] ?></td>
				<td><?= $product[$i]['quantity'] ?></td>
				<td><?= $product[$i]['date'] ?> </td>
				<td><?= $product[$i]['price'] ?> </td>
				<td><?= $product[$i]['status'] ?> </td>
				<td><?= $product[$i]['product_img'] ?> </td>
				<td>
					<a href="product_edit.php?id=<?= $product[$i]['product_id']?>"> Edit</a> |
					<a href="product_delete.php?id=<?= $product[$i]['product_id']?>"> Delete</a> 

				</td>
			</tr>
		<?php } ?>
	</table>

</body>
</html>