<?php
/* 
 * slowfood THEME SETTINGS
 */
function slowfood_add_options_page() {
    add_theme_page( 'slowfood', 'Theme Options', 'manage_options', 'slowfood', 'slowfood_options_page' );
}
add_action( 'admin_menu', 'slowfood_add_options_page' );

function slowfood_options_page() {
?>
    <div class="wrap">
    	<?php screen_icon(); ?>
    	<h2>Slow Food Theme Options</h2>
        <form action="options.php" method="post">
            <?php
            	settings_fields( 'slowfood' );
            	do_settings_sections( 'slowfood' );
            	submit_button();
            ?>
        </form>
    </div>
<?php
}

function slowfood_settings_init() {
    add_settings_section( 'slowfood_settings', false, 'slowfood_settings_section_callback', 'slowfood' );

	add_settings_section( 'slowfood_links', 'Header Links', '__return_false', 'slowfood' );

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
		$field = $field . '_link';
		add_settings_field( $field, $title, 'slowfood_settings_field_link_callback',
			'slowfood', 'slowfood_links', array( 'field' => $field ) );
		register_setting( 'slowfood', $field, 'esc_url_raw' );
	}
}
add_action( 'admin_init', 'slowfood_settings_init' );

function slowfood_settings_section_callback() {
    echo '<p>The following fields are <strong>optional</strong>, but you may use them to add additional information about your site.</p>
    	<p>Note: To change social media settings for a user, view their edit profile screen.</p>';
}

function slowfood_settings_field_link_callback( $args ) {
	$field = $args['field'];
	echo '<input type="text" value="' . esc_url( get_option( $field ) ) . '" name="' . esc_attr( $field ) . '" class="regular-text" />';
}

?>