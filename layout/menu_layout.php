<div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- text logo on mobile view -->
                <a class="navbar-brand visible-xs" href="index.html">Mimity Online Shop</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                 <?php
				   if (isset($_GET["catalogue"])) {
					 $home_active_class="";
					 $catalogue_active_class="class='active'"; 
					 $shoppingcart_active_class="";
					 $checkout_active_class="";
				   }
				   else if (isset($_GET["shoppingcart"])) {
					 $home_active_class="";
					 $catalogue_active_class=""; 
					 $shoppingcart_active_class="class='active'";
					 $checkout_active_class="";  
				   }
				   else if (isset($_GET["checkout"])) {
					 $home_active_class="";
					 $catalogue_active_class=""; 
					 $shoppingcart_active_class="";
					 $checkout_active_class="class='active'";   
				   }
				   else {
					$home_active_class="class='active'";
					 $catalogue_active_class=""; 
					 $shoppingcart_active_class="";
					 $checkout_active_class="";   
				   }
				 ?>
                         
                    <li><a href="index.php" <?php echo $home_active_class; ?>>Home</a></li>
                    <li><a href="index.php?catalogue" <?php echo $catalogue_active_class; ?>>Catalogue</a></li>
                    <li><a href="index.php?shoppingcart" <?php echo $shoppingcart_active_class; ?>>Shopping Cart</a></li>
                    <li><a href="index.php?checkout" <?php echo $checkout_active_class; ?>>Checkout</a></li>
                    <li class="nav-dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Pages <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="index.php?about">About Us</a></li>
							<li><a href="index.php?contact">Contact Us</a></li>
						</ul>
                    </li>
                </ul>
            </div>
        </div>