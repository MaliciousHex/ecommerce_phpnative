<?php 
	include("../config/config.php");
	include("../classes/utility.php");
	include("../classes/database.php");
 	include("../classes/t-shirt.php");

 	$tshirt_obj = new tshirt($_REQUEST["tshirt_id"],true);
 	echo "{";
 	echo "\"tshirt_name\":" . "\"" . $tshirt_obj->tshirt_name() . "\",";
 	echo "\"tshirt_id\":" . "\"" . $tshirt_obj->tshirt_id() . "\",";
 	echo "\"brand_id\":" . "\"" . $tshirt_obj->brand_id() . "\",";
 	echo "\"price\":" . "\"" . $tshirt_obj->price() . "\",";
 	echo "\"stock\":" . "\"" .$tshirt_obj->stock() . "\",";
 	echo "\"description\":" . "\"" .$tshirt_obj->description() . "\""; 
 	echo "}";
 ?>