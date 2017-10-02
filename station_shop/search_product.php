<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Station Shop Theme - Products Page</title>
<meta name="keywords" content="station shop, products, theme, website templates, CSS, HTML" />
<meta name="description" content="Station Shop Products - free CSS template by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script type="text/javascript">

ddsmoothmenu.init({
    mainmenuid: "top_nav", //menu DIV id
    orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
    classname: 'ddsmoothmenu', //class added to menu's outer DIV
    //customtheme: ["#1c5a80", "#18374a"],
    contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" media="all" href="css/jquery.dualSlider.0.2.css" />
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.timers-1.2.js" type="text/javascript"></script>

</head>

<body>

<div id="templatemo_wrapper">
    <div id="templatemo_header">
        
        <div id="site_title">
            <h1><a href="http://www.templatemo.com" rel="nofollow">Free CSS Templates</a></h1>
        </div>
        
        <div id="header_right">
            <?php include "config/config.php";
            if (isset($_SESSION['username'])){ ?>
               <a href="#">My Account</a> | <a href="#">My Wishlist</a> | <a href="#">My Cart</a> | <a href="#">Checkout</a> | <a href="process/logout_submit.php">Log Out</a>
            <?php }else{ ?>
                 <a href="#">My Account</a> | <a href="#">My Wishlist</a> | <a href="#">My Cart</a> | <a href="#">Checkout</a> | <a href="admin/index.php">Log In</a>
            <?php } ?> 
        </div>
        
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menu">
        <div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php" class="selected">Home</a></li>
                <li><a href="products.php">Products</a>
                    <ul>
                        <li><a rel="nofollow" href="http://www.templatemo.com/page/1">Sub menu 1</a></li>
                        <li><a rel="nofollow" href="http://www.templatemo.com/page/2">Sub menu 2</a></li>
                        <li><a rel="nofollow" href="http://www.templatemo.com/page/3">Sub menu 3</a></li>
                  </ul>
                </li>
                <li><a href="about.php">About</a>
                    <ul>
                        <li><a rel="nofollow" href="http://www.templatemo.com/page/1">Sub menu 1</a></li>
                        <li><a rel="nofollow" href="http://www.templatemo.com/page/2">Sub menu 2</a></li>
                        <li><a rel="nofollow" href="http://www.templatemo.com/page/3">Sub menu 3</a></li>
                        <li><a rel="nofollow" href="http://www.templatemo.com/page/4">Sub menu 4</a></li>
                        <li><a rel="nofollow" href="http://www.templatemo.com/page/5">Sub menu 5</a></li>
                  </ul>
                </li>
                <li><a href="faqs.php">FAQs</a></li>
                <li><a href="checkout.php">Checkout</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
        <div id="menu_second_bar">
            <div id="top_shopping_cart">
                Shopping Cart: <strong>3 Products</strong> ( <a href="#">Show Cart</a> )
            </div>
            <div id="templatemo_search">
                <form action="search_product.php" method="get">
                  <input type="text" name="search" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" value="search" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
            <div class="cleaner"></div>
        </div>
    </div> <!-- END of templatemo_menu -->
    
    <div id="templatemo_main">
        <div id="sidebar" class="float_l">
            <div class="sidebar_box"><span class="bottom"></span>
                <h3>Categories<a href="http://www.onlyimage.com" title="only image" class="more_link"  target="_blank"></a></h3>   
                <div class="content"> 
                    <ul class="sidebar_list">
                        <li class="first"><a href="#">Aenean varius nulla</a></li>
                        <li><a href="#">Cras mattis arcu</a></li>
                        <li><a href="#">Donec turpis ipsum</a></li>
                        <li><a href="#">Fusce sodales mattis</a></li>
                        <li><a href="#">Maecenas et mauris</a></li>
                        <li><a href="#">Mauris nulla tortor</a></li>
                        <li><a href="#">Nulla odio ipsum</a></li>
                        <li><a href="#">Nunc ac viverra nibh</a></li>
                        <li><a href="#">Praesent id venenatis</a></li>
                        <li><a href="#">Quisque odio velit</a></li>
                        <li><a href="#">Suspendisse posuere</a></li>
                        <li><a href="#">Tempus lacus risus</a></li>
                        <li><a href="#">Ut tincidunt imperdiet</a></li>
                        <li><a href="#">Vestibulum eleifend</a></li>
                        <li class="last"><a href="#">Velit mi rutrum diam</a></li>
                    </ul>
                </div>
            </div>
            <div class="sidebar_box"><span class="bottom"></span>
                <h3>Best Sellers <a href="http://cz.onlyimage.com/free-images/sign" title="Znamení obrázek" class="more_link"  target="_blank"></a></h3>   
                <div class="content"> 
                    <div class="bs_box">
                        <a href="#"><img src="images/templatemo_image_01.jpg" alt="Image 01" /></a>
                        <h4><a href="#">Donec nunc nisl</a></h4>
                        <p class="price">$10</p>
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                        <a href="#"><img src="images/templatemo_image_01.jpg" alt="Image 02" /></a>
                        <h4><a href="#">Aenean eu tellus</a></h4>
                        <p class="price">$12</p>
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                        <a href="#"><img src="images/templatemo_image_01.jpg" alt="Image 03" /></a>
                        <h4><a href="#">Phasellus ut dui</a></h4>
                        <p class="price">$20</p>
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                        <a href="#"><img src="images/templatemo_image_01.jpg" alt="Image 04" /></a>
                        <h4><a href="#">Vestibulum ante</a></h4>
                        <p class="price">$16</p>
                        <div class="cleaner"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content" class="float_r">
            <h1>New Products</h1>
            <?php 
                include "process/dbfucntion.php";
                $search = $_GET['search'];
                $view = 6;
                $sql = "SELECT * FROM product_tbl WHERE product_name LIKE '%$search%' ";
                $total = query_count($sql);
                if($total>6){
                    if(isset($_GET['page'])){
                        $page_aktif = $_GET['page'];
                    }else{
                    $page_aktif = 1;
                    }
                    $awaldata = ($page_aktif-1)*$view;
                    $sql = "SELECT * FROM product_tbl ORDER BY product_id DESC LIMIT $awaldata,$view";
                }
                $qproduct = $koneksi->query($sql); 
                $rowproduct = $qproduct->fetch_assoc();
                do{
            ?>
            <div class="product_box no_margin_right">
                <a href="productdetail.html"><img src="images/product/<?php echo $rowproduct['gambar']; ?>" alt="Image 01" /></a>
                <h3><?php echo $rowproduct['product_name']; ?></h3>
                <p class="product_price">$ <?php echo $rowproduct['price']; ?></p>
                <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                <a href="product_detail.php?product_id=<?php echo $rowproduct['product_id']?>"" class="detail">Detail</a>
            </div>    
            <?php  
            }while($rowproduct = $qproduct->fetch_assoc() ); 
            ?>      

            <?php 
                 // Jumlah data yang sebenarnya
                    $sqltotal = "SELECT * FROM product_tbl WHERE product_name LIKE 
                    '%$search'";
                    $qtotal = $koneksi->query($sqltotal);
                    $total_data = $qtotal->num_rows;

                    // hal yang didapat
                    $total_page = ceil($total_data/$view);
                    // ceil pembulatan ke atas

                ?>

                <div class="paging" style="padding-top: 10px; height:30px; clear:both; ">
                  <?php for ($i=1; $i<=$total_page ; $i++) { 
                    if($i==$page_aktif){ ?>
                      <div class="this_page">
                        <?php echo $i; ?>
                      </div>
                    <?php } else{?>
                      <a href="?page=<?php echo $i;?>&search=<?php echo $search; ?>" class="page">
                        <?php echo $i; ?>
                      </a>
                  <?php } 
                }?>

                <style>
.page
{
    background-color: #fff;
    color:#fff;
    text-align: center;
    height: 20px;
    width: 25px;
    display: block;
    border:1px solid #CCC;
    border-radius: 3px;
    float: left;
    margin-top: 50px;
    margin-left: 5px;
    text-decoration: none;
    padding:7px;
     
}

.this_page
{
    background-color:darkblue;
    color:#fff;
    text-align: center;
    height: 20px;
    width: 25px;
    display: block;
    float: left;
    border-radius: 3px;
    margin-left: 5px;
    margin-top: 50px;
    border:1px solid #CCC;
    padding:7px;

}

.page:hover
{
    background-color: cyan;
    color:#fff;
    text-align: center;
    height: 20px;
    width: 25px;
    display: block;
    border:1px solid #CCC;
    border-radius: 3px;
    float: left;
    margin-top: 50px;
    margin-left: 5px;
    text-decoration: none;
    padding:7px;
    
}

.this_page:hover
{
    background-color:blue;
    color:#fff;
    text-align: center;
    height: 20px;
    width: 25px;
    display: block;
    float: left;
    border-radius: 3px;
    margin-left: 5px;
    margin-top: 50px;
    border:1px solid #CCC;
    padding:7px;
}

</style>

        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
    <div id="templatemo_footer">
        <p>
            <a href="index.html">Home</a> | <a href="products.html">Products</a> | <a href="about.html">About</a> | <a href="faqs.html">FAQs</a> | <a href="checkout.html">Checkout</a> | <a href="contact.html">Contact</a>
        </p>

        Copyright © 2048 <a href="#">Your Company Name</a> | Designed by <a href="http://www.templatemo.com" rel="nofollow" target="_parent">Free CSS Templates</a>
    </div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>