<?php 
	include("../config/config.php");
	include("../classes/utility.php");
	include("../classes/database.php");
	include("../classes/shoes.php");

	$db_obj = new database($root=true);
	$sql = "DELETE FROM ms_tshirt WHERE tshirt_id=" . $_POST["tshirt_id"];
	echo $sql;
	$result = 0;
	$result = $db_obj->db_execute($sql);

	echo $result;

 ?>
<!-- <script>alert("SADASDASDAS");</script>  -->