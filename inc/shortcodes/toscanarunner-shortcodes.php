<?php 
function toscanarunner_banner_shortcode_func( $atts ) {
    extract( shortcode_atts( array(
    'subtitle' => 'Write your welcome Text',
    'banner_content' => 'Write your banner content here.',
    'banner_img' => 'http://localhost/toscanarunner/wp-content/themes/toscanarunner/img/ylo-768.jpg',
    'banner_list1_img' => 'http://localhost/toscanarunner/wp-content/themes/toscanarunner/img/devices.png',
    'banner_list1_text' => 'your site url',
    'banner_list2_img' => 'http://localhost/toscanarunner/wp-content/themes/toscanarunner/img/truck.png',
    'banner_list2_text' => 'Delivery date and time',
    'banner_list3_img' => 'http://localhost/toscanarunner/wp-content/themes/toscanarunner/img/utensil.png',
    'banner_list3_text' => 'Start making delicious',
    'banner_link' => 'http://tuscanarunner.com/',
   ), $atts) );

$image = wp_get_attachment_image_src( $banner_img, 'full');
	$image_src = $image['0'];	
 ob_start();

 ?>

<div class="banner">
    <img src="<?php echo $image_src; ?>" class="banner-img img-responsive hide-at-700">
    <div class="banner-welcome">
    	<h2><?php echo $subtitle; ?></h2>
		</div>
    <div class="banner-content">
        <h1><?php echo $banner_content; ?></h1>
        <ul class="center-left">

            <li class="easy-123_1">
	            <div class="mobile-show">Shop</div>
	            <div class="mobile-hide"><?php echo $banner_list1_text; ?></div>
            </li>
            <li class="easy-123_2">
            	<div class="mobile-show">Place Your Order</div>
            	<div class="mobile-hide"><?php echo $banner_list2_text; ?></div>
            </li>
            <li class="easy-123_3">
            	<div class="mobile-show">Select Your Delivery</div>
            	<div class="mobile-hide"><?php echo $banner_list3_text; ?></div>
            </li>
            
        </ul>
        <style>
        	<?php
				$image1 = wp_get_attachment_image_src( $banner_list1_img, 'small');
				$image_src1 = $image1['0'];
				$image2 = wp_get_attachment_image_src( $banner_list2_img, 'small');
				$image_src2 = $image2['0'];	
				$image3 = wp_get_attachment_image_src( $banner_list3_img, 'small');
				$image_src3 = $image3['0'];	
        	 ?>
        	li.easy-123_1 {
			    background: url(<?php echo $image_src1; ?>) no-repeat top 5px left;
			    background-size: 40px 30px;
			   
			    
			}
        	li.easy-123_2 {
			    background: url(<?php echo $image_src2; ?>) no-repeat top 5px left;
			    background-size: 40px 30px;
			    
			}
        	li.easy-123_3 {
			    background: url(<?php echo $image_src3; ?>) no-repeat top 5px left;
			    background-size: 40px 30px;
			    
			}
        </style>


    </div>
     <div class="hero-bd-cta hero-bd-cta-bottom-right"><a class="btn btn_secondary btn_bottom-right" href="<?php echo $banner_link; ?>" title="Learn More">Learn More</a>
 	</div>
</div>


 <?php 
 $html = ob_get_contents();
 ob_get_clean();
 return $html;
}

add_shortcode('toscanarunner_banner', 'toscanarunner_banner_shortcode_func');


//section heading 
function toscanarunner_section_headding_shortcode_func( $atts ) {
    extract( shortcode_atts( array(
    'title' => 'Custom Heading',
    
   ), $atts) );
	
 ob_start();

 ?>

<div class="diad">
  <div class="diad-l">
    <h2 class="hdg hdg_h2"><?php echo $title; ?></h2>
  </div>
</div>
 <?php 
 $html = ob_get_contents();
 ob_get_clean();
 return $html;
}

add_shortcode('section_headding', 'toscanarunner_section_headding_shortcode_func');



//border content 
function toscanarunner_bordercontent_shortcode_func( $atts ) {
    extract( shortcode_atts( array(
    'border_inner_text' => 'No Memberships, No Minimums, No Contracts',
    
   ), $atts) );
	
 ob_start();

 ?>

<div class="border-content">
    <h2><?php echo $border_inner_text; ?></h2>
</div>

 <?php 
 $html = ob_get_contents();
 ob_get_clean();
 return $html;
}

add_shortcode('toscanarunner_border_content', 'toscanarunner_bordercontent_shortcode_func');

//image with sub content

function toscanarunner_imagewithcontent_shortcode_func( $atts ) {
    extract( shortcode_atts( array(
    'sub_title' => 'write your sub title',
    'img' => 'http://localhost/toscanarunner/wp-content/themes/toscanarunner/img/ylo-768.jpg',
    
   ), $atts) );

   $image = wp_get_attachment_image_src( $img, 'full');
   $image_src = $image['0'];	 
	
 ob_start();

 ?>
<div class="imagecontent">
	<img src="<?php echo $image_src; ?>" class="img-responsive home-style-img">
	<div class="hero-bd hero-bd_flushMD">
	  <div class="hero-bd-overlay">
	    <h2 class="hero-bd-overlay-title"><?php echo $sub_title; ?></h2>
	  </div>
	</div>
</div>
 <?php 
 $html = ob_get_contents();
 ob_get_clean();
 return $html;
}

add_shortcode('image_with_subcontent', 'toscanarunner_imagewithcontent_shortcode_func');



//image with sub content

function toscanarunner_adsetion_shortcode_func( $atts ) {
    extract( shortcode_atts( array(
    'link' => '#',
    'img' => 'http://localhost/toscanarunner/wp-content/themes/toscanarunner/img/ylo-768.jpg',
    
   ), $atts) );

   $image = wp_get_attachment_image_src( $img, 'full');
   $image_src = $image['0'];	 
	
 ob_start();

 ?>
<div class="specialOffer-zTile_parent specialOffer specialOffer_persistent buttonBottom">
  <div class="zTilecopy">
    <div class="ad_img">
      <img class="zTile lazyloaded" alt="" src="<?php echo $image_src; ?>">
    </div>
    <div class="btnFloat_z">
      <a href="<?php echo $link; ?>" class="btn btn_secondary">Get Started</a>
    </div>
    <a href="<?php echo $link; ?>" class="fillLink"></a>
  </div>
</div>
 <?php 
 $html = ob_get_contents();
 ob_get_clean();
 return $html;
}

add_shortcode('ad_section', 'toscanarunner_adsetion_shortcode_func');


//about content
function toscanarunner_aboutcontent_shortcode_func( $atts ) {
    extract( shortcode_atts( array(
    'title' => 'write your sub title',
    'content_text' => 'content is here...',
    
   ), $atts) );
 
	
 ob_start();

 ?>
<div class="contentBlock mix-contentBlock_borderedYellow mix-contentBlock_minimumHeight">

	<div class="contentBlock-hd">
		<h3 class="hdg hdg_h3 mix-hdg_primaryDarkest">
        	<?php echo $title; ?>
      </h3>

	</div>
	<div class="contentBlock-bd mix-contentBlock-bd_collapseMargin">
		
	<?php echo $content_text; ?>
	</div>
	
</div>
 <?php 
 $html = ob_get_contents();
 ob_get_clean();
 return $html;
}

add_shortcode('about_content', 'toscanarunner_aboutcontent_shortcode_func');


//about content
function toscanarunner_productitem_shortcode_func( $atts ) {
    extract( shortcode_atts( array(
    'numberpost' => '3',
    
   ), $atts) );
 
	
 ob_start();

 ?> <?php

    $args = array(
            'post_type' => 'product',
            'post_per_page' => $numberpost,
    );

    $crate_products = new WP_Query ( $args );
    if ( $crate_products->have_posts() ) : while ( $crate_products->have_posts() ) :
      $crate_products->the_post();

    ?>

    <div class="three columns">
        <?php  wc_get_template_part( 'content', 'product' ); ?>


    </div>

    <?php wp_reset_postdata(); ?>

    <?php endwhile; else: ?>

    <?php endif; ?>

    <?php wp_reset_query(); ?>
 <?php 
 $html = ob_get_contents();
 ob_get_clean();
 return $html;
}

add_shortcode('product_item', 'toscanarunner_productitem_shortcode_func');



add_shortcode( 'featured_product_categories', 'jc_featured_products' );
function jc_featured_products($atts){
 
	global $woocommerce_loop;
 
	extract(shortcode_atts(array(
		'cats' => '',	// list of categories in the format 0,1,2,3,4
		'tax' => 'product_cat',	// taxonomy use
		'per_cat' => '3',	// max featured items to display per category
		'columns' => '4',	// columns size
	), $atts));
 
	// get list of categories if no categories have been chosen
	if(empty($cats)){
		$terms = get_terms( 'product_cat', array('hide_empty' => true, 'fields' => 'ids'));
		$cats = implode(',', $terms);
	}
 
	// explode csv of categories into array e.g. array(0,1,2,3,4)
	$cats = explode(',', $cats);
 
	// escape early if no categories
	if(empty($cats)){
		return '';
	}
 
	ob_start();
 
	foreach($cats as $cat){
 
		// get the product category
		$term = get_term( $cat, $tax);
 
		// setup query
		$args = array(
			'post_type'	=> 'product',
			'post_status' => 'publish',
			'ignore_sticky_posts'	=> 1,
			'posts_per_page' => $per_cat,
			'tax_query' => array(
				// get products in the specified taxonomies
				array(
					'taxonomy' => $tax,
					'field' => 'id',
					'terms' => $cat,
				)
			),
			'meta_query' => array(
				// get products that are allowed to be displayed in the catalogue
				array(
					'key' => '_visibility',
					'value' => array('catalog', 'visible'),
					'compare' => 'IN'
				),
				// get only products marked as featured
				array(
					'key' => '_featured',
					'value' => 'yes'
				)
			)
		);
 
		// set woocommerce columns
		$woocommerce_loop['columns'] = $columns;
 
		// query database
		$products = new WP_Query( $args );
 
		$woocommerce_loop['columns'] = $columns;
 
		if ( $products->have_posts() ) : ?>
 
			<!--<h2><a href="<?php //echo get_term_link($term, $tax ); ?>"><?php// echo $term->name; ?></a></h2>-->
			<?php woocommerce_product_loop_start(); ?>
 
				<?php while ( $products->have_posts() ) : $products->the_post(); ?>
 
					<?php woocommerce_get_template_part( 'content', 'product' ); ?>
 
				<?php endwhile; // end of the loop. ?>
 
			<?php woocommerce_product_loop_end(); ?>
 
		<?php endif;
 
		wp_reset_postdata();
	}
 
	return '<div class="woocommerce">' . ob_get_clean() . '</div>';
}

