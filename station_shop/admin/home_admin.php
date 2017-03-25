<?php	
	session_start();
	if(!isset($_SESSION['username'])){
			header("location:index.php?error2");
	}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>PROGRESS - Bussiness Company</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/navi.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".box .h_title").not(this).next("ul").hide("normal");
	$(".box .h_title").not(this).next("#home").show("normal");
	$(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
});
</script>
<style>
	
	.hide{ display:none !important;  /*visibility:hidden;*/ }


</style>
</head>
<body>
<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
				<p>Welcome, <strong>Admin</strong> [ <a href="process/logout_admin.php">logout</a> ]</p>
			</div>
			<div class="right">
				<div class="align-right">
               
                
					<p><strong></strong></p>
				</div>
			</div>
		</div>
		<div id="nav"> <?php #ini adalah menu ?>
			<ul>
				<li class="upp"><a href="#">News</a>
					<!-- <ul class="hide">
						<li>&#8250; <a href="">News </a></li>
						<li>&#8250; <a href="">Comment News</a></li>
						<li>&#8250; <a href="">Member </a></li>
						<li>&#8250; <a href="">Product</a></li>
                        <li>&#8250; <a href="">Contact </a></li>
					</ul>-->
				</li>
				<li class="upp "><a href="#">Member</a>
					<ul class="hide">
						<li>&#8250; <a href="">Show all pages</a></li>
						<li>&#8250; <a href="">Add new page</a></li>
						<li>&#8250; <a href="">Add new gallery</a></li>
						<li>&#8250; <a href="">Categories</a></li>
					</ul>
				</li>
				<li class="upp "><a href="#">User</a>
					<ul class="hide">
						<li>&#8250; <a href="">Show all uses</a></li>
						<li>&#8250; <a href="">Add new user</a></li>
						<li>&#8250; <a href="">Lock users</a></li>
					</ul>
				</li>
				<li class="upp "><a href="#">Product</a>
					<ul class="hide">
						<li>&#8250; <a href="">Site configuration</a></li>
						<li>&#8250; <a href="">Contact Form</a></li>
					</ul>
				</li>
                <li class="upp "><a href="#">Contact</a>
					<ul class="hide">
						<li>&#8250; <a href="">Show all uses</a></li>
						<li>&#8250; <a href="">Add new user</a></li>
						<li>&#8250; <a href="">Lock users</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	
	<div id="content">
		<div id="sidebar">
			<div class="box">
				<div class="h_title">&#8250; Menu Content</div>
				<ul id="home">
					<li class="b1"><a class="icon page" href="news_admin.php">News </a></li>
                    <li class="b1"><a class="icon add_user" href="member_admin.php">Member</a></li>
					<li class="b2"><a class="icon config" href="user_admin.php">User </a></li>
					
					<li class="b2"><a class="icon product" href="product_admin.php">Product</a></li>
                    
                    <li class="b2"><a class="icon contact" href="contact_admin.php">Contact</a></li>
				</ul>
			</div>
			
			<div class="box hide">
				<div class="h_title">&#8250; Manage content</div>
				<ul>
					<li class="b1"><a class="icon page" href="">Show all pages</a></li>
					<li class="b2"><a class="icon add_page" href="">Add new page</a></li>
					<li class="b1"><a class="icon photo" href="">Add new gallery</a></li>
					<li class="b2"><a class="icon category" href="">Categories</a></li>
				</ul>
			</div>
			<div class="box hide">
				<div class="h_title">&#8250; Users</div>
				<ul>
					<li class="b1"><a class="icon users" href="">Show all users</a></li>
					<li class="b2"><a class="icon add_user" href="">Add new user</a></li>
					<li class="b1"><a class="icon block_users" href="">Lock users</a></li>
				</ul>
			</div>
			<div class="box hide">
				<div class="h_title">&#8250; Settings</div>
				<ul>
					<li class="b1"><a class="icon config" href="">Site configuration</a></li>
					<li class="b2"><a class="icon contact" href="">Contact Form</a></li>
				</ul>
			</div>
		</div>
        
        <?php 
			 // petunjuk 
			 
			 // ini adalah content dari product_admin.php
			 // pisahkan bagian ini ,  lalu gantikan dengan include file yang ada di folder controller 
			 // yang bertugas mengatur file di folder view
		
		?>
        
		<div id="main">
        
        
		  <div class="clear"></div>
          
			
			
			<div class="full_w">
				<div class="h_title">Manage pages - table</div>
				<h2>News</h2><?php //judul table ?>
				<p>Ini adalah Content Berita, untuk menambah berita baru, silahkan menginput berita pada Form dibawah</p>
				
				<div class="entry">
					<div class="sep"></div>
				</div>
				<table>
					<thead>
						<tr>
							<th scope="col">Product Id</th>
                            <th scope="col">Image</th>
							<th scope="col">Product Name</th>
							<th scope="col">Product Description</th>
							<th scope="col">Price</th>
							<th scope="col">Stock</th>
							<th scope="col">Brand</th>

							
							<th scope="col" style="width: 65px;">Modify</th>
						</tr>
					</thead>

						
					<tbody>
                    <?php
					
								include "../config/config.php";

								$view = 5;

								if(isset($_GET['page'])){
									$page_aktif = $_GET['page'];
								}else{
									$page_aktif = 1;
								}

								$awaldata = ($page_aktif-1)*$view;

								$sql = "SELECT * FROM product_tbl ORDER BY product_id DESC LIMIT $awaldata,$view";

								$qnews = $koneksi->query($sql);
								$rownews = $qnews->fetch_assoc();
								do{
						
					?>
						<tr>
							<td class="align-center"><?php echo $rownews['product_id'] ?></td>
                            <td><img src="../images/product/<?php echo $rownews['gambar']; ?>" width="70" height="70" /></td>
							<td><?php echo $rownews['product_name'] ?></td>
							<td><?php echo $rownews['product_description'] ?></td>
							<td><?php echo $rownews['price'] ?>$</td>
							<td><?php echo $rownews['stock'] ?></td>
							<td><?php echo $rownews['brand'] ?></td>

							
							<td>
								<a href="edit_product.php?product_id=<?php echo $rownews['product_id'] ?>" class="table-icon edit" title="Edit"></a>
								<a href="#" class="table-icon archive" title=" View Comment"></a>
								<a href="process/delete_product.php?product_id=<?php echo $rownews['product_id'] ?>" class="table-icon delete" title="Delete" onclick="return confirm('apakah anda yakin data ber id=<?php rownews['product_id'] ?> ingin dihapus ?') "></a>
							</td>
						</tr>
					<?php }while($rownews = $qnews->fetch_assoc()); ?>
					</tbody>
				</table>


				 <?php 
                 // Jumlah data yang sebenarnya
                    $sqltotal = "SELECT * FROM product_tbl";
                    $qtotal = $koneksi->query($sqltotal);
                    $total_data = $qtotal->num_rows;

                    // hal yang didapat
                    $total_page = ceil($total_data/$view);
                    // ceil pembulatan ke atas

                ?>

				<div class="entry">
					<div class="pagination">
					<?php for ($i=1;$i<=$total_page;$i++) {?>
						<?php if($i == $page_aktif){ ?>
							<span class="active"><?php echo $i; ?></span>
						<?php }else{?>
							<a href="?page=<?php echo $i  ?>"><?php echo $i ?></a>
						<?php } ?>
					<?php } ?>
					</div>
                    
					<div class="sep hide"></div>		
				  <a class="button add hide" href="">Add new page</a> <a class="button hide" href="">Categories</a> 
				</div>
			</div>
            
            <div class="full_w" id="form_geje">
			  <div class="h_title">Add News </div>
              <div>
              	
				
                	
                     <?php
                  		
					include "../config/config.php";
			  		
						
                	?>
                    <form action="process/add_product.php" method="post" enctype="multipart/form-data">
                    
                    <input type="hidden" name="product_id" value="?>" />
                    
					<div class="element" >
						<label for="product_name"> Product Name <span class="red">(required)</span></label>
						<input id="title" name="product_name" class="text" 
                         />
					</div>
                    
                    <div class="element">  
                    	
                        <label for="product_description">Product Description <span class="red">(required)</span></label>
						<textarea class="textarea" name="product_description" rows="10" ></textarea>
 
                    </div>
                    
                    <div class="element"> 
                        <img src="../images/product/<?php echo $rownews['gambar']; ?>" width="200" height="200"/>
					
                      
                        <label for="gambar">Attachments</label>
						<input type="file" name="images" />
					</div>
                    
                   <div class="element" >
						<label for="price"> Price <span class="red">(required)</span></label>
						<input id="title" name="price" class="text"  />
					</div>
                    
                    <div class="element" >
						<label for="product_name"> Stock <span class="red">(required)</span></label>
						<input id="title" name="stock" class="text" />
					</div>
					
					<div class="element" >
						<label for="product_name"> Brand <span class="red">(required)</span></label>
						<input id="title" name="brand" class="text"  />
					</div>
                    
                    
                    <!-- 
					<div class="element hide">
						<label for="category">Category <span class="red">(required)</span></label>
						<select name="category" <?php //class="err" ?>>
							<option value="0">-- select category</option>
							<option value="1">Category 1</option>
							<option value="2">Category 4</option>
							<option value="3">Category 3</option>
						</select>
					</div>
					<div class="element hide">
						<label for="comments">Comments</label>
						<input type="radio" name="comments" value="on" checked="checked" /> Enabled <input type="radio" name="comments" value="off" /> Disabled
					</div>
					
					<div class="element hide">
						<label for="content">Page content <span>(required)</span></label>
						<textarea name="content" class="textarea" rows="10"></textarea>
					</div> -->
					<div class="entry">
					  <button type="submit" class="hide">Preview</button> <button type="submit" class="add">Save </button> <button class="cancel">Cancel</button>
					</div>
				</form>
		  </div>
         
            
	  </div>
	 <div class="clear"></div>
	</div> <?php ?> 
    
    	<?php
			
			// akhir dari product_admin.php
		
		?>

	<div id="footer">
		<div class="left">
			<p>Design: <a href="http://kilab.pl">Paweł Balicki</a> | Admin Panel: <a href="">YourSite.com</a></p>
		</div>
		<div class="right">
			<p><a href="">Example link 1</a> | <a href="">Example link 2</a></p>
		</div>
	</div>
</div>

</body>
</html>
