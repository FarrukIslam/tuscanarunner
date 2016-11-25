<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


?>
<div class="col-md-4" <?php post_class(); ?>>
	<div class="product product_snippet">

	<?php
	/**
	 * woocommerce_before_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	?>
  <div class="product-md"> 
		<div class="">       
		 	<a href="#">				            
	<?php

	/**
	 * woocommerce_before_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

?>
   			</a>
        </div>
    </div>



  <div class="product-bd">
    <div class="product-bd-main">
        <div class="product-bd-main-callout">


            <div class="product-bd-main-callout-title js-dotdotdot">
                <h3 itemprop="name">

<?php 

	/**
	 * woocommerce_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );


?>
			</h3>
		 </div>

    <div class="product-bd-main-callout-detail" itemprop="offers" itemscope="" itemtype="#">
      
        <span class="product-bd-main-callout-detail-sku" itemprop="sku">#496</span>
        <div class="product-bd-main-callout-detail-weight">1.75 lb. bag</div>
        <span class="product-bd-main-callout-detail-serving">Serves 9</span>
        <div class="product-bd-main-callout-detail-purchaseCount">
            <strong>Number of Times Purchased:</strong>
        </div>
    </div>

</div>
    
 <div class="product-bd-main-offer">
<?php 

?>


						                
		<ul class="product-bd-main-offer-rating mix-product_isHiddenSM mix-product_inlineBlockMD">
		    <li><i class="icn icn_star"><span class="isVisuallyHidden">1</span></i></li>
		    <li><i class="icn icn_star"><span class="isVisuallyHidden">2</span></i></li>
		    <li><i class="icn icn_star"><span class="isVisuallyHidden">3</span></i></li>
		    <li><i class="icn icn_star"><span class="isVisuallyHidden">4</span></i></li>
		    <li><i class="icn icn_star"><span class="isVisuallyHidden">5</span></i></li>
		     <!-- TODO: CLIENT: Star icon class coming in a later sprint. -->
		</ul>
	
	<div class="product-bd-main-offer-price">
        <span>
<?php 

	/**
	 * woocommerce_after_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

?>
    
		</span>
	</div>

</div>


    </div>        
</div>

<div class="product-ft">
	<div class="product-bd-main-cta product-bd-main-cta-so"> 
	    <div class="product-bd-main-cta-layout">  

	        <fieldset class="product-bd-main-cta-layout-one" id="">
	            <label class="label" for="productQty">Qty</label>
	          </fieldset>   


			<button type="button" class="btn btn_primary js-add-to-cart js-tooltip-external-trigger">							    
<?php
/**
 * woocommerce_after_shop_loop_item hook.
 *
 * @hooked woocommerce_template_loop_product_link_close - 5
 * @hooked woocommerce_template_loop_add_to_cart - 10
 */
do_action( 'woocommerce_after_shop_loop_item' );
?>
			</button>
		</div>
	</div>    
</div>











	</div>
</div>	
