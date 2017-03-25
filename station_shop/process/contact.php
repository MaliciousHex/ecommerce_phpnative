<?php 
	

	include "../config/config.php";

	$author = $_POST['author'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$text = $_POST['text'];

	$sql = "INSERT INTO contact_tbl(author,email,subject,text) 
	VALUES ('$author','$email','$subject','$text')";

	$qauthor = $koneksi->query($sql);

	header('location:../contact.php');
 ?>


