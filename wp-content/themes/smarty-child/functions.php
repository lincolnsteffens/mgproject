<?php
/* - Includes
 *
 * Path
 *
 * 1. Setup
 * 2. Scripts & Styles
 * 3. TGM
 * 4. Custom Post Type
 * 5. Customizer
 * 6. Custom
 * 7. Visual Composer
 * 8. Widgets
 * 9. Print Styles
 * 10. Enqueued Files
 *
*/

// Path
$inc_path = get_template_directory() . '/inc';

// 1. Setup
require_once $inc_path . '/setup.php';

// 2. Scripts & Styles
require_once $inc_path . '/scripts_styles.php';

// 3. TGM
require_once $inc_path . '/tgm/tgm-plugin-registration.php';

// 4. Custom Post Type
if( class_exists('STM_PostType') ) {
	require_once $inc_path . '/custom-post-types/'.smarty_get_university_mode().'/custom-post-types.php';
}

// 5. Customizer
require_once $inc_path . '/customizer/'.smarty_get_university_mode().'/customizer.class.php';

// 6. Custom
require_once $inc_path . '/custom.php';

// 7. Visual Composer
if( defined( 'WPB_VC_VERSION' ) ) {
	require_once $inc_path . '/visual-composer/'.smarty_get_university_mode().'/visual-composer.php';
    $dir = get_stylesheet_directory() . '/vc_templates/'.smarty_get_university_mode();
    vc_set_shortcodes_templates_dir( $dir );
}

// 8. Widgets
require_once $inc_path . '/widgets/widgets.php';

// 9. Print Styles
require_once $inc_path . '/print_styles.php';

// 10. Enqueued Files
function my_theme_enqueue_styles() {

   wp_enqueue_script('validation_script', get_stylesheet_directory_uri() . '/assets/js/script.js', false, true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles');


//body class function

add_filter( 'body_class', 'sk_body_class_for_pages' );
/**
 * Adds a css class to the body element
 *
 * @param  array $classes the current body classes
 * @return array $classes modified classes
 */
function sk_body_class_for_pages( $classes ) {

	if ( is_singular( 'page' ) ) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	return $classes;

}

//Customize logo on Dashboard login panel
function my_custom_login_logo() {
	echo '<style type="text/css">
        .login h1 a {
          width: 222px !important;
          height: 49px !important;
          background-image:url('.get_bloginfo('template_directory').'/assets/images/mgp_logo_black.png) !important;
          background-size: cover;
        }
  </style>';
}

add_action('login_head', 'my_custom_login_logo');

// FUNCTION FOR ADDING TITTLE ATTRIBUTE TO LOGO
function my_login_url_title() {
	return 'Marcus Graham Project';
}

add_filter('login_headertitle', 'my_login_url_title');

//Renaming custome post type

