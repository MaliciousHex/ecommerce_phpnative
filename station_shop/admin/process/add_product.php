<?php 
	
	include "../../config/config.php";
	$product_id = $_POST['product_id'];
	$product_name = htmlentities($_POST['product_name'],ENT_QUOTES);
	$product_description = htmlentities($_POST['product_description'],ENT_QUOTES);
	$image = $_FILES['images']['name'];
	$price = $_POST['price'];
	$stock = $_POST['stock'];
	$brand = htmlentities($_POST['brand'],ENT_QUOTES);

	move_uploaded_file($_FILES['images']['tmp_name'],'../../images/product/'.$image);

	$sql = " INSERT INTO product_tbl(product_name,product_description,gambar,price,stock,brand)
	VALUES('$product_name','$product_description','$image','$price','$stock','$brand' )";
	
	
	$quser = $koneksi->query($sql);

	header('location:../home_admin.php');

 ?>