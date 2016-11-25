<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<?php 
get_header( 'shop' ); ?>



	<div class="row">
		<div class="container">
			<div class="col-md-3">
				<div class="filters"> 
        			<div class="filters-item filters-item_persistant js-accordion" data-disabled-breakpoints="large">
					    <div class="accordion-trigger accordion-trigger_title mix-accordion-trigger_primary js-accordion-trigger isDisabled" data-accordion-trigger-id="refine-by">
					        <h4 class="hdg hdg_h4">Refine By</h4>
					    </div>
					    <div class="accordion-panel js-accordion-panel isDisabled" data-accordion-panel-id="refine-by">
					        <div class="filterMenu">
					            <a id="ctl00_ctl00_ContentPlaceHolderTopBody_ContentPlaceHolderD_refinements1_HyperLinkClearRefinements" class="filterlist_clear mix-text_small" href="#">Clear All</a>
					            <ul class="filterList mix-filterList_2upMD mix-filterList_1upLG">                
					                <li>
					                    <fieldset>
					                        <legend class="filterList-item-title filterList-item-title_shrt">Allergens</legend>
					                        <ul class="vList vList_shrt">
			                                    <li>
			                                        <input id="" type="checkbox" name="" class="allergenRefineBy"><label for="">Milk</label>
			                                    </li> 
			                                    <li>
			                                        <input id="" type="checkbox" name="" class="allergenRefineBy"><label for="">Milk</label>
			                                    </li> 
			                                    <li>
			                                        <input id="" type="checkbox" name="" class="allergenRefineBy"><label for="">Milk</label>
			                                    </li> 
			                                    <li>
			                                        <input id="" type="checkbox" name="" class="allergenRefineBy"><label for="">Milk</label>
			                                    </li> 
			                                    <li>
			                                        <input id="" type="checkbox" name="" class="allergenRefineBy"><label for="">Milk</label>
			                                    </li> 
			                                   
			                                                   
					                        </ul>
					                    </fieldset>
					                </li>
					                <li>
					                    <fieldset>
					                        <legend class="filterList-item-title filterList-item-title_shrt">Special Diets</legend>
					                        <ul class="vList vList_shrt">
			                                    <li>
			                                        <input id="" type="checkbox" name="" class="specialDietRefineBy"><label for="">No Gluten Ingredients</label>  
			                                    </li>    
			                                    <li>
			                                        <input id="" type="checkbox" name="" class="specialDietRefineBy"><label for="">No Gluten Ingredients</label>  
			                                    </li>    
			                                    <li>
			                                        <input id="" type="checkbox" name="" class="specialDietRefineBy"><label for="">No Gluten Ingredients</label>  
			                                    </li>    
			                                    <li>
			                                        <input id="" type="checkbox" name="" class="specialDietRefineBy"><label for="">No Gluten Ingredients</label>  
			                                    </li>    
			                                    <li>
			                                        <input id="" type="checkbox" name="" class="specialDietRefineBy"><label for="">No Gluten Ingredients</label>  
			                                    </li>    
			                                    <li>
			                                        <input id="" type="checkbox" name="" class="specialDietRefineBy"><label for="">No Gluten Ingredients</label>  
			                                    </li>    
					                        </ul>
					                    </fieldset>
					                </li>
					            </ul>
					        </div>
					    </div>
					</div>             
					        
		            <div class="filters-item filters-item_showLG mix-filters-item_highlight">
		                <div class="filterMenuTitle filterMenuTitle_showLG">
		                    <h4 class="hdg hdg_h4">You May Also Like</h4>
		                </div>
					      <div style="min-height: 350px !important;" class="product product_snippet" itemscope="" itemtype="#">
						    <div class="product-md"> 
						        <div class="">       
						            <a href="#">
									    <img src="<?php echo get_template_directory_uri(); ?>/img/56238-1-320.jpg" alt="Strips">
									</a>     
						        </div>
						    </div>

						    <div class="product-bd">
						        <div class="product-bd-main">
						            <div class="product-bd-main-callout">
						                <div class="product-bd-main-callout-title js-dotdotdot">
						                    <h3 itemprop="name">
						                    <a href="#">Fire-Grilled Chicken Breast Strips</a></h3>
						                </div>

						                 <div class="product-bd-main-callout-detail" itemprop="offers" itemscope="" itemtype="#">
						                    <div class="product-bd-main-callout-detail-seal mix-product_isHiddenSM"> 
						                    </div>
						                    <span class="product-bd-main-callout-detail-sku" itemprop="sku">#496</span>
						                    <div class="product-bd-main-callout-detail-weight">1.75 lb. bag</div>
						                    <span class="product-bd-main-callout-detail-serving">Serves 9</span>
						                    <div class="product-bd-main-callout-detail-purchaseCount">
						                        <strong>Number of Times Purchased:</strong></div>
						                    <div class="product-bd-main-callout-detail-savings product-callout-savings mix-product_isHiddenSM"></div>
						                    <div class="product-bd-main-callout-detail-desc js-dotdotdot">
						                        <!-- TODO: What is this? -->
						                        <div class="userContent">
						                            <p>Short description of the bundle if available. Description will cut off after around three lines of description text</p>
						                        </div>
						                    </div>
						                </div>

						            </div>
						            <div class="product-bd-main-offer">
						                
									<ul class="product-bd-main-offer-rating mix-product_isHiddenSM mix-product_inlineBlockMD">
									    <li><i class="icn icn_star"><span class="isVisuallyHidden">1</span></i></li>
									    <li><i class="icn icn_star"><span class="isVisuallyHidden">2</span></i></li>
									    <li><i class="icn icn_star"><span class="isVisuallyHidden">3</span></i></li>
									    <li><i class="icn icn_star"><span class="isVisuallyHidden">4</span></i></li>
									    <li><i class="icn icn_star"><span class="isVisuallyHidden">5</span></i></li>
									     <!-- TODO: CLIENT: Star icon class coming in a later sprint. -->
									</ul>
									<div class="product-bd-main-offer-price">   
								        <span itemprop="offers" class="" itemscope="" itemtype="http://schema.org/Offer">   
								            <span itemprop="priceCurrency" content="USD"></span>
								            <span itemprop="price" content="14.99">$14.99</span>
								        </span>
									</div>

						        </div>
						    </div>        
						</div>


			    		<div style="right:0 !important;left:none;width: 100%;" class="product-ft">
			        

							<div class="product-bd-main-cta product-bd-main-cta-so"> 
							    <div class="product-bd-main-cta-layout">  
							        <fieldset class="product-bd-main-cta-layout-one" id="">
							            <label class="label" for="productQty">Qty</label>
							            <select class="select" id="" name="">
							                <option value="1" selected="selected">1</option>
							                <option value="2">2</option>
							                <option value="3">3</option>
							                <option value="4">4</option>
							                <option value="5">5</option>
							                <option value="6">6</option>
							                <option value="7">7</option>
							                <option value="8">8</option>
							                <option value="9">9</option>
							                <option value="10">10</option>
							            </select>
							        </fieldset>


					                <button type="button" class="btn btn_primary js-add-to-cart js-tooltip-external-trigger">Add to Cart</button>
					                
					                <div class="tooltip-panel js-tooltip-panel">
					                    <div class="userContent js-tooltip-custom-msg"></div>
					                </div>
							      

							    </div>
							</div>                                      
					    </div>
					</div>         

					              
					</div>
					        
				</div>
			</div>
			<div class="col-md-9">

			



		<?php
			/**
			 * woocommerce_archive_description hook.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			do_action( 'woocommerce_archive_description' );
		?>

		<?php if ( have_posts() ) : ?>

			<?php
				/**
				 * woocommerce_before_shop_loop hook.
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			?>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>




					<?php wc_get_template_part( 'content', 'product' ); ?>

					

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>
		
			
		</div>
	</div>
</div>
<?php get_footer( 'shop' ); ?>
