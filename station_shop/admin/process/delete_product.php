<?php 

	include "../../config/config.php";
	$product_id = $_GET['product_id'];

	$sql = "DELETE FROM product_tbl WHERE product_id = $product_id";

	$query = $koneksi->query($sql);

	header("location:../home_admin.php");
 ?>