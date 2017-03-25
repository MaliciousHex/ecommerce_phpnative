<?php 
	session_start();
	
	include "../../config/config.php";

	$username = $_POST['username'];
	$password = $_POST['password'];



	$sql = "SELECT * FROM admin_tbl WHERE username = '$username' AND password='$password'";
	$quser = $koneksi->query($sql);
	$rowuser = $quser->fetch_assoc();

	if(!empty($rowuser)){
		$_SESSION['username'] = $username;
		header("location:../home_admin.php");
	}else{
		header("location:../index.php?error1");
	}

 ?>

