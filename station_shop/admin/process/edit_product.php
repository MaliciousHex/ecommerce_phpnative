<?php 

	include '../../config/config.php';
	
	$product_id = $_POST['product_id'];
	$product_name = htmlentities($_POST['product_name'],ENT_QUOTES);
	$product_description = htmlentities($_POST['product_description'],ENT_QUOTES);
	$image_old = $_POST['image_old'];
	$price = $_POST['price'];
	$stock = $_POST['stock'];
	$brand = htmlentities($_POST['brand'],ENT_QUOTES);

	if($_FILES['images']['error'] == 0){
		$image = $_FILES['images']['name'];
		move_uploaded_file($_FILES['images']['tmp_name'],'../../images/product/'.$image);

		
		$sql = "UPDATE product_tbl SET product_name = '$product_name',product_description = '$product_description',gambar = '$image',price = '$price',stock = '$stock',price = '$price',brand='$brand' WHERE product_id = $product_id";
	

	}else{
			$sql = "UPDATE product_tbl SET product_name = '$product_name',product_description = '$product_description',gambar = '$image_old',price = '$price',stock = '$stock',price = '$price',brand='$brand' WHERE product_id = $product_id";

	
	}

	$qnews = $koneksi->query($sql);

	header("location:../home_admin.php");
 ?>