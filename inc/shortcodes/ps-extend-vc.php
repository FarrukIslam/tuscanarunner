<?php

/* Banner section */

vc_map( array(
  "name" => __("Banner Section", 'toscanarunner'),
  "base" => "toscanarunner_banner",
  "icon" => "toscanarunner_banner_icon",
  "category" =>array('By toscanarunner', 'Content'),
  "description" => __('Add Banner Section ', 'toscanarunner'),
  "params" => array(
  		 array(
		  "type" => "attach_image",
		  "heading" => __("Add Banner Image", 'toscanarunner'),
		  "param_name" => "banner_img",
		  "value" => "",
		  "description" => __("Select image from media library.", 'toscanarunner')
		),
		array(
		  "type" => "textfield",
		  "heading" => __("Welcome Text", 'toscanarunner'),
		  "param_name" => "subtitle",
		  "admin_label" => true,
		  "value" => __("Welcome to Toscanarunner", 'toscanarunner')
		),
		array(
		  "type" => "textarea_html",
		  "heading" => __("Delicious food", 'toscanarunner'),
		  "param_name" => "banner_content",
		  "admin_label" => true,
		  "value" => __("Delicious food, <span>delivered right to your door.</span>", 'toscanarunner')
		),
		array(
		  "type" => "textfield",
		  "heading" => __("Banner Link", 'toscanarunner'),
		  "param_name" => "banner_link",
		  "admin_label" => true,
		  "value" => __("http://google.com", 'toscanarunner')
		),

  		 array(
		  "type" => "attach_image",
		  "heading" => __("Add Banner list image 1", 'toscanarunner'),
		  "param_name" => "banner_list1_img",
		  "value" => "",
		  "description" => __("Select banner list image 1 from media library.", 'toscanarunner')
		),
  		 array(
		  "type" => "textfield",
		  "heading" => __("Banner Text list 1", 'toscanarunner'),
		  "param_name" => "banner_list1_text",
		  "admin_label" => true,
		  "value" => __("site url", 'toscanarunner')
		),
  		 array(
		  "type" => "attach_image",
		  "heading" => __("Add Banner list image 2", 'toscanarunner'),
		  "param_name" => "banner_list2_img",
		  "value" => "",
		  "description" => __("Select banner list image 1 from media library.", 'toscanarunner')
		),
  		 array(
		  "type" => "textfield",
		  "heading" => __("Banner Text list 2", 'toscanarunner'),
		  "param_name" => "banner_list2_text",
		  "admin_label" => true,
		  "value" => __("Delivery date and time", 'toscanarunner')
		),
  		 array(
		  "type" => "attach_image",
		  "heading" => __("Add Banner list image 3", 'toscanarunner'),
		  "param_name" => "banner_list3_img",
		  "value" => "",
		  "description" => __("Select banner list image 3 from media library.", 'toscanarunner')
		),
  		 array(
		  "type" => "textfield",
		  "heading" => __("Banner Text list 3", 'toscanarunner'),
		  "param_name" => "banner_list3_text",
		  "admin_label" => true,
		  "value" => __("Start making delicious", 'toscanarunner')
		),

  )
) );



/* image width content */

vc_map( array(
  "name" => __("Image with sub conent", 'toscanarunner'),
  "base" => "image_with_subcontent",
  "icon" => "image_with_subcontent_icon",
  "category" =>array('By toscanarunner', 'Content'),
  "description" => __('Add Image with sub text conent', 'toscanarunner'),
  "params" => array(
  		 array(
		  "type" => "attach_image",
		  "heading" => __("Image", 'toscanarunner '),
		  "param_name" => "img",
		  "value" => "",
		  "description" => __("Select image from media library.", 'toscanarunner')
		),
		
		array(
		  "type" => "textarea_html",
		  "heading" => __("Add sub title content", 'toscanarunner'),
		  "param_name" => "sub_title",
		  "admin_label" => true,
		  "value" => __("Add sub content", 'toscanarunner')
		)

  )
) );


/* Section Headig  */

vc_map( array(
  "name" => __("Section Heading", 'toscanarunner'),
  "base" => "section_headding",
  "icon" => "section_headding_icon",
  "category" =>array('By toscanarunner', 'Content'),
  "description" => __('Using section Heading', 'toscanarunner'),
  "params" => array(
  		 
		array(
		  "type" => "textfield",
		  "heading" => __("Heading section", 'toscanarunner'),
		  "param_name" => "title",
		  "admin_label" => true,
		  "value" => __("custom Heading", 'toscanarunner')
		),
		

  )
) );


/* Border Inner content */

vc_map( array(
  "name" => __("Border Inner Content", 'toscanarunner'),
  "base" => "toscanarunner_border_content",
  "icon" => "toscanarunner_border_content_icon",
  "category" =>array('By toscanarunner', 'Content'),
  "description" => __('Font page Border Inner Content', 'toscanarunner'),
  "params" => array(
  		 
		array(
		  "type" => "textfield",
		  "heading" => __("write location", 'toscanarunner'),
		  "param_name" => "border_inner_text",
		  "admin_label" => true,
		  "value" => __("No Memberships, No Minimums, No Contracts", 'toscanarunner')
		),
		

  )
) );



/**============================= about content ========================**/


vc_map( array(
  "name" => __("About Content", 'toscanarunner'),
  "base" => "about_content",
  "icon" => "about_content_icon",
  "category" =>array('By toscanarunner', 'Content'),
  "description" => __('Add your About content', 'toscanarunner'),
  "params" => array(
  		 
		array(
		  "type" => "textfield",
		  "heading" => __("Add about content Title", 'toscanarunner'),
		  "param_name" => "title",
		  "admin_label" => true,
		  "value" => __("Add your about content", 'toscanarunner')
		),
		array(
		  "type" => "textarea_html",
		  "heading" => __("Add content text", 'toscanarunner'),
		  "param_name" => "content_text",
		  "admin_label" => true,
		  "value" => __("set your about content here", 'toscanarunner')
		),

  )
) );


/* Features product */

vc_map( array(
  "name" => __("Features Product", 'toscanarunner'),
  "base" => "featured_product_categories",
  "icon" => "featured_product_categories_icon",
  "category" =>array('By toscanarunner', 'Content'),
  "description" => __('Add Features Product ', 'toscanarunner'),
  "params" => array(
  		 
		array(
		  "type" => "textfield",
		  "heading" => __("Per category", 'toscanarunner'),
		  "param_name" => "per_cat",
		  "admin_label" => true,
		  "value" => __("3", 'toscanarunner')
		),
		array(
		  "type" => "textfield",
		  "heading" => __("columns", 'toscanarunner'),
		  "param_name" => "columns",
		  "admin_label" => true,
		  "value" => __("4", 'toscanarunner')
		),
		

  )
) );

/* Product  item*/

vc_map( array(
  "name" => __("Product Item", 'toscanarunner'),
  "base" => "product_item",
  "icon" => "product_item_icon",
  "category" =>array('By toscanarunner', 'Content'),
  "description" => __('Add Product Shortcodes', 'toscanarunner'),
  "params" => array(
  		 
		array(
		  "type" => "textfield",
		  "heading" => __("Product Per page", 'toscanarunner'),
		  "param_name" => "product_item",
		  "admin_label" => true,
		  "value" => __("3", 'toscanarunner')
		),
		
		

  )
) );




