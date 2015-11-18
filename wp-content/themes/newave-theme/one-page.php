<?php
/*
Template name: One Page Template
*/

get_header();


$main_page_id = get_option('page_on_front');

if ( ( $menu_locations = get_nav_menu_locations() ) && $menu_locations['main'] ) {
	
    $menu = wp_get_nav_menu_object( $menu_locations['main'] );
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    $menu_items_include = array();
    foreach($menu_items as $item) {
        if($item->object == 'page')
            $menu_items_include[] = $item->object_id;
    }
	
	$main_query = new WP_Query( array( 'post_type' => 'page', 'post__in' => $menu_items_include, 'posts_per_page' => count($menu_items_include), 'orderby' => 'post__in' ) );

} // if main menu defined
else{
	
   	$args = array(
    			'post_type' => 'page',
    			'order' => 'ASC',
    			'orderby' => 'menu_order',
    			'posts_per_page' => '-1'
	);
  
    $main_query = new WP_Query($args);
	
}// if there is no main menu defined, use the page order defined by the 'Order' attribute

// loop through all the pages defined
$display_menu = true;
if( have_posts() ) {
    
	while ($main_query->have_posts()) {

		$main_query->the_post();

    	global $post;

    	$post_name = $post->post_name;
    
    	$post_id = get_the_ID();
    
    	$section_page = (get_post_meta($post_id, "newave_is_page_section", true) == "yes");
    	if ( $section_page && ( $post_id != $main_page_id ) ) {

    		if (get_post_meta($post_id, "newave_page_section", true) == "home")
      	    	get_template_part('sections/home_section');

      	    if (get_post_meta($post_id, "newave_page_section", true) == "default")
      	    	get_template_part('sections/normal_section');	

      	    if (get_post_meta($post_id, "newave_page_section", true) == "portfolio")
      	    	get_template_part('sections/portfolio_section');	
      	    	
    		if (get_post_meta($post_id, "newave_page_section", true) == "parallax")
      	    	get_template_part('sections/parallax_section');
      	    	
    		if (get_post_meta($post_id, "newave_page_section", true) == "contact")
      	    	get_template_part('sections/contact_section');
				
			if (get_post_meta($post_id, "newave_page_section", true) == "blog")
      	    	get_template_part('sections/blog_section');	
    	
    	} // if section page

    	if( $display_menu ){
        	get_template_part('sections/menu_section');
     	}
     	$display_menu = false;
    	
	} // while have posts
	
} // if have posts

wp_reset_query();

get_footer();

?>