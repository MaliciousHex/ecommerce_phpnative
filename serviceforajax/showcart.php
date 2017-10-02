<?php 
	ob_start();
	session_start();
	ob_end_clean();

	include("../config/config.php");
	include("../classes/database.php");
	include("../classes/t-shirt.php");
	include("../classes/utility.php");

	$utility_obj = new utility();
	//print_r($_SESSION["cart"]);exit;
	if(isset($_SESSION["cart"])){
		if(!$utility_obj->isarrayempty($_SESSION["cart"])){

 ?>

    <?php 
        $total=0;
        for($i=0;$i<=count($_SESSION["cart"])-1;$i++){ 
            echo $_SESSION["cart"][$i]["tshirt_id"];
            $tshirt_obj = new tshirt($_SESSION["cart"][$i]["tshirt_id"],true);
    ?>
    	<tr>
        	<td><img width="100" 
        	src="<?php echo $display_image_url . $tshirt->tshirt_image(); ?>">
        	</td>
        	<td><?php echo $shoes->shoes_name(); ?></td>
        	<td align="right"><input type="text" id="qty<?php echo $tshirt->tshirt_id(); ?>" value="<?php  echo $_SESSION["cart"][$i]["qty"];?>" style="width:30px;text-align:right;"></td>
        	<td align="right">Rp.&nbsp;<?php echo number_format($tshirt->tshirt_price(),2,".","."); ?></td>
        	<td align="right">
        	<?php 
        	$subtotal=$tshirt->tshirt_price() * $_SESSION["cart"][$i]["qty"];
            echo "Rp.&nbsp;" . number_format($subtotal,2,",",".");
            $total = $total+$subtotal;
         	?>
         	</td>
         	<td>
         	&nbsp;&nbsp;&nbsp;&nbsp;
         	<a href="javascript:" class="editcart" tshirt-id="<?php echo $_SESSION["cart"][$i]["tshirt_id"]; ?>"><img src="<?php echo $base_url; ?>/images/edit.png" width="20"></a>
         	&nbsp;
         	<a href="javascript:" class="removecart" tshirt-id="<?php echo $_SESSION["cart"][$i]["tshirt_id"];?>"><img src="<?php echo $base_url; ?>images/remove_x.gif" width="20"></a>
         	</td>
    	</tr> 
      	<?php 
      	} 
      	?>
                              
        <tr>
            <td colspan="4" align="right"><strong>Total</strong>&nbsp;</td>
            <td><strong>Rp.&nbsp;<?php echo number_format($total,2,",","."); ?></strong></td>
            <td></td> 
        </tr> 
                          
                          


 <?php 
 		} 

	}
?>