<?php 

// Session
ob_start();
session_start();
ob_end_clean();

// Session end

    include "config/config.php";
    include "config/database_config.php";
    include "classes/utility.php";
    include "classes/database.php";
    include "classes/shoppingcart.php";
    include "classes/customer.php";
    include "classes/order.php";
    include "classes/t-shirt.php";
    include "classes/brand.php";
 ?><!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.indopeo.com/demo/mimity/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 27 Jun 2014 06:52:11 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home - Mimity</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
	<header>
	    <div class="container">
	        <div class="row">

	        	<!-- Logo -->
	            <div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
	            	<div class="well logo">
	            		<a href="index.html">
	            			Distro <span>Bandung</span>
	            		</a>
	            		<div>Distro Bandung Indonesia.</div>
	            	</div>
	            </div>
	            <!-- End Logo -->

				<!-- Search Form -->
	            <div class="col-lg-5 col-md-5 col-sm-7 col-xs-12">
	            	<div class="well">
	                    <form action="#">
	                        <div class="input-group">
	                            <input type="text" class="form-control input-search" placeholder="Enter something to search"/>
	                            <span class="input-group-btn">
	                                <button class="btn btn-default no-border-left" type="submit"><i class="fa fa-search"></i></button>
	                            </span>
	                        </div>
	                    </form>
	                </div>
	            </div>
	            <!-- End Search Form -->

	            <!-- Shopping Cart List -->
	            <div class="col-lg-3 col-md-4 col-sm-5">
	                <div class="well">
	                    <div class="btn-group btn-group-cart">
	                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	                            <span class="pull-left"><i class="fa fa-shopping-cart icon-cart"></i></span>
	                            <span id="totalqty" class="pull-left">Shopping Cart: 
                                    <!-- Start Cart -->
                                    <?php 
                                        if(isset($_SESSION["cart"])){
                                            $cart = new shoppingcart();
                                            echo $cart->gettotalqty();
                                        }
                                     ?>
                                    <!-- End Cart -->
                                 item(s)</span>
	                            <span class="pull-right"><i class="fa fa-caret-down"></i></span>
	                        </button>
                            
	                        <ul class="dropdown-menu cart-content" role="menu">
                                <?php 
                                $no=1;
                                $total=0;
                                for ($i=0;$i<=count($_SESSION["cart"])-1;$i++) {
                                    $tshirt_obj = new tshirt($_SESSION["cart"][$i]["tshirt_id"]);
                                    ?>  

                                    <li>
                                        <a href="<?php echo $base_url; ?>index.php?detail&tshirt_id=<?php echo $tshirt_obj->tshirt_id(); ?>">
                                            <b><?php echo $tshirt_obj->tshirt_name(); ?></b>
                                            <?php $subtotal = $tshirt_obj->tshirt_price() * $_SESSION["cart"][$i]["qty"]; ?>

                                            <span>x<?php echo $_SESSION["cart"][$i]["qty"]; ?> $<?php echo number_format($subtotal,2,",","."); ?></span>
                                        </a>
                                    </li>

                                <?php 
                                    $total = $total + $subtotal;
                                } 

                                ?>
                                
                                <li class="divider"></li>
                                <li><a href="<?php echo $base_url;  ?>index.php?shoppingcart">Total: $<?php echo number_format($total,2,",","."); ?></a></li>
                            </ul>
                            
	                    </div>
	                </div>
	            </div>
	            <!-- End Shopping Cart List -->
	        </div>
	    </div>
    </header>

	<!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <?php include("layout/menu_layout.php"); ?>
    </nav>
    <!-- End Navigation -->

    <div class="container main-container">
        <?php
				   if (isset($_GET["catalogue"])) {
					 include("layout/catalogue_layout.php");
				   }
				   else if (isset($_GET["shoppingcart"])) {
					 include("layout/cart_layout.php"); 
				   }
				   else if (isset($_GET["checkout"])) {
					 include("layout/checkout_layout.php");   
				   }
				   else if (isset($_GET["about"])) {
					 include("layout/about_layout.php");   
				   }
				   else if (isset($_GET["contact"])) {
					 include("layout/contact_layout.php");   
				   }
				   else if (isset($_GET["detail"])) {
					include("layout/detail_layout.php"); 
				   }
				   else if (isset($_GET["thank"])) {
					include("layout/thank_layout.php"); 
				   }
				   else {
					include("layout/home_layout.php"); 
				   }
				 ?>
		<?php 
		
		  
		?>
	</div>

	<footer>
    	<div class="container">
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Information</h4>
        			<ul>
        				<li><a href="about.html">About Us</a></li>
        				<li><a href="typography.html">Policy Privacy</a></li>
        				<li><a href="typography.html">Terms and Conditions</a></li>
        				<li><a href="typography.html">Shipping Methods</a></li>
        			</ul>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Categories</h4>
        			<ul>
        				<li><a href="catalogue.html">Cras justo odio</a></li>
        				<li><a href="catalogue.html">Dapibus ac facilisis in</a></li>
        				<li><a href="catalogue.html">Morbi leo risus</a></li>
        				<li><a href="catalogue.html">Porta ac consectetur ac</a></li>
        			</ul>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Customer Service</h4>
        			<ul>
        				<li><a href="contact.html">Contact Us</a></li>
        				<li><a href="#">YM: erwin_heldy</a></li>
        				<li><a href="#">Telp: 087825376xxx</a></li>
        				<li><a href="#">Email: erwin.heldy@gmail.com</a></li>
        			</ul>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-3 col-sm-6">
        		<div class="column">
        			<h4>Follow Us</h4>
        			<ul class="social">
        				<li><a href="#">Google Plus</a></li>
        				<li><a href="#">Facebook</a></li>
        				<li><a href="#">Twitter</a></li>
        				<li><a href="#">RSS Feed</a></li>
        			</ul>
        		</div>
        	</div>
        </div>
        <div class="navbar-inverse text-center copyright">
        	Copyright &copy; 2013 Mimity All right reserved
        </div>
    </footer>

    <a href="#top" class="back-top text-center" onclick="$('body,html').animate({scrollTop:0},500); return false">
    	<i class="fa fa-angle-double-up"></i>
    </a>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/jquery.blImageCenter.js"></script>
    <script src="js/mimity.js"></script>
</body>

<!-- Mirrored from demo.indopeo.com/demo/mimity/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 27 Jun 2014 06:52:36 GMT -->
</html>

<script type="text/javascript" language="javascript">
  

  function showcart(){
      //alert("Test");
        $.ajax({
            type:"POST",
            url:"<?php echo $base_url; ?>serviceforajax/showcart.php",
            beforeSend: function() {
                
            },
            success: function(datares) {
                //alert("Ok");
              
                $("#shoppingcarttable tbody").html(datares);
                
                // start edit
                $(".edit_cart").click(function(){
               
                    var tmp="#qty" + $(this).attr("tshirt-id");
                  
                    editcart($(this).attr("tshirt-id"),$(tmp).val());

                });
                // end edit

                // start remove
                $(".remove_cart").click(function(){
                    //alert($(this).attr("shoes-id"));
                    var yesno;
                    yesno = window.confirm("Are You sure to delete?");
                    if(yesno==true){
                        removecart($(this).attr("tshirt-id"));
                    }
                });
                // end remove
            }
        });
    }

    function editcart(tshirt_id,qty){
     
        $.ajax({
            type:"POST",
            url:"<?php echo $base_url; ?>serviceforajax/editcart.php",
            data:"tshirt_id=" + tshirt_id + "&qty=" + qty,
            beforeSend: function(){
                $("#preloader").fadeIn(1000);
            },
            success:function(datares){
                $("#preloader").fadeOut(1000);
                $("#totalqty").html("<strong>" + datares + "&nbsp;items</strong>");
                showcart();
            }

        });
    }

    function removecart(tshirt_id){
        $.ajax({
            type:"POST",
            url:"<?php echo $base_url; ?>serviceforajax/removecart.php",
            data:"tshirt_id=" + tshirt_id,
            beforeSend: function(){
                $("#preloader").fadeIn(800);
            },
            success:function(datares){
                // $("#preloader").fadeOut(800);
                $("#totalqty").html("<strong>" + datares + "&nbsp;items</strong>");
                showcart();
            }

        });
    }
  
  $(document).ready(function() {

     // Start addtocart

     $(".addtocart").click(function(){
       
        var qty=1;
        if($("#qty").val()!="" && $("#qty").val()!=null && $("#qty").empty()){
            qty = $("#qty").val();
        }

        $.ajax({
            type:"POST",
            url:"<?php echo $base_url; ?>serviceforajax/addtocart.php",
            data:"tshirt_id=" + $(this).attr("tshirt-id") + "&qty=" + qty,
            beforeSend: function(){
              
            },
            success: function(resdata){
               
                $("#totalqty").html("<strong>" + resdata + "&nbsp;items</strong>");
            }
        });
     });

     // End addtocart

     // clearcart
     $("#clearcart").click(function(){
        $.ajax({
            type:"POST",
            url:"<?php echo $base_url; ?>serviceforajax/clearcart.php",
            beforeSend:function(){
                $("#preloader").fadeIn(1500);
            },
            success:function(datares){
                $("#preloader").fadeOut(1500);
                showcart();
                $("#totalqty").html("<strong>" + datares + "&nbsp;</strong>")
            }

        });
        
        
     });
     // endclearcart

     // start showcart
     showcart();
     // end showcart

     // start removecart
     removecart($(this).attr("tshirt-id"));
     // end removecart
  });   
     
    
</script>
