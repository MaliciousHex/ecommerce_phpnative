<?php 
	include("../config/config.php");
	include("../classes/utility.php");
	include("../classes/database.php");

	$tshirt_id = $_POST["tshirt_id"];
	$tshirt_name = $_POST["tshirt_name"];
	$tshirt_price = $_POST["tshirt_price"];

	$data = array("tshirt_name"=>"'" . $tshirt_name . "'",
					"tshirt_price"=>$tshirt_price,
					);

	$db_obj = new database(true);
	$result =$db_obj->db_update("ms_tshirt",$data,"tshirt_id=" . $tshirt_id);

	echo $result;
 ?>