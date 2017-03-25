<?php
	
	session_start();
	//include "process/authentifikasi.php";

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
				<p>Welcome, <strong>Paweł B.</strong> [ <a href="">logout</a> ]</p>
			</div>
			<div class="right">
				<div class="align-right">
					<p>Last login: <strong>23-04-2012 23:12</strong></p>
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
					<li class="b1"><a class="icon page" href="#">News </a></li>
                    <li class="b1"><a class="icon add_user" href="#">Member</a></li>
					<li class="b2"><a class="icon config" href="#">User </a></li>
					
					<li class="b2"><a class="icon product" href="#">Product</a></li>
                    
                    <li class="b2"><a class="icon contact" href="#">Contact</a></li>
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
		<div id="main">
        
        
		  <div class="clear"></div>
          
			
			
			<div class="full_w">
				<div class="h_title">Manage pages - table</div>
				<h2>User</h2><?php //judul table ?>
				<p>User yang bertanggung jawab mengolah CMS</p>
				
			  <div class="entry">
					<div class="sep"></div>
				</div>
				<table>
					<thead>
						<tr>
							<th scope="col">Id News</th>
							<th scope="col">username</th>
							<th scope="col">Nama</th>
							<th scope="col">User Level</th>
							<th scope="col">Ip Address</th>
							
							<th scope="col" style="width: 65px;">Modify</th>
						</tr>
					</thead>
						
					<tbody>
						<tr>
							<td height="56" class="align-center">2</td>
							<td>alhusna901</td>
							<td>Aries Dimas Yudhistira</td>
							<td>Super Admin</td>
							<td>22-03-2012</td>
							
							<td>
								<a href="#" class="table-icon edit" title="Edit"></a>
								<a href="#" class="table-icon archive" title=" View Comment"></a>
								<a href="#" class="table-icon delete" title="Delete"></a>
							</td>
					  </tr>
						<tr>
							<td class="align-center">3</td>
							<td>fadil_hakim</td>
							<td>Muhammad Fadil Hakim </td>
							<td>Admin</td>
							<td>22-03-2012</td>
							
							<td>
								<a href="#" class="table-icon edit" title="Edit"></a>
								<a href="#" class="table-icon archive" title="Archive"></a>
								<a href="#" class="table-icon delete" title="Delete"></a>
							</td>
						</tr>
							
						<tr>
							<td class="align-center">5</td>
							<td>baskoro</td>
							<td>Baskoro Adi Pratama</td>
							<td>Marketing</td>
							<td>23-03-2012</td>
							
							<td>
								<a href="#" class="table-icon edit" title="Edit"></a>
								<a href="#" class="table-icon archive" title="Archive"></a>
								<a href="#" class="table-icon delete" title="Delete"></a>
							</td>
						</tr>
							
						<tr>
							<td class="align-center">12</td>
							<td>fadli</td>
							<td>Fadli</td>
							<td>Admin</td>
							<td>25-03-2012</td>
							
							<td>
								<a href="#" class="table-icon edit" title="Edit"></a>
								<a href="#" class="table-icon archive" title="Archive"></a>
								<a href="#" class="table-icon delete" title="Delete"></a>
							</td>
						</tr>						
						<tr>
							<td class="align-center">114</td>
							<td>fransen_kamenrider</td>
							<td>Fransen Tedjadinata</td>
							<td>Admin</td>
							<td>22-03-2012</td>
							
							<td>
								<a href="#" class="table-icon edit" title="Edit"></a>
								<a href="#" class="table-icon archive" title="Archive"></a>
								<a href="#" class="table-icon delete" title="Delete"></a>
							</td>
						</tr>
							
						<tr>
							<td class="align-center">116</td>
							<td>Rani</td>
							<td>Rani</td>
							<td>Jurnalis</td>
							<td>23-03-2012</td>
							
							<td>
								<a href="#" class="table-icon edit" title="Edit"></a>
								<a href="#" class="table-icon archive" title="Archive"></a>
								<a href="#" class="table-icon delete" title="Delete"></a>
							</td>
						</tr>
							
						<tr>
							<td class="align-center">131</td>
							<td>Rina</td>
							<td>Rina</td>
							<td>Humas</td>
							<td>25-03-2012</td>
							
							<td>
								<a href="#" class="table-icon edit" title="Edit"></a>
								<a href="#" class="table-icon archive" title="Archive"></a>
								<a href="#" class="table-icon delete" title="Delete"></a>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="entry">
					<div class="pagination">
						<!-- <span>« First</span> -->
						<span class="active">1</span>
						<a href="">2</a>
						<a href="">3</a>
						<a href="">4</a>
						<span>...</span>
						<a href="">23</a>
						<a href="">24</a>
						<!-- <a href="">Last »</a> -->
				  </div>
                    
					<div class="sep hide"></div>		
				  <a class="button add hide" href="">Add new page</a> <a class="button hide" href="">Categories</a> 
			  </div>
			</div>
            
            <div class="full_w" id="form_geje">
			  <div class="h_title">Add News </div>
				<form action="" method="post">
					<div class="element">
						<label for="title"> Username <span class="red">(required)</span></label>
						<input id="title" name="username" class="text <?php //err ?>" />
					</div>
                    
                    <div class="element">  
                    	
                        <label for="description"> Password <span class="red">(required)</span></label>
						<input id="title" name="password" type="password" class="text <?php //err ?>" />
 
                    </div>
                    
                     <div class="element">  
                    	
                        <label for="description"> Nama <span class="red">(required)</span></label>
						<input id="title" name="nama" class="text <?php //err ?>" />
 
                    </div>
                    
                    <div class="element">
						<label for="gambar">Attachments</label>
						<input type="file" name="gambar" />
					</div>
                    
                    <div class="element">
                    <label for="user_level">User Level</label>
                    <select name="user_level" <?php //class="err" ?>>
                        <option value="0">-- select category</option>
                        <option value="1">Super Admin</option>
                        <option value="2">Admin</option>
                        <option value="3">Marketing</option>
                        <option value="3">Jurnalis</option>
					</select>
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
					</div>
					<div class="entry">-->
					  <button type="submit" class="hide">Preview</button> <button type="submit" class="add">Save </button> <button class="cancel">Cancel</button>
					</div>
				</form>
		  </div>
            
            
	  </div>
		<div class="clear"></div>
	</div>

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
