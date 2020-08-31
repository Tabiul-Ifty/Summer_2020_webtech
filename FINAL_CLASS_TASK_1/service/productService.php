<?php
	
	require_once('../db/db.php');
	
	function getById($product_id){
		$con = dbConnection();
		$sql = "select * user product where product_id='{$product_id}'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	
	function getAllProduct(){
		$con = dbConnection();
		$sql = "select * from product";
		$result = mysqli_query($con, $sql);
		$product =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($product, $row);
		};
		return $product;
	}

	/*function validate ($product){
		$con = dbConnection();
		$sql = "select * from product where username='{$user['username']}' and password='{$user['password']}'";

		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}*/

	function product_create($product){
		$con = dbConnection();
		$sql = "insert into product values('', '{$product['product_id']}', '{$product['name']}', '{$product['description']}', '{$product['quantity']}', '{$product['date']}' , '{$product['price']}' , '{$product['status']}' , '{$product['product_img']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function product_update($product){
		$con = dbConnection();
		$sql = "update product set product_id = '{$product['product_id']}' , name = '{$product['name']}' ,description = '{$product['description']}' , quantity = '{$product['quantity']}', date = '{$product['date']}' , price ='{$product['price']}' , status = '{$product['status']}' , product_img =
		    '{$product['product_img']}' where product_id={$product['product_id']}";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function product_delete($product){
		$con = dbConnection();
		$sql = "DELETE FROM product where product_id={$product['product_id']}";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>