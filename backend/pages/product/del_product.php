<?php
	include_once '../../../frontend/database/config_db.php';
	if(isset($_GET['id']) && is_numeric($_GET['id'])){
		// get the 'id' variable from the URL
		$id = $_GET['id'];
		$product_photo = mysqli_query($conn,"SELECT Product_photo FROM product WHERE ProductId=$id");
		$product_photo = mysqli_fetch_assoc($product_photo);
		$product_photo = $product_photo['Product_photo'];
		
		
		$sql = "DELETE FROM product WHERE ProductId = $id";
		$result = mysqli_query($conn,$sql);
		
		
		
		if(!$result){
			echo 'Error in deleting a record!';
		}else{
			unlink("../../assets/img/product_img/" . $product_photo);
			header("location: ../../index.php?product=product&msg=202");
		}
	}
?>