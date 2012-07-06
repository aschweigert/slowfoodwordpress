<?php
     
    require_once( TEMPLATEPATH . '/theme-settings.php' );
     	
	// Add RSS links to <head> section
	automatic_feed_links();

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    	remove_action('wp_head', 'wp_generator' );
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => __('Sidebar Widgets','slowfood' ),
    		'id'   => 'sidebar-widgets',
    		'description'   => __( 'These are widgets for the sidebar.','slowfood' ),
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    // Add a custom post types for the homepage carousel + event listings
    add_action( 'init', 'create_post_type' );
    
    function create_post_type() {
		register_post_type( 'sf_homepage-banner',
			array(
				'labels' => array(
					'name' => __( 'Homepage Banners' ),
					'singular_name' => __( 'Homepage Banner' )
					),
					'public' => true,
					'has_archive' => true,
				)
			);
			
		register_post_type( 'sf_events',
			array(
				'labels' => array(
					'name' => __( 'Events' ),
					'singular_name' => __( 'Event' )
					),
					'public' => true,
					'has_archive' => true,
				)
			);
	}
	
    
    // Hide the admin bar (for now)
    add_filter( 'show_admin_bar', '__return_false' );

?>