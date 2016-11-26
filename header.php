<!DOCTYPE html>
<html class="no-js" lang="<?php language_attributes(); ?>">
	<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description') ?>" />

    <?php $favicon = cs_get_option('favicon'); ?>

      <?php if($favicon) : ?>
      <link rel="icon" href="<?php echo $favicon; ?>" sizes="32x32" />

    <?php endif; ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
	</head>
<body> 
  
	<header>
		   
	    <div class="header js-headerFixed">
		    <!-- start utility wrapper -->
			<div class="header-util">
			    <div class="wrapper">
			        <!-- start utility bar -->
			        <nav class="headerUtilBar">
			            <ul class="headerUtilBar-list">
			                <li>
			                    <?php 
					
								$myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' );
								if ( $myaccount_page_id  && !is_user_logged_in()) {
								    $myaccount_page_url = get_permalink( $myaccount_page_id );
								    ?>
								    <a href="<?php echo $myaccount_page_url; ?>"><?php _e('Sing In', 'toscanarunner'); ?></a>
								    <?php
								}
								if ( $myaccount_page_id && is_user_logged_in()) {
								    $logout_url = wp_logout_url( get_permalink( $myaccount_page_id ) );
								    if ( get_option( 'woocommerce_force_ssl_checkout' ) == 'yes' )
								        $logout_url = str_replace( 'http:', 'https:', $logout_url );
								    ?>
								    <a href="<?php echo $logout_url; ?>" class="login-header"><?php _e('Logout', 'woocommerce'); ?></a>
								<?php } ?>

			                    <span>&nbsp;or&nbsp;</span>
			                    <a href="#">Create An Account</a>
			                </li>
			            </ul>
			            
			            
			            <div class="headerUtilBar-checkout js-headerDropdowns" data-disabled-breakpoints="small medium">

							<div class="headerCart js-headerDropdowns-item">
							    <a href="<?php echo wc_get_cart_url(); ?>" class="headerCart-trigger js-headerDropdowns-trigger">
							        <span class="headerCart-trigger-icon">
							            <i class="icn icn_cart"></i>
							        </span>
							        <span id="headerCartTotalQtyCount" class="headerCart-trigger-counter headerCart-trigger-counter-hidden"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> </span>
							        <span class="isVisuallyHidden">items in cart</span>



							    </a>
							    <div class="headerCart-panel js-headerDropdowns-panel">
							        <div id="headerCartContainer" class="headerInvoice">
							            
										<div class="headerInvoice-totals">
										    <div class="headerTally">
										        <span class="headerTally-label">Order Subtotal:&nbsp;</span>
										        <span class="headerTally-value"><?php echo WC()->cart->get_cart_total(); ?></span>
										        
										    </div>
										</div>
										<div class="headerInvoice-cta">
										    <?php 

										    	global $woocommerce;

												if ( sizeof( $woocommerce->cart->cart_contents) > 0 ) :
													echo '<a href="' . $woocommerce->cart->get_checkout_url() . '" title="' . __( 'Checkout' ) . '" class="btn btn_primary mix-btn_fullWidth">' . __( 'Checkout' ) . '</a>';
												endif;

										    ?>
										</div>

							        </div>
							    </div>
							</div>

				            <!-- end header cart -->
				        </div>
			        </nav>
			        <!-- end utility bar -->
			    </div>
			</div>

	        <div class="header-logo" itemscope="brand">


 			<?php $logo_img =  cs_get_option('logo_img'); ?>
            
                <?php if($logo_img) : ?>
           
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
	                <img src="<?php echo $logo_img;  ?>" alt="Schwan's " itemprop="logo" />
	            </a>

               <?php else : ?>

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
	                <img src="<?php echo get_template_directory_uri(); ?>/img/schwans-logo-full.svg" alt="Schwan's " itemprop="logo" />
	            </a>

               <?php endif; ?>


	            
	        </div>

        <!-- start main nav wrapper -->
        
		<div class="header-nav">
		    <div class="wrapper">
		        <!-- start flyin -->
		        <div class="headerFlyin js-headerFlyin" data-disabled-breakpoints="large">
		            <button type="button" class="headerFlyin-trigger js-headerFlyin-trigger">
		                <i id="leftNavButton" class="icn icn_menu"></i>
		            </button>
		            <nav class="headerFlyin-panel js-headerFlyin-panel" role="navigation">
		                <ul class="headerUtilStack">
	                    
					<?php 
					$myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' );
					if ( $myaccount_page_id  && !is_user_logged_in()) {
					    $myaccount_page_url = get_permalink( $myaccount_page_id );
					    ?>
					    <li><a href="<?php echo $myaccount_page_url; ?>"><?php _e('Sing In', 'toscanarunner'); ?></a></li>
					    <?php
					}
					if ( $myaccount_page_id && is_user_logged_in()) {
					    $logout_url = wp_logout_url( get_permalink( $myaccount_page_id ) );
					    if ( get_option( 'woocommerce_force_ssl_checkout' ) == 'yes' )
					        $logout_url = str_replace( 'http:', 'https:', $logout_url );
					    ?>
					    <li><a href="<?php echo $logout_url; ?>" class="login-header"><?php _e('Logout', 'woocommerce'); ?></a></li>
					<?php } ?>
										
	                        <li>
	                            <a href="#">Create An Account</a>
	                        </li>



								<?php

									 $free_delivery_menu_text =  cs_get_option('free_delivery_menu_text'); 
									 $free_delivery_menu_link =  cs_get_option('free_delivery_menu_link'); 
									 $auto_reorder_text =  cs_get_option('auto-reorder-text'); 
									 $auto_reorder_link =  cs_get_option('auto-reorder-link'); 
								?>


								 <?php if($free_delivery_menu_text && $free_delivery_menu_link) : ?>
					           
					                  <li>
					                    <a href="<?php $free_delivery_menu_link; ?>">
					                    	<?php echo $free_delivery_menu_text; ?>
					                    </a>
					                </li>

					               <?php else : ?>

									   <li>
						                    <a href="#">FREE&#42; DELIVERY 
							                    <span style="font-weight:normal;">for online orders $49.99 or more.<br>
								                    <span style="font-size:11px;">
								                    	<u>Learn More &#9658;</u>
								                    </span>
							                    </span>
						                    </a>
					                    </li>
					               <?php endif; ?>


								 <?php if($auto_reorder_text && $auto_reorder_link) : ?>
					           
					                  <li class="isHiddenSM isHiddenMD">
						                    <a href="<?php echo $auto_reorder_link; ?>"><?php echo $auto_reorder_text; ?></a>
					                    </li>

					               <?php else : ?>
					 					<li class="isHiddenSM isHiddenMD">
						                    <a href="#">Auto-Reorder</a>
					                    </li>
					               <?php endif; ?>

		                   

		                   
		                  
		                </ul>

		          

		            <div class="js-headerDropdowns" data-disabled-breakpoints="small medium">

<?php 



echo '<ul class="headerMainNav">';
		
		$cat_value = array(
			'type'                     => 'product',
			'child_of'                 => 0,
			'parent'                   => '',
			'orderby'                  => 'name',
			'order'                    => 'ASC',
			'hide_empty'               => 1,
			'hierarchical'             => 1,
			'exclude'                  => '',
			'include'                  => '',
			'number'                   => '',
			'taxonomy'                 => 'product_cat',
			'pad_counts'               => false 

		); 
		
		$categories = get_categories( $cat_value );
		if($categories){
			foreach($categories as $cat) {
				echo '
				<li><a href="'. get_category_link( $cat->term_id ) .'">' . $cat->name . '</a></li>
				
				';
			}
		} else {
			echo '<li>'.__( 'No Product Category found!', 'toscanarunner' ).'</li>';
		
	
			} 	
		echo '</ul>';
		?>






                    <!-- start main nav -->
                
                   <!--  <ul class="headerMainNav">
                    
                        <li>
							<div class="headerDropdown js-headerDropdowns-item">
							    <a href="#" class="headerDropdown-trigger js-headerDropdowns-trigger">Fruits & Vegetables</a>
							    <div class="js-headerDropdowns-panel  headerDropdown-panel">


							    <div class="headerSpotlight">
		            
				                    <ul class="headerSpotlight-relatedList">
					                    <li><a href="#">Fruit</a></li>
					                    <li><a href="#">Vegetable Blends</a></li>
					                    <li><a href="#">Vegetables</a></li>
					           			<li><a href="#">Smoothies</a></li>
					           			<li><a href="#">Organic</a></li>
					           			<li> <a href="#">LiveSmart®</a></li>
				           		    </ul>
		                
						            <div class="headerSpotlight-featured">
						                <ul class="headerSpotlight-featured-list">
						                    
				                            <li>
				                                <a href="#" class="headerFeature">                                    
				                                    <img data-llhi="img/66009-1-180.jpg" >
				                                    
				                                    <span class="headerFeature-title">Whole Blueberries</span>
				                                </a>
				                            </li>
				                        
				                            <li>
				                                <a href="#" class="headerFeature">                                    
				                                    <img data-llhi="img/60421-1-180.jpg" >
				                                    
				                                    <span class="headerFeature-title">Asparagus Spears</span>
				                                </a>
				                            </li>
						                </ul>
						            </div>

						        </div>
						    </div>
						</div>
		            </li>       
					<li><a href="#">test1</a></li>      
					<li><a href="#">test2</a></li>      
					<li><a href="#">test3</a></li>      
					<li><a href="#">test4</a></li>      
					<li><a href="#">test5</a></li>      
					<li><a href="#">test6</a></li>      
					<li><a href="#">test7</a></li>      
					<li><a href="#">test8</a></li>      
			      
				</ul>                     -->   


				
		                        
	        <!-- end main nav -->
	   		</div>


		                
                <div role="navigation">

                <?php
	              
	                
	              wp_nav_menu( array(
	                'menu'              => __( 'Primay Menu', 'digitaljourney'),
	                'theme_location'    => 'primarymenuleft',
	                'depth'             => 2,
	                'menu_class'        => 'headerSplitNav',
	                'fallback_cb'       => 'toscanarunner_default_menu_left'
	                ));
	                
	                           
	            ?>
                    
                    <div class="free_deliv_cta">



					<?php

					 $free_delivery_menu_text =  cs_get_option('free_delivery_menu_text'); 
					 $free_delivery_menu_link =  cs_get_option('free_delivery_menu_link'); 
					 $auto_reorder_text =  cs_get_option('auto-reorder-text'); 
					 $auto_reorder_link =  cs_get_option('auto-reorder-link'); 

					?>
		            
		                <?php if($free_delivery_menu_text && $free_delivery_menu_link) : ?>
		           
		                 <a href="<?php echo $free_delivery_menu_link; ?>">
		                       <?php echo $free_delivery_menu_text; ?>
			            </a>

		               <?php else : ?>

						  <a href="#">
		                        FREE&#42; DELIVERY 
		                        <span> for online orders $49.99 or more.</span> 
		                        <span style="font-size:11px;">
		                       		 <u>Learn More &#9658;</u>
		                        </span>
		                    </a>

		               <?php endif; ?>


		 				<?php if($auto_reorder_text && $auto_reorder_link) : ?>
		           
		                 <div class="auto-reorder-header">
		                    <a href="<?php echo $auto_reorder_link; ?>"><?php echo $auto_reorder_text; ?></a>
		                </div>

		               <?php else : ?>

						 <div class="auto-reorder-header">
		                    <a href="/autoreorder">Auto-Reorder</a>
		                </div>

		               <?php endif; ?>
                        
                    </div>
                    
                </div>


            </nav>
        </div>
        <!-- end flyin -->
    </div>
</div>

</header>
 <form method="GET" action="<?php echo esc_url( home_url() ); ?>">
	<fieldset class="headerSearch" role="search">
	    <label for="" class="headerSearch-label">Search Site:</label>
	   
		    <input id="" name="s" class="headerSearch-input" type="text" value="<?php the_search_query(); ?>" placeholder="Search" />
		    <button type="button" class="headerSearch-submit">
		        <i class="icn icn_search">
		            <span class="isVisuallyHidden">search</span>
		        </i>
		    </button>
	</fieldset>
  </form>