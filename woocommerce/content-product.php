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
	     <a href="<?php the_permalink(); ?>">				            
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
	                <a href="<?php the_permalink(); ?>">
						<?php 
							/**
							 * woocommerce_shop_loop_item_title hook.
							 *
							 * @hooked woocommerce_template_loop_product_title - 10
							 */
							do_action( 'woocommerce_shop_loop_item_title' );
						?>
					</a>
		       		</h3>
		    	</div>
		  	</div>
	    
			 <div class="product-bd-main-offer">
				<?php 
				if ( ! function_exists( 'woocommerce_template_loop_rating' ) ) {
				  
				      /**
				       * Display the average rating in the loop.
				       *
				       * @subpackage  Loop
				       */
				      function woocommerce_template_loop_rating() {
				      wc_get_template( 'loop/rating.php' );
				     }
				  }
				?>
							                
				<!-- <ul class="product-bd-main-offer-rating mix-product_isHiddenSM mix-product_inlineBlockMD">

				    <li><i class="icn icn_star"><span class="isVisuallyHidden">1</span></i></li>
				   
				</ul> -->


				<?php 
					echo do_shortcode('[star rating="4.8"]');
				?>
				
				<div class="product-bd-main-offer-price">
			        <span>
			       		<div class="custom-pric-style">
					<?php 
						/**
						 * woocommerce_after_shop_loop_item_title hook.
						 *
						 * @hooked woocommerce_template_loop_rating - 5
						 * @hooked woocommerce_template_loop_price - 10
						 */
						do_action( 'woocommerce_after_shop_loop_item_title' );
					?>
			            </div>
				   </span>
				</div>

			</div>

	    </div>        
	</div>

	<div class="product-ft">
		<div class="product-bd-main-cta product-bd-main-cta-so"> 
		    <div class="product-bd-main-cta-layout">  
		       
		   <?php // add_action( 'woocommerce_after_shop_loop_item', 'custom_quantity_field_archive', 0, 9 ); ?>    

		   <?php  //add_action( 'woocommerce_after_shop_loop_item', 'eshopper_add_to_cart_button', 10 ); ?>       

							    
			<?php
			/**
			 * woocommerce_after_shop_loop_item hook.
			 *
			 * @hooked woocommerce_template_loop_product_link_close - 5
			 * @hooked woocommerce_template_loop_add_to_cart - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item' );
			?>


		   </div>
		</div>    
	</div>

   </div>
</div>	
