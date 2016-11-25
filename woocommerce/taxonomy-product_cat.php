<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="row">
	<div class="container">

		<?php
			/**
			 * woocommerce_before_main_content hook.
			 *
			 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
			 * @hooked woocommerce_breadcrumb - 20
			 */
			do_action( 'woocommerce_before_main_content' );
		?>
		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

			<h1 class="hdg hdg_h1 mix-hdg_primaryDarkest"><?php woocommerce_page_title(); ?></h1>

		<?php endif; ?>


		</div>
	</div>


	<div class="row">
		<div class="container">


	<?php 
	if (is_product_category()){
	global $wp_query;
	// get the query object
	$cat = $wp_query->get_queried_object();
	// get the thumbnail id user the term_id
	$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
	// get the image URL
	$image = wp_get_attachment_url( $thumbnail_id );
	// print the IMG HTML

	?>

			<div class="col-md-8 col-sm-8 col-xs-12">
				<div class="cat-thumb-img">
					<?php if($image) : ?>
						<img src="<?php echo $image; ?>" class="img-responsive ">
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/new1-768.jpg" class="img-responsive ">
					<?php endif; ?>
				</div>
				


				<div class="hero-bd hero-bd_flushMD">
				    <div class="hero-bd-overlay">
				  
				         <?php 
					        $description = wc_format_content( term_description() );
					        if ( $description ) {
					            echo '<h2 class="hero-bd-overlay-title">' . $description . '</h2>';
					        }
					    ?>
				   
				    </div>
				    
					<?php 
					$term = get_term( 10, 'product_cat' );
					$term_link = get_term_link( $term );
					?>

				    <div class="hero-bd-cta">
				      <a class="btn btn_secondary" href="<?php $term_link; ?>" title="Shop Classic Cheesecake">
				        Shop Classic Cheesecake
				      </a>
				  </div>
				</div>
			</div>

<?php } ?>




			

<?php 
 
// get the custom post type's taxonomy terms
 
$custom_taxterms = wp_get_object_terms( $post->ID, 'product_cat', array('fields' => 'ids') );
// arguments
$args = array(
'post_type' => 'product',
'post_status' => 'publish',
'posts_per_page' => 2, // you may edit this number
'orderby' => 'rand',
'tax_query' => array(
    array(
        'taxonomy' => 'product_cat',
        'field' => 'id',
        'terms' => $custom_taxterms
    )
),
'post__not_in' => array ($post->ID),
);
$related_items = new WP_Query( $args );
// loop over query
if ($related_items->have_posts()) :



echo '<div class="col-md-4">';
while ( $related_items->have_posts() ) : $related_items->the_post();

?>
<div class="col-md-12">
		<div class="bannerright1">
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'related_thum200x200' ); ?>
			<img src="<?php echo $url ?>" class="img-responsive">
			<div class="hero-bd hero-bd_shortLG">
			   <a href="<?php $link; ?>" class="btn btn_secondary" title="<?php the_title_attribute(); ?>">
			     Shop Organic Corn
			   </a>
			</div>
		</div>	
	</div>
<?php
endwhile;
echo '</div>';


else : ?>
<div class="col-md-4">
	<div class="col-md-12">
		<div class="bannerright1">
			<img src="<?php echo get_template_directory_uri(); ?>/img/new2-358.jpg" class="img-responsive">
			<div class="hero-bd hero-bd_shortLG">
			   <a href="3" class="btn btn_secondary" title="Shop Organic Corn">
			     Shop Organic Corn
			   </a>
			</div>
		</div>	
	</div>
	<div class="col-md-12">
		<div class="bannerright2">
			<img src="<?php echo get_template_directory_uri(); ?>/img/r3-522.jpg" class="img-responsive">
			<div class="hero-bd hero-bd_shortLG">
			   <a href="#" class="btn btn_secondary" title="Shop Ready to Roast Turkey Breast">
			     Shop Ready to Roast Turkey Breast
			   </a>
			 </div>
		</div>
	</div>
</div>
<?php 

endif;
// Reset Post Data
wp_reset_postdata();
?>


			
		

		</div>




	</div>
<?php 
wc_get_template( 'archive-product.php' );
