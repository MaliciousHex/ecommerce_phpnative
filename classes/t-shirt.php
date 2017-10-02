<?php 
	class tshirt extends database{
		private $_tshirt_id=0;
		private $_tshirt_name="";
		private $_tshirt_image="";
		private $_tshirt_price=0;
	 	private $_brand_id=0;
	 	private $_best_seller=0;
	 	private $_featured=0;
		private $_create_date="";
		private $sql="SELECT ms.*,mb.brand_name FROM ms_tshirt ms INNER JOIN ms_brand mb
						ON ms.brand_id=mb.brand_id  ";

		function __construct($tshirt_id="",$root=false){

			// set construct from parent
			parent::__construct($root);

			if($tshirt_id!=""){
				$sqlc=$this->sql . "WHERE ms.tshirt_id=" . $tshirt_id;

				// call fucntion db_getonerow() from parent
				$query=parent::db_getonerow($sqlc);

				if($query != NULL){
					$this->_tshirt_id 		= $query["tshirt_id"];
					$this->_tshirt_name		= $query["tshirt_name"];
					$this->_tshirt_image 	= $query["tshirt_image"];
					$this->_tshirt_price	= $query["tshirt_price"];
					$this->_brand_id		= $query["brand_id"];
					$this->_best_seller 	= $query["best_seller"];
					$this->_featured		= $query["featured"];
					$this->_create_date		= $query["create_date"]; 

				}

			}



		}

	

		function tshirt_id(){
			return $this->_tshirt_id;
		}

		function brand_id(){
			return $this->_brand_id;
		}

		function brand_name(){
			return $this->_brand_name;
		}

		function tshirt_name(){
			return $this->_tshirt_name;
		}

		function tshirt_image(){
			return $this->_tshirt_image;
		}

		function tshirt_price(){
			return $this->_tshirt_price;
		}


		function best_seller(){
			return $this->_best_seller;
		}

		function featured(){
			return $this->_featured;
		}

		function create_date(){
			return $this->_create_date;
		}

		function get_all($brand_id=0,$extshirt_id=0){
			$result = NULL;
			$sql = $this->sql;

			if($brand_id>0){
				$sql = $sql . "WHERE ms.brand_id=" . $brand_id . " ";

			}

			if($extshirt_id > 0){
				// tidak sama dengan di sql <>
				if(strpos($sql,"WHERE")>-1) {
					$sql = $sql . "AND ms.tshirt_id<>" . $extshirt_id;
				}else{
					$sql = $sql . "WHERE ms.tshirt_id<>" . $extshirt_id;
				}
			}

			$sql = $sql . " ORDER BY tshirt_id desc";

			$query=parent::db_queryresult($sql);
			$utility_obj = new utility();
			if(!$utility_obj->isarrayempty($query)){
				$result = $query;
			}

			return $result;
		}

	}
 ?>