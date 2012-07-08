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

	// add user contact methods
    function bootstrap_contactmethods( $contactmethods ) {
	    // Add Twitter
	    if ( !isset( $contactmethods['twitter'] ) )
	    $contactmethods['twitter'] = 'Twitter';

	    // Add Facebook
	    if ( !isset( $contactmethods['facebook'] ) )
	    $contactmethods['Facebook'] = 'Facebook';

	    // Add Google+
	    if ( !isset( $contactmethods['gplus'] ) )
	    $contactmethods['gplus'] = 'Google+';

	    // Remove Yahoo IM
	    if ( isset( $contactmethods['yim'] ) )
	    unset( $contactmethods['yim'] );

	    // Remove AIM
	    if ( isset( $contactmethods['aim'] ) )
	    unset( $contactmethods['aim'] );

	    return $contactmethods;
	}

	add_filter( 'user_contactmethods', 'bootstrap_contactmethods', 10, 1 );

	// a little function to retrieve to the social media links
	function slowfood_social_links () {

		$fields = array(
			'rss' => 'Link to RSS Feed',
			'facebook' => 'Link to Facebook Profile',
			'twitter' => 'Link to Twitter Page',
			'youtube' => 'Link to YouTube Page',
			'flickr' => 'Link to Flickr Page',
			'gplus' => 'Link to Google Plus Page',
			'pinterest' => 'Link to Pinterest Profile',
			'linkedin' => 'Link to LinkedIn Profile or Group'
		);

		foreach ( $fields as $field => $title ) {
			$field_link = $field . '_link';
			$directory = get_bloginfo('template_directory');

			if ( get_option( $field_link ) ) :
				if ( $field == 'gplus' ) {
					echo '<li><a href="' . esc_url( get_option( $field_link ) ) . '" title="' . $title . '" rel="me"><img src="' . get_bloginfo('template_directory') . '/assets/img/social-icons/' . $field . '.png" alt="' . $field .'-fav" /></a></li>';
				} else {
					echo '<li><a href="' . esc_url( get_option( $field_link ) ) . '" title="' . $title . '"><img src="' . get_bloginfo('template_directory') . '/assets/img/social-icons/' . $field . '.png" alt="' . $field .'-fav" /></a></li>';
				}
			endif;
		}
	}

	// add thumbnail support, use the first image in a post if a user forget to set a featured image
	add_theme_support( 'post-thumbnails' );

	function autoset_featured_image() {
          global $post;
          $already_has_thumb = has_post_thumbnail($post->ID);
              if (!$already_has_thumb)  {
              $attached_image = get_children( "post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" );
                          if ($attached_image) {
                                foreach ($attached_image as $attachment_id => $attachment) {
                                set_post_thumbnail($post->ID, $attachment_id);
                                }
                           }
                        }
      }

	add_action('the_post', 'autoset_featured_image');
	add_action('save_post', 'autoset_featured_image');
	add_action('draft_to_publish', 'autoset_featured_image');
	add_action('new_to_publish', 'autoset_featured_image');
	add_action('pending_to_publish', 'autoset_featured_image');
	add_action('future_to_publish', 'autoset_featured_image');


    // Hide the admin bar (for now)
    add_filter( 'show_admin_bar', '__return_false' );

?>