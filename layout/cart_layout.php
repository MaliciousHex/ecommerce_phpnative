 <?php 
    $utility_obj = new utility();

   


  ?>
  <div class="row">
        	<div class="col-lg-3 col-md-3 col-sm-12">

				<!-- Best Seller -->
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="no-padding">
	            		<span class="title">BEST SELLER</span>
	            	</div>
		                <div class="thumbnail col-lg-12 col-md-12 col-sm-6 text-center">
		                	<a href="detail.html" class="link-p">
		                    	<img src="images/product-8.jpg" alt="">
		                	</a>
		                    <div class="caption prod-caption">
		                        <h4><a href="detail.html">Penn State College T-Shirt</a></h4>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
		                        <p>
		                        	<div class="btn-group">
			                        	<a href="#" class="btn btn-default">$ 528.96</a>
			                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
		                        	</div>
		                        </p>
		                    </div>
		                </div>
		                <div class="thumbnail col-lg-12 col-md-12 col-sm-6 visible-sm text-center">
		                	<a href="detail.html" class="link-p">
		                    	<img src="images/product-9.jpg" alt="">
		                	</a>
		                    <div class="caption prod-caption">
		                        <h4><a href="detail.html">Ohio State College T-Shirt</a></h4>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, minima!</p>
		                        <p>
		                        	<div class="btn-group">
			                        	<a href="#" class="btn btn-default">$ 924.25</a>
			                        	<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
		                        	</div>
		                        </p>
		                    </div>
		                </div>
				</div>
				<!-- End Best Seller -->

        	</div>

        	<div class="clearfix visible-sm"></div>

			<!-- Cart -->
        	<div class="col-lg-9 col-md-9 col-sm-12">
        		<div class="col-lg-12 col-sm-12">
            		<span class="title">SHOPPING CART</span>
            	</div>
	            <div class="col-lg-12 col-sm-12 hero-feature">
					<table  class="table table-bordered tbl-cart">
						<thead>
                            <tr>
                                <td class="hidden-xs">Image</td>
                                <td>Product Name</td>
                                <td>Size</td>
                                <td>Color</td>
                                <td class="td-qty">Quantity</td>
                                <td>Unit Price</td>
                                <td>Sub Total</td>
                                <td>Remove</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php 
                                $no = 1;
                                $total = 0;
                                for($i=0;$i<=count($_SESSION["cart"])-1;$i++){
                                     $tshirt_obj = new tshirt($_SESSION["cart"][$i]["tshirt_id"]);
                                
                             ?>
                                <td class="hidden-xs">
                                    <a href="<?php echo $base_url; ?>index.php?detail&tshirt_id=<?php echo $tshirt_obj->tshirt_id(); ?>">
                                        <img src="<?php echo $display_image_url . $tshirt_obj->tshirt_image(); ?>" alt="Age Of Wisdom Tan Graphic Tee" title="" width="47" height="47" />
                                    </a>
                                </td>
                                <td><a href="<?php echo $base_url; ?>index.php?detail&tshirt_id=<?php echo $tshirt_obj->tshirt_id(); ?>"><?php echo $tshirt_obj->tshirt_name(); ?></a>
                                </td>
                                <td>
                                    <select name="">
                                        <option value="" selected="selected">S</option>
                                        <option value="">M</option>
                                    </select>
                                </td>
                                <td>-</td>
                                <td>
                                <?php 

                                    $subtotal = $tshirt_obj->tshirt_price() * $_SESSION["cart"][$i]["qty"];

                                 ?>
                                    <input type="text" id="qty<?php echo $tshirt_obj->tshirt_id(); ?>" name="" value="<?php echo $_SESSION["cart"][$i]["qty"]; ?>" class="input-qty form-control text-center" />
                                </td>

                                <td class="price">$ <?php echo number_format($subtotal,2,",",".");?></td>
                                <td>$ <?php echo number_format($subtotal,2,",",".");?></td>
                                <td class="text-center">
                                    <a href="javascript:" class="edit_cart" tshirt-id="<?php echo $tshirt_obj->tshirt_id(); ?>" rel="2">
                                        <img src="assets/edit.png" style="width:15px">
                                    </a> 
                                    &nbsp;
                                    <a href="javascript:" class="remove_cart" tshirt-id="<?php echo $tshirt_obj->tshirt_id(); ?>" rel="2">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </td>
                            </tr>

                            <?php 
                            $total = $total + $subtotal;

                                    } 

                            ?>
                            <tr>
                                <td colspan="6" align="right">Total</td>
                                <td class="total" colspan="2"><b>$ <?php echo number_format($total,2,",",".");?></b>
                                </td>
                            </tr>
                        </tbody>
					</table>
					<div class="btn-group btns-cart">
						<button type="button" class="btn btn-primary" onclick="window.location='index.php?catalogue'"><i class="fa fa-arrow-circle-left"></i> Continue Shopping</button>
						
						<button type="button" class="btn btn-primary" onclick="window.location='index.php?checkout'">Checkout <i class="fa fa-arrow-circle-right"></i></button>
					</div>

	            </div>
        	</div>
        	<!-- End Cart -->


        </div>
<?php 
  
?>