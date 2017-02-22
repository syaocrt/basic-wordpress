<html>
<head>
<title><?php bloginfo('name')  ?></title>
	 <?php
		
wp_head ();
		if (function_exists ( 'the_custom_logo' )) {
			the_custom_logo ();
		}
		?>
</head>
<img src="<?php echo( get_header_image() ); ?>"
	alt="<?php echo( get_bloginfo( 'title' ) ); ?>"
	height="<?php echo get_custom_header()->height; ?>"
	width="<?php echo get_custom_header()->width; ?>" />
<h1 id="header">
	<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
</h1>
<?php

wp_nav_menu ( array (
		'theme_location' => 'header_menu' 
) );

?>
<body <?php body_class(); ?>>