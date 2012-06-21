<?php
     
    require_once( TEMPLATEPATH . '/theme-settings.php' );
     	
	// Add RSS links to <head> section
	automatic_feed_links();

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => __('Sidebar Widgets','bootstrap' ),
    		'id'   => 'sidebar-widgets',
    		'description'   => __( 'These are widgets for the sidebar.','bootstrap' ),
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.
    
    
    // Add a custom post type for the homepage carousel
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
	}
    
    // Hide the admin sidebar (for now)
    add_filter( 'show_admin_bar', '__return_false' );

?>