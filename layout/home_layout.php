<div class="row">
<?php 
	$db = new database();
	
 ?>
        	<!-- Slider -->
        	<div class="col-lg-9 col-md-12">
                <div class="slider">
                    <ul class="bxslider">
                        <li>
                            <a href="index.html">
                                <img src="images/banner_slider-3.jpg" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <img src="images/banner_slider-2.jpg" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <img src="images/banner_slider-1.jpg" alt=""/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Slider -->

			<!-- Product Selection, visible only on large desktop -->
            <div class="col-lg-3 visible-lg">
                <div class="row text-center">
                    <div class="col-lg-12 col-md-12 hero-feature">
                        <div class="thumbnail">
                        	<a href="detail.html" class="link-p first-p">
		                    	<img src="images/product-1.jpg" alt="">
		                    </a>
		                    <div class="caption prod-caption">
		                        <h4><a href="detail.html">Funkalicious Print T-Shirt</a></h4>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
		                        <p>
		                        	<div class="btn-group">
			                        	<a href="#" class="btn btn-default">$ 928.96</a>
			                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
		                        	</div>
		                        </p>
		                    </div>
		                </div>
                    </div>
                </div>
            </div>
            <!-- End Product Selection -->
        </div>

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
				<!-- End Best Seller -->

        	</div>

        	<div class="clearfix visible-sm"></div>

			<!-- Featured -->
        	<div class="col-lg-9 col-md-9 col-sm-12">
        		<div class="col-lg-12 col-sm-12">
            		<span class="title">FEATURED PRODUCTS</span>
            	</div>
            	<?php 
            		$sql3 = "SELECT * FROM ms_tshirt WHERE featured = 1 ORDER BY create_date DESC LIMIT 9";
            		$tshirt = $db->db_queryresult($sql3);

            		if(count($tshirt)>0){
            			foreach($tshirt as $row){
            	 ?>
	            <div class="col-lg-4 col-sm-4 hero-feature text-center">
	                <div class="thumbnail">
	                	<a href="" class="link-p">
	                    	<img src="<?php echo $display_image_url . $row['tshirt_image']; ?>" alt="">
	                	</a>
	                    <div class="caption prod-caption">
	                        <h4><a href="<?php echo $base_url; ?>index.php?detail&tshirt_id=<?php echo $row['tshirt_id']; ?>"><?php echo $row['tshirt_name']; ?></a></h4>
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
        	<!-- End Featured -->

        	<div class="clearfix visible-sm"></div>

			

        </div>