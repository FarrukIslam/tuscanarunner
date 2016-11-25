<?php

if (!defined('toscanarunner')) define('toscanarunner', '1.0');

if (!class_exists('toscanarunner_scripts_load'))
	{
	class toscanarunner_scripts_load {
		
		public function __construct() {
			add_action('wp_enqueue_scripts', array( $this, 'toscanarunner_scripts' ));
			add_action('after_setup_theme', array($this, 'toscanarunner_after_theme_setup'));
			}

		public function toscanarunner_scripts() {
				
			/** 
			---------------------------------------------------------------
			 CSS Files 
			---------------------------------------------------------------	
			**/
			
			/* theme stylesheet */
		    

			wp_enqueue_style( 'wpb-google-fonts-volkhov', 'https://fonts.googleapis.com/css?family=Volkhov:400,400i,700,700i', false ); 

			wp_enqueue_style( 'wpb-google-fonts-lato', 'https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Volkhov:400,400i,700,700i', false ); 
		   
			wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array() , toscanarunner);
			
			wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.css', array() , toscanarunner);

			wp_enqueue_style('blog', get_template_directory_uri() . '/css/blog.css', array() , toscanarunner);

			wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array() , toscanarunner);

			wp_enqueue_style('scrolling-nav', get_template_directory_uri() . '/css/scrolling-nav.css', array() , toscanarunner);
			
			wp_enqueue_style('schwans.combined.1.0.6141.13911.min', get_template_directory_uri() . '/css/schwans.combined.1.0.6141.13911.min.css', array() , toscanarunner);
			
			//wp_enqueue_style('print.1.0.6141.13911.min', get_template_directory_uri() . '/css/print.1.0.6141.13911.min.css', array() , toscanarunner);
			
			 wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );
			
			
			/** 
			---------------------------------------------------------------
			 jQuery Files
			---------------------------------------------------------------	
			**/
			wp_enqueue_script('jQuery',true);

			wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array(
				'jquery'
			) , toscanarunner, true);

			wp_enqueue_script('jquery.easing.min', get_template_directory_uri() . '/js/jquery.easing.min.js', array(
				'jquery'
			) , toscanarunner, true);

			wp_enqueue_script('scrolling-nav', get_template_directory_uri() . '/js/scrolling-nav.js', array(
				'jquery'
			) , toscanarunner, true);

			wp_enqueue_script('ty-add-to-cart', get_template_directory_uri() . '/js/qty-add-to-cart.js', array(
				'jquery'
			) , toscanarunner, true);


			wp_enqueue_script('schwans.combined.ftr.1.0.6141.13911.min', get_template_directory_uri() . '/js/schwans.combined.ftr.1.0.6141.13911.min.js', array(
				'jquery'
			) , toscanarunner, true);
			
			// wp_enqueue_script('schwans.combined.ftr2.1.0.6141.13911.min', get_template_directory_uri() . '/js/schwans.combined.ftr2.1.0.6141.13911.min.js', array(
			// 	'jquery'
			// ) , toscanarunner, true);


			// wp_enqueue_script('foresee-trigger', get_template_directory_uri() . '/js/foresee-trigger.js', array(
			// 	'jquery'
			// ) , toscanarunner, true);

			
			
			/* wordpress comments */
			if (is_singular() && comments_open() && get_option('thread_comments'))
				{
				wp_enqueue_script('comment-reply');
				}
			}

		function toscanarunner_after_theme_setup() {

			//add_theme_support( 'html5', array(
			//	'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
			//) );

			
			/* load text domain */
			load_theme_textdomain('toscanarunner', get_template_directory() . '/languages');
			
			/* widget shortcode support*/
			add_filter('widget_text', 'do_shortcode');
			
			/* theme supports */
			//add_theme_support('post-thumbnails', array('post','Dj_slider'));
			add_theme_support('automatic-feed-links');
			

			add_theme_support('post-thumbnails');

			add_image_size('catimg640x350', 640, 350);
			add_image_size('related_thum200x200', 200, 200);
			
			
			
			/* register nav left*/
			register_nav_menus(array(
				'primarymenuleft' => __('Primary Menu Left', 'toscanarunner')
			));
			/* register nav Right */
			register_nav_menus(array(
				'primarymenuright' => __('Primary Menu Right', 'toscanarunner')
			));
			/* register nav Right */
			register_nav_menus(array(
				'maincategorymenu' => __('Main Category Menu', 'toscanarunner')
			));

			/* register sidebar */
			function toscanarunner_widgets_register_func()
				{
					
				register_sidebar( array(
				        'name' => __( 'Footer Sidebar Left', 'toscanarunner' ),
				        'id' => 'footer-sidebar-left',
				        'description' => __( 'Widgets in this area will be shown Footer.', 'toscanarunner' ),
				        'before_widget' => '    <div class="footerUtility-menu-col">
                            <div class="footerMenu footerMenu_first js-accordion" data-disabled-breakpoints="large">',
					'after_widget'  => '</div></div>',
					'before_title'  => '<h4>',
					'after_title'   => '</h4>',
				    ) );
				
					
				register_sidebar( array(
				        'name' => __( 'Footer Sidebar Right', 'toscanarunner' ),
				        'id' => 'footer-sidebar-right',
				        'description' => __( 'Widgets in this area will be shown Footer Right.', 'toscanarunner' ),
				        'before_widget' => ' <div class="footerSocial">',
					'after_widget'  => '</div>',
					'before_title'  => '',
					'after_title'   => '',
				    ) );

				register_sidebar(array(
					'name' => __('Right Sidebar', 'bestblog') ,
					'id' => 'right_sidebar',
					'description' => __('Widgets in this area will be shown left side', 'bestblog') ,
					'before_widget' => '<div class="widget">',
					'after_widget' => '</div>',
					'before_title' => '<h4 class="widget-title">',
					'after_title' => '</h4>',
				));
				
				}

			add_action('widgets_init', 'toscanarunner_widgets_register_func');

			
			}
		}
	}

if (class_exists('toscanarunner_scripts_load'))
	{
	global $toscanarunner_scripts_load;
	$toscanarunner_scripts_load = new toscanarunner_scripts_load();
	}

/* default menu */

function toscanarunner_default_cat_menu(){	
		
		if(is_user_logged_in()){
			echo '<ul class="headerMainNav">';
		echo '<li><a href="'.esc_url(home_url()).'/wp-admin/nav-menus.php">'. esc_html__('Create Categories Menu','toscanarunner').'</a></li>';
			echo '</ul>';
		}
		
	else {
		echo '<ul class="headerMainNav">';
		echo '<li><a href="'.esc_url(home_url()).'">' . esc_html__( 'Home', 'toscanarunner' ) . '</a></li>';
		echo '</ul>';
	}
		
}		

function toscanarunner_default_menu_left(){	
		
		if(is_user_logged_in()){
			echo '<ul class="headerSplitNav">';
		echo '<li class="current"><a href="'.esc_url(home_url()).'/wp-admin/nav-menus.php">'. esc_html__('Create Left Menu','toscanarunner').'</a></li>';
			echo '</ul>';
		}
		
	else {
		echo '<ul class="headerSplitNav">';
		echo '<li><a href="'.esc_url(home_url()).'">' . esc_html__( 'Home', 'toscanarunner' ) . '</a></li>';
		echo '</ul>';
	}
		
}		

function toscanarunner_default_menu_right(){
		
		if(is_user_logged_in()){
			echo '<ul class="middile-menu-right"> ';
		echo '<li class="current"><a href="'.esc_url(home_url()).'/wp-admin/nav-menus.php">'. esc_html__('Create Right Menu','toscanarunner').'</a></li>';
			echo '</ul>';
		}	
}		



/* customize login screen */
function toscanarunner_custom_login_page() {
    echo '<style type="text/css">
        h1 a { 
        	background-image:url("'. get_stylesheet_directory_uri().'/img/logo.png") !important;
		    background-size: 75% !important;
		    height: 120px !important;
		    margin: 0 !important;
		    width: 100% !important;
		}
		.login h1 {
		    background-color: #FFF !important;
		    height: 55px;
		}

        body.login { background-color:#891c1c !important; }
  		body.login:before {  background-color:#891c1c !important;  position: absolute; width: 100%; height: 100%; left: 0; top: 0; content: ""; z-index: -1; }
  		p#nav a {
		    color: #fff !important;
		}
  		p#backtoblog a {
		    color: #fff !important;
		}

    </style>';
}
add_action('login_head', 'toscanarunner_custom_login_page');

function toscanarunner_login_logo_url() {
 return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'toscanarunner_login_logo_url' );

function toscanarunner_login_logo_url_title() {
 return 'toscanarunner-Replacement Lenses for Goggles and Sunglasses';
}
add_filter( 'login_headertitle', 'toscanarunner_login_logo_url_title' );



//wp admin enqueue scritp 
function load_custom_wp_admin_style() {
        wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

require_once get_template_directory() .'/inc/required_plugins.php';
//require_once get_template_directory() .'/inc/widgets/quick-links.php';
//require_once get_template_directory() .'/inc/widgets/social-media.php';
require_once get_template_directory() .'/inc/shortcodes/toscanarunner-shortcodes.php';
require_once get_template_directory() .'/inc/band.php';
require_once get_template_directory() .'/inc/woocommerce-support.php';



require 'inc/widgets/blog-widgets/bestblog_search.php';
require 'inc/widgets/blog-widgets/bestblog_tag_list.php';
require 'inc/widgets/blog-widgets/bestblog_category.php';
require 'inc/widgets/blog-widgets/bestblog_tab_content.php';
require 'inc/widgets/blog-widgets/twitter-feed.php';
require 'inc/widgets/blog-widgets/bestblog-recentpost.php';

/* blog fuction */

// pagination 

function bestblog_pagination() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="pagination-wrapper text-center"><ul class="pagination">' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li class="previous">%s</li>' . "\n", get_previous_posts_link('Previous') );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li></li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li></li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li class="next">%s</li>' . "\n", get_next_posts_link('Next') );

	echo '</ul></div>' . "\n";

}
// short titile for breadcrumbs

function bestblog_short_title(){
		$title_content= explode(" ", get_the_title());
		$less_title= array_slice($title_content, 0, 5);
		echo implode(" ", $less_title);	
	}	