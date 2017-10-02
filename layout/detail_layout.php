<?php 
	$db = new database();
	if(isset($_GET['tshirt_id']) && !empty($_GET['tshirt_id'])){
		$tshirt_obj = new tshirt($_GET["tshirt_id"]);
		$utility_obj = new utility();
 ?>



  <div class="row">
        	<div class="col-lg-3 col-md-3 col-sm-12">

				<!-- Categories -->
        		<div class="col-lg-12 col-md-12 col-sm-6">
	        		<div class="no-padding">
	            		<span class="title">CATEGORIES</span>
	            	</div>
					<div class="list-group list-categ">
					<?php 
					$sql1 = "SELECT * FROM ms_brand ORDER BY brand_name ASC";
					$brand = $db->db_queryresult($sql1);

					if(count($brand)>0){

						foreach($brand as $row){
					?>
						
						<a href="index.php?catalogue&brand_id=<?php echo $row['brand_id']; ?>" class="list-group-item"><?php echo $row["brand_name"]; ?></a>
						
					<?php 
						}


					} ?>
					</div>
				</div>
				<!-- End Categories -->

				<!-- Best Seller -->
				<div class="col-lg-12 col-md-12 col-sm-6">
					<div class="no-padding">
	            		<span class="title">BEST SELLER</span>
	            	</div>
	            	<?php 
	            		$sql2 = "SELECT * FROM ms_tshirt WHERE best_seller = 1";
	            		$best = $db->db_queryresult($sql2);

	            		if(count($best)>0){
	            			foreach($best as $row){
	            	 ?>
					<div class="hero-feature hidden-sm">
		                <div class="thumbnail text-center">
		                	<a href="<?php echo $base_url; ?>index.php?detail&tshirt_id=<?php echo $row['tshirt_id']; ?>" class="link-p">
		                    	<img src="<?php echo $display_image_url . $row['tshirt_image'];?>" alt="">
		                	</a>
		                    <div class="caption prod-caption">
		                        <h4><a href="<?php echo $base_url; ?>index.php?detail&tshirt_id=<?php echo $row['tshirt_id']; ?>"><?php echo $row["tshirt_name"]; ?></a></h4>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
		                        <p>
		                        	<div class="btn-group">
			                        	<a href="#" class="btn btn-default">$ <?php echo $row["tshirt_price"]; ?></a>
			                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
		                        	</div>
		                        </p>
		                    </div>
		                </div>
		            </div>
		            <?php 	
		        			}
		            	} 
		            ?>
		            
				</div>
				<!-- End Best Seller -->
        	</div>

        	<div class="clearfix visible-sm"></div>

			<!-- Product Detail -->
        	<div class="col-lg-9 col-md-9 col-sm-12">
        		<div class="col-lg-12 col-sm-12">
            		<span class="title"><?php echo $tshirt_obj->tshirt_name(); ?></span>
            	</div>
	            <div class="col-lg-12 col-sm-12 hero-feature">
            		<div class="sp-wrap">
						<a href="<?php echo $display_image_url . $tshirt_obj->tshirt_image();?>"><img src="<?php echo $display_image_url . $tshirt_obj->tshirt_image();?>" alt=""></a>
					</div>
					<h4><?php echo $tshirt_obj->tshirt_name(); ?></h4>
					98 items in stock
					<hr/>
					Actually this part of clothes is very unique and original. It is a way of self-expression because nowadays making some logo or phrase has become very popular. Obviously the T-shirts are the part of modern culture and they have a great influence on teens because of their freedom and epatage. We are offering you our unique and original products.
					<hr/>
					<h3>$<?php echo $tshirt_obj->tshirt_price(); ?></h3>
					<div class="input-qty-detail">
						<input type="text" id="qty" class="form-control input-qty text-center" value="1">
						<button id="aaxx" class="btn btn-primary pull-left addtocart" href="javascript:" tshirt-id="<?php echo $tshirt_obj->tshirt_id();  ?>" >add to cart</button>

					</div>
					<br/>
					<hr/>
					<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
						<a class="addthis_button_preferred_1"></a>
						<a class="addthis_button_preferred_2"></a>
						<a class="addthis_button_preferred_3"></a>
						<a class="addthis_button_preferred_4"></a>
						<a class="addthis_button_compact"></a>
					</div>
					<script type="text/javascript" src="../../../s7.addthis.com/js/300/addthis_widget.js#pubid=xa-4f0c254f1302adf8"></script>
	            </div>
	            <div class="clearfix"></div>
	            <div class="col-lg-12 col-sm-12">
            		<span class="title">RELATED PRODUCTS</span>
            	</div>
            	<?php 
            		$temp = $tshirt_obj->brand_id();

            		$sql4 = "SELECT * FROM ms_tshirt WHERE brand_id = $temp ORDER BY create_date DESC LIMIT 3";
            		$related = $db->db_queryresult($sql4);
            		if(count($related)>0){
            		foreach($related as $row){
            	 ?>
            	<div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="<?php echo $base_url; ?>index.php?detail&tshirt_id=<?php echo $row['tshirt_id']; ?>" class="link-p">
	                    	<img src="<?php echo $display_image_url . $row['tshirt_image'];?>" alt="">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="<?php echo $base_url; ?>index.php?detail&tshirt_id=<?php echo $row['tshirt_id']; ?>"><?php echo $row["tshirt_name"]; ?> </a></h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
	                        <p>
	                        	<div class="btn-group">
		                        	<a href="#" class="btn btn-default">$ <?php echo $row['tshirt_price']; ?></a>
		                        	<a href="<?php echo $base_url; ?>index.php?detail&tshirt_id=<?php echo $row['tshirt_id']; ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
	                        	</div>
	                        </p>
	                    </div>
	                </div>
	            </div>
	            <?php 
	            	}
	            	}
	             ?>
	           
        	</div>
        	<!-- End Product Detail -->
			<?php } ?>

        </div>

