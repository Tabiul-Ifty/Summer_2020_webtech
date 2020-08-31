<?php
	require_once('../service/productService.php');

	//create new user
	if(isset($_POST['product_create'])){
		//$username 	= $_POST['username'];
		//$password 	= $_POST['password'];
		//$email 		= $_POST['email'];

		$product_id  	=>   $_POST['product_id'];
		$name	        =>   $_POST['name'];
		$description    =>   $_POST['description'];
		$quantity   	=>   $_POST['quantity'];
		$date 			=>	 $_POST['date'];
		$price          =>	 $_POST['price'];
		$status         =>   $_POST['status'];
		$product_img    =>   $_POST['product_img'];

		
		if(empty($product_id) || empty($name) || empty($description) || empty($quantity) || empty($date) || empty($price) || empty($status) || empty($product_img)){
			header('location: ../views/productCreate.php?error=null');
		}else{
			$product = [
				'product_id'	=>   $product_id,
				'name'	        =>   $name,
				'description'   =>   $description,
				'quantity'		=>   $quantity,
				'date' 			=>	 $date,
				'price'         =>	 $price,
				'status'        =>   $status,
				'product_img'   =>   $product_img

			];

			$stat = product_create($product);
			if($stat){
				header('location: ../views/product_list.php?msg=success');
			}else{
				header('location: ../views/product_create.php?error=dberror');
			}
		}	
	}

	//edit new user
	if(isset($_POST['product_update'])){
		$product_id  	=>   $_POST['product_id'];
		$name	        =>   $_POST['name'];
		$description    =>   $_POST['description'];
		$quantity   	=>   $_POST['quantity'];
		$date 			=>	 $_POST['date'];
		$price          =>	 $_POST['price'];
		$status         =>   $_POST['status'];
		$product_img    =>   $_POST['product_img'];

		if(empty($product_id) || empty($name) || empty($description) || empty($quantity) || empty($date) || empty($price) || empty($status) || empty($product_img)){
			header('location: ../views/productEdit.php?id='.$id);
		}else{
			$product = [
				'product_id'	=>   $product_id,
				'name'	        =>   $name,
				'description'   =>   $description,
				'quantity'		=>   $quantity,
				'date' 			=>	 $date,
				'price'         =>	 $price,
				'status'        =>   $status,
				'product_img'   =>   $product_img

			];

			$stat = product_update($product);
			if($stat){
				header('location: ../views/product_list.php?msg=success');
			}else{
				header('location: ../views/product_edit.php?id='.$id);
			}
		}	
	}

	if(isset($_POST['product_delete'])){
		$product_id  	=>   $_POST['product_id'];
		$name	        =>   $_POST['name'];
		$description    =>   $_POST['description'];
		$quantity   	=>   $_POST['quantity'];
		$date 			=>	 $_POST['date'];
		$price          =>	 $_POST['price'];
		$status         =>   $_POST['status'];
		$product_img    =>   $_POST['product_img'];


		if(empty($product_id) || empty($name) || empty($description) || empty($quantity) || empty($date) || empty($price) || empty($status) || empty($product_img)){
			header('location: ../views/productEdit.php?id='.$id);
		}else{
			$product = [
				'product_id'	=>   $product_id,
				'name'	        =>   $name,
				'description'   =>   $description,
				'quantity'		=>   $quantity,
				'date' 			=>	 $date,
				'price'         =>	 $price,
				'status'        =>   $status,
				'product_img'   =>   $product_img

			];

			$stat = produc_delete($product);
			if($stat){
				header('location: ../views/product_list.php?msg=success');
			}else{
				header('location: ../views/product_delete.php?id='.$id);
			}
		}	
	}


?>