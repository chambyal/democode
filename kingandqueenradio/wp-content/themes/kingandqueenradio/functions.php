<?php
add_filter('widget_text', 'do_shortcode');
register_sidebar( array(
		'name' => __( 'Header Phone No', 'twentysixteen' ),
		'id' => 'phone',
		'description' => __( 'Phone', 'twentysixteen' ),		
	) );
register_sidebar( array(
		'name' => __( 'Footer menu ', 'twentysixteen' ),
		'id' => 'footermenu',
		'description' => __( 'Phone', 'twentysixteen' ),		
	) );
register_sidebar( array(
		'name' => __( 'About Us Footer', 'twentysixteen' ),
		'id' => 'Aboutus',
		'description' => __( 'About US', 'twentysixteen' ),		
	) );
?>	
	