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
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating', 5);

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

// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
	<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a> 
	<?php
	
	$fragments['a.cart-contents'] = ob_get_clean();
	
	return $fragments;
}


		
//sku number setup after title
function toscanarunner_sku_after_title(){

	global $product;

	$sku = $product->get_sku();
	$sku_num = ($sku ? $sku : 'N/A');

	?>
	<span class="product-bd-main-callout-detail-sku">
		<?php echo $sku_num; ?>
	</span>

	<?php 
	global $post;
$terms = get_the_terms( $post->ID, 'product_cat' );
foreach ($terms as $term) {

echo '<span class="product-bd-main-callout-detail-serving">'.$term->name .'</span>';
	}
}
add_action('woocommerce_single_product_summary','toscanarunner_sku_after_title', 6);





//remove breachcome
remove_action('woocommerce_single_product_summary','woocommerce_template_single_excerpt', 20);

//remove cagetory description
remove_action('woocommerce_archive_description','woocommerce_product_archive_description', 10);

//remove tag description
remove_action('woocommerce_archive_description','woocommerce_taxonomy_archive_description', 10);

//remove review comment
remove_action('woocommerce_single_product_summary','woocommerce_template_single_excerpt', 20);


//remove single product excerpt 
remove_action('woocommerce_single_product_summary','woocommerce_template_single_excerpt', 20);

//remove single product category
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );




//remove single product related product
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );




//add tabs list and content 

//add tabs list and content 

add_filter( 'woocommerce_product_tabs', 'eshopper_woo_new_product_tab' );
function eshopper_woo_new_product_tab( $tabs ) {
	
	// Adds the new tab
	
	$tabs['company_profile_tab'] = array(
		'title' 	=> __( 'Preparation', 'woocommerce' ),
		'priority' 	=> 50,
		'callback' 	=> 'eshopper_woo_new_product_tab_company'
	);

	

	return $tabs;

}


function eshopper_woo_new_product_tab_company() {

	$brands = wp_get_post_terms(get_the_ID(),'brand');

		foreach ($brands as $brand) :

		 $brand_name  = $brand->name;
		 $brand_desce  = $brand->description;
		 $brand_img = get_term_meta($brand->term_id, 'cat_term_img', true );

		?>
		 <div class="col-sm-3">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="<?php echo $brand_img; ?>" alt="">
						<h2><?php echo $brand_name; ?></h2>
						<p><?php echo $brand_desce; ?></p>
						
					</div>
				</div>
			</div>
		</div>
		<?php 

		endforeach;	
	
}

//rearrange tab list 

function woo_reorder_tabs( $tabs ) {


	$tabs['description']['priority'] = 5;			
	$tabs['company_profile_tab']['priority'] = 10;			
	//$tabs['tag_tab']['priority'] = 15;	
	$tabs['reviews']['priority'] = 20;			

	return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'woo_reorder_tabs', 98 );


/**extra for the theme */
function skyverge_shop_display_skus() {

	global $product;
	
	if ( $product->get_sku() ) {
		echo '<div class="product-meta">SKU: ' . $product->get_sku() . '</div>';
	}
}
add_action( 'woocommerce_after_shop_loop_item', 'skyverge_shop_display_skus', 9 );



