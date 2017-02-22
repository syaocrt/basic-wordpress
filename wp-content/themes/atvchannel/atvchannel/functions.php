<?php
function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

/* ============RegisterSidebar==============
 * When register_sidebars actives, widget in admin page will auto enable
 */
function register_right_sidebar(){
	
$args = array(
		'name'          => 'sidebar-right',
		'id'            => "sidebar-1",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
);
register_sidebars( $args );
}
add_action('widgets_init','register_right_sidebar');

/* ============RegisterNavigationMenu==============
 * register_nav_menus: register menus we want to use.
 */
function register_navigation_menu(){
	register_nav_menus( array(
			'header_menu' => 'ATV Channel Header  Menu',
			'footer_menu' => 'ATV Channel Footer  Menu',
	) );
}
add_action( 'init', 'register_navigation_menu' );
/* ============Theme support============== */
add_theme_support( 'post-thumbnails', array( 'post' ) );

/* =============CUSTOM HEADER IMAGES================ */
function themename_custom_header_setup() {
	$args = array(
			'default-image'      => get_template_directory_uri() . '/assets/images/default-image.jpg',
			'default-text-color' => '000',
			'width'              => 300,
			'height'             => 150,
			'header-text'		 => true
	);
	add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );

$header_images = array(
		'pic1' => array(
				'url'           => get_template_directory_uri() . '/assets/images/pic1.jpg',
				'thumbnail_url' => get_template_directory_uri() . '/assets/images/pic1.jpg',
				'description'   => 'pic1',
		),
		'pic2' => array(
				'url'           => get_template_directory_uri() . '/assets/images/pic2.jpg',
				'thumbnail_url' => get_template_directory_uri() . '/assets/images/pic2.jpg',
				'description'   => 'pic2',
		),
		'kancolle' => array(
				'url'           => get_template_directory_uri() . '/assets/images/default-image.jpg',
				'thumbnail_url' => get_template_directory_uri() . '/assets/images/default-image.jpg',
				'description'   => 'kancolle',
		)
);
register_default_headers( $header_images );
/*========== CUSTOM LOGO ==========*/
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
	$defaults = array(
			'height'      => 141,
			'width'       => 141,
			'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

/*=======Test Action ========= */

function my_footer_echo($var,$var2){
	echo 'ND cua action '.$var.' And '.$var2;
}
add_action( 'my_footer_hook', 'my_footer_echo',10,2);