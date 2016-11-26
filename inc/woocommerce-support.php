<?php 

//woocommerce support

function eshopper_woocommerce_support() {

			add_theme_support( 'woocommerce' );
		}
add_action('after_setup_theme','eshopper_woocommerce_support');	


// remove mantra functions action hooks

//remove breadcrumb 
//remove_action('woocommerce_before_main_content','woocommerce_breadcrumb', 20);

//remove result count
remove_action('woocommerce_before_shop_loop','woocommerce_result_count', 20);

//remove catalog sale flash
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 20 );

//remove rating 
//remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating', 5);

//remove singe page title 
remove_action('woocommerce_single_product_summary','woocommerce_template_single_title', 5);

function woocommerce_single_page_custom_title(){
	?>
	<div class="product-bd-main-callout-title">
        <h1 itemprop="name">	
			<?php the_title(); ?>
        </h1>
    </div>
	<?php 
}

//remove add to cart button
//remove_action('woocommerce_single_product_summary','woocommerce_template_loop_add_to_cart', 10);


//remove product archive sidebar 
remove_action('woocommerce_sidebar','woocommerce_get_sidebar', 10);

//ajaxfy cart 


add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
	<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a> 
	<?php
	
	$fragments['a.cart-contents'] = ob_get_clean();
	
	return $fragments;
}

remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );

//add to curosel slider single product page

add_action( 'woocommerce_product_thumbnails', 'toscanarunner_curosel_single_product_fun');

function toscanarunner_curosel_single_product_fun(){

	global $post, $product, $woocommerce;
	$attachment_ids = $product->get_gallery_attachment_ids();

	if($attachment_ids) :

	?>
	<div id="similar-product" class="carousel slide" data-ride="carousel">
								
	  <!-- Wrapper for slides -->
	    <div class="carousel-inner">

	    	<?php 
	    		$i = 0;
				foreach ($attachment_ids as $attachment_id) :
	    	
	    		$image_link       = wp_get_attachment_url( $attachment_id );	
	    	?>
			<div class="item <?php if($i == 0) {echo 'active';}?>">
			  <a href=""><img src="<?php echo $image_link; ?>" alt=""></a>
			</div>

			<?php 
				$i++;
				endforeach;
			?>
			
			
		</div>

		  <!-- Controls -->
		  <a class="left item-control" href="#similar-product" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		  </a>
		  <a class="right item-control" href="#similar-product" data-slide="next">
			<i class="fa fa-angle-right"></i>
		  </a>
	</div>

	<?php 
	endif;
}
		
//sku number setup after title
function toscanarunner_sku_after_title(){

	global $product;

	$sku = $product->get_sku();
	$sku_num = ($sku ? $sku : 'N/A');

	?>
	<span class="product-bd-main-callout-detail-sku">
		<?php echo '<span class="meta-attribute">SKU : </span>'.$sku_num; ?>
	</span>

	<?php 

}
add_action('woocommerce_single_product_summary','toscanarunner_sku_after_title', 6);


//show weight product

function toscanarunner_show_weight() {
	global $product;
 if ( $product->has_weight() ) {
 echo '<p><span class="meta-attribute">Weight:</span> ' . $product->get_weight() . ' ' . esc_attr( get_option( 'woocommerce_weight_unit' ) ) . '</p>';
	} 
}
add_action( 'woocommerce_single_product_summary', 'toscanarunner_show_weight', 39 );

//show dimensions
function toscanarunner_show_dimensions() {
    global $product;
    $dimensions = $product->get_dimensions();
        if ( ! empty( $dimensions ) ) {
                echo '<span class="dimensions"> <span class="meta-attribute">Dimensions : </span>' . $dimensions . '</span>';
        }
}
add_action( 'woocommerce_single_product_summary', 'toscanarunner_show_dimensions', 40 );


//stockabilitity
function toscanarunner_stock_abilitity(){

	global $product;
	$in_stock = $product->is_in_stock() ? 'In Stock' : 'No Stock';

?>
   <p><?php _e('<span class="meta-attribute">Availability :</span>','toscanarunner'); ?><?php echo $in_stock; ?> </p>
<?php   

}
add_action('woocommerce_single_product_summary','toscanarunner_stock_abilitity',42);


//band secton 

function woo_add_custom_general_fields() {

  global $woocommerce, $post;
  
  echo '<div class="options_group">';
  
  		// Text Field
		woocommerce_wp_text_input( 
			array( 
				'id'          => '_text_field', 
				'label'       => __( 'Brand Name :', 'toscanarunner' ), 
				'placeholder' => 'Write your Brand name',
				'desc_tip'    => 'true',
				'description' => __( 'Enter Brand name value.', 'toscanarunner' ) 
			)
		); 

  echo '</div>';
	
}
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields' );


// Save Fields
function woo_add_custom_general_fields_save( $post_id ){
	
	// Text Field
	$woocommerce_text_field = $_POST['_text_field'];
	if( !empty( $woocommerce_text_field ) )
		update_post_meta( $post_id, '_text_field', esc_attr( $woocommerce_text_field ) );
	
}

add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );

//display band
function toscanarunner_brand_name_fun(){
	
	$brand_name = get_post_meta(get_the_ID(), '_text_field', true );

	if($brand_name) :

?>
   <p><b> <?php _e('Brand :','toscanarunner'); ?></b> <?php echo $brand_name; ?> </p>
<?php   
    endif;
}
add_action('woocommerce_single_product_summary','toscanarunner_brand_name_fun',45);

//remove cagetory description
remove_action('woocommerce_archive_description','woocommerce_product_archive_description', 10);

//remove tag description
remove_action('woocommerce_archive_description','woocommerce_taxonomy_archive_description', 10);

//remove review comment
remove_action('woocommerce_single_product_summary','woocommerce_template_single_excerpt', 20);


//remove single product excerpt 
remove_action('woocommerce_single_product_summary','woocommerce_template_single_excerpt', 20);

//remove single product category
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );




//remove single product related product
//remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );


