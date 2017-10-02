<?php 
	
	class shoppingcart{
		function __construct(){
			if(!isset($_SESSION["cart"])){
				$_SESSION["cart"]=array();
			}
		}

		function checkcart($tshirt_id=0){
			$result=false;
			if($tshirt_id>0){
				for($i=0;$i<=count($_SESSION["cart"])-1;$i++){
					if($_SESSION["cart"][$i]["tshirt_id"]==$tshirt_id){
						$result=true;
						break;
					}
				}
			}
			return $result;
		}

		function changeqty($tshirt_id=0,$qty=0){
			if($tshirt_id>0 && $qty>0){
				for($i=0 ; $i<=count($_SESSION["cart"])-1;$i++){
					if($_SESSION["cart"][$i]["tshirt_id"]==$tshirt_id){
						$_SESSION["cart"][$i]["qty"]=$_SESSION["cart"][$i]["qty"]+$qty;
					}
				}
			}
		}

		function addtocart($tshirt_id=0,$qty=0){
			if($tshirt_id>0 && $qty>0){
				if($this->checkcart($tshirt_id)==true){
					$this->changeqty($tshirt_id,$qty);
				}else{
				 $_SESSION["cart"][]=array("tshirt_id"=>$tshirt_id,"qty"=>$qty);
				}
			}
		}

		function removecart($tshirt_id=0){
			
			if($tshirt_id>0){
				for($i=0 ; $i<=count($_SESSION["cart"])-1;$i++){
					if($_SESSION["cart"][$i]["tshirt_id"]==$tshirt_id){
						// untuk hapus array php
						array_splice($_SESSION["cart"],$i,1);
						break;
					}
				}
			}
		}

		function editcart($tshirt_id=0,$qty){
			if($tshirt_id>0 && $qty>0){
				for($i=0 ; $i<=count($_SESSION["cart"])-1;$i++){
					if($_SESSION["cart"][$i]["tshirt_id"]==$tshirt_id){
						// timpa qty
						$_SESSION["cart"][$i]["qty"]=$qty;
						break;
					}
				}
			}
		}

		function gettotalqty(){
			$total=0;

			
			for($i=0;$i<=count($_SESSION["cart"])-1;$i++){
				$total=$total+$_SESSION["cart"][$i]["qty"];
			}

			return $total;
		}

		function clearcart(){
			$_SESSION["cart"]=array();
			
		}
	}
 ?>