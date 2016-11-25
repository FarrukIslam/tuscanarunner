

<?php 


/* ===================================
repeatable quick link 
=====================================*/

class socialmedia_right_footer extends WP_Widget
	{
	/**
	 * socialmedia_right_footer constructor.
	 */
	public function __construct()
	{
		parent::__construct(false, $name = "Toscanarunner Right Social media", array("description" => "Toscanarunner social media description"));
	}

	/**
	 * @see WP_Widget::widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget($args, $instance)
	{
		// render widget in frontend
		$title = apply_filters( 'widget_title', $instance['title'] );
		$quick_title = apply_filters( 'widget_quick_title', $instance['quick_title']);
		$urls = apply_filters( 'widget_url', $instance['urls'] );


		$email_sub = apply_filters( 'widget_email_subcrib', $instance['email_sub'] );
		$apps_img = apply_filters( 'widget_apps_img', $instance['apps_img'] );
		$apps_link = apply_filters( 'widget_apps_link', $instance['apps_link'] );
		$apps_content = apply_filters( 'widget_apps_content', $instance['apps_content'] );



		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) )

 		echo $args['before_title'] . $title . $args['after_title'];
		 
		echo '<div class="footerSocial-hd ovHidden input-emailCapture">'.do_shortcode($email_sub).'</div>';
		
		echo '  <div class="footerSocial-hd">
            <a href="'.$apps_link.'" class="footerSocial-hd-trigger">
                <div class="footerSocial-hd-trigger-media">
                    <img src="'.$apps_img.'" style="height:60px; width:60px;">
                </div>
                <span class="footerSocial-hd-trigger-title">'.$apps_content.'</span>
            </a>
        </div>

		<div class="footerSocial-bd">
                    <ul class="hList hList_4n">';
				foreach ($urls as $key => $value){
					if($value) {
			            echo '<li>
                                <a href="'.$value.'">
                                	<i class="fa '.$quick_title[$key].'"></i>
                                </a>
                            </li>';    
					}
				}
		echo '</ul> </div>';

			 
		echo $args['after_widget'];
	}


	/**
	 * @see WP_Widget::update
	 *
	 * @param array $newInstance
	 * @param array $oldInstance
	 *
	 * @return array
	 */
	public function update($newInstance, $oldInstance)
	{
		$instance = $oldInstance;

		$instance['title'] = ( ! empty( $newInstance['title'] ) ) ? strip_tags( $newInstance['title'] ) : '';

		$instance['email_sub'] = ( ! empty( $newInstance['email_sub'] ) ) ? strip_tags( $newInstance['email_sub'] ) : '';


		$instance['apps_img'] = ( ! empty( $newInstance['apps_img'] ) ) ? strip_tags( $newInstance['apps_img'] ) : '';

		$instance['apps_link'] = ( ! empty( $newInstance['apps_link'] ) ) ? strip_tags( $newInstance['apps_link'] ) : '';

		$instance['apps_content'] = ( ! empty( $newInstance['apps_content'] ) ) ? strip_tags( $newInstance['apps_content'] ) : '';


		$instance['quick_title'] = array();
		$instance['urls'] = array();

		if (isset($newInstance['quick_title'])) {
			foreach ($newInstance['quick_title'] as $key => $value) {
				if (!empty(trim($value))) {
					$instance['quick_title'][$key] = $value;
					$instance['urls'][$key] = $newInstance['urls'][$key];
				}
			}
		}

		return $instance;
	}
	
	/**
	 * @see WP_Widget::form
	 *
	 * @param array $instance
	 */
	public function form($instance)
	{
		if ( isset( $instance[ 'title' ] ) )
		{
			$title = $instance[ 'title' ];
		}
		else
		{
			$title = __( 'Quick Links', 'quick_links' );
		}

		if ( isset( $instance[ 'email_sub' ] ) )
		{
			$email_sub = $instance[ 'email_sub' ];
		}



		if ( isset( $instance[ 'apps_img' ] ) )
		{
			$apps_img = $instance[ 'apps_img' ];
		}
		if ( isset( $instance[ 'apps_link' ] ) )
		{
			$apps_link = $instance[ 'apps_link' ];
		}
		if ( isset( $instance[ 'apps_content' ] ) )
		{
			$apps_content = $instance[ 'apps_content' ];
		}

		
		$quick_title = isset($instance['quick_title']) ? $instance['quick_title'] : array();
		$urls = isset($instance['urls']) ? $instance['urls'] : array();
		$quick_title[] = '';
		$form = '';
?>	
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>


		<p>
			<label for="<?php echo $this->get_field_id('email_sub'); ?>"><?php _e( 'Email Subcriber :' ); ?></label> 
			<textarea name="<?php echo $this->get_field_name( 'email_sub' ); ?>" id="<?php echo $this->get_field_id( 'email_sub' ); ?>"><?php echo esc_attr( $email_sub ); ?></textarea>


		</p>




		<p>
			<label for="<?php echo $this->get_field_id('apps_img'); ?>"><?php _e( 'Apps Image url :' ); ?></label> 

			<input class="widefat" id="<?php echo $this->get_field_id( 'apps_img' ); ?>" name="<?php echo $this->get_field_name( 'apps_img' ); ?>" type="text" value="<?php echo esc_attr( $apps_img ); ?>" />


		</p>
		<p>
			<label for="<?php echo $this->get_field_id('apps_link'); ?>"><?php _e( 'Apps Link :' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'apps_link' ); ?>" name="<?php echo $this->get_field_name( 'apps_link' ); ?>" type="text" value="<?php echo esc_attr( $apps_link ); ?>" />


		</p>
		<p>
			<label for="<?php echo $this->get_field_id('apps_content'); ?>"><?php _e( 'Apps Content :' ); ?></label> 
			<textarea name="<?php echo $this->get_field_name( 'apps_content' ); ?>" id="<?php echo $this->get_field_id( 'apps_content' ); ?>"><?php echo esc_attr( $apps_content ); ?></textarea>


		</p>



<?php		
		echo '<div class="quick_links_wrap"><label>Quick Links & Title:</label>';
			foreach ($quick_title as $idx => $value) {
				$quick_link_title = isset($quick_title[$idx]) ? $quick_title[$idx] : '';
				$url = isset($urls[$idx]) ? $urls[$idx] : '';
				$form .= '<div class="quick_form"><p>'
					. sprintf(
						'<input type="text" name="%1$s[%2$s]" value="%3$s" class="widefat" placeholder="Quick Link Title">',
						$this->get_field_name('quick_title'),
						$idx,
						esc_attr($quick_link_title))
					. '</p>'
					. '<p>'
					. sprintf(
						'<input type="text" name="%1$s[%2$s]" value="%3$s" class="widefat" placeholder="Quick Link Url">',
						$this->get_field_name('urls'),
						$idx,
						esc_attr($url))
					. '</p><input type="button" class="removebtn" value="&#xf335;" id="b_remove"/></div>';
			}
		echo $form;
			
		echo '</div>';
	}
}

add_action('widgets_init', create_function('', 'return register_widget("socialmedia_right_footer");'));

// Custom css
function social_quick_links_custom_css() {
    echo '<style type="text/css">
			.quick_links_wrap {
				text-align: left;
				width: 100%;
			}
			.quick_links_wrap label {
				font-weight: normal;
				display: block;
				padding: 10px 0;
			}
			.quick_form {
				overflow: hidden;
			}
			.quick_links_wrap .quick_form p {
				float: left;
				width: 44.3%;
				    margin-top: 0;
			}
			.quick_links_wrap .quick_form p:first-child {
				padding-right: 5px;
			}
			.add_more {
				text-align: right;
				padding: 5px 5px 10px;
			}
			.quick_form #b_remove {
				font-family: dashicons;
				padding: 0px 3px;
				background: transparent;
				border: 0;
				font-size: 18px;
				color: #ddd;
				cursor: pointer;
				-webkit-transition: all 0.3s;
				-moz-transition: all 0.3s;
				-o-transition: all 0.3s;
				transition: all 0.3s;
			}
			.quick_form #b_remove:hover {
				color: #252525;
			}
			.add_more #b_remove:focus {
				outline: 0;
			}

		</style>';
}
add_action('admin_head', 'social_quick_links_custom_css');

// Custom js
function social_quick_links_custom_js() {
    echo '<script type="text/javascript">
			jQuery(document).ready(function(){
				jQuery(function () {
				var counter = 0;
				jQuery(".removebtn").live("click",function () {
					jQuery(this).parent().remove();   
				});
			});
			});
		</script>';
}
add_action('admin_head', 'social_quick_links_custom_js');















