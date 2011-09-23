<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php if ( is_home() || is_front_page() ) {
			bloginfo( 'name' );
			if( get_bloginfo( 'description' ) )
				echo ' | ' ; bloginfo( 'description' );
            } elseif (is_404()) {
            echo '404 Not Found';	echo ' | ' ; bloginfo( 'name' );
            } elseif (is_category()) {
            echo 'Category:'; wp_title('');
            } elseif (is_search()) {
            echo 'Search Results';  echo ' | ' ; bloginfo( 'name' );
            } elseif ( is_day() || is_month() || is_year() ) {
            echo 'Archives:'; wp_title('');
            } else {
            echo wp_title(''); 	echo ' | ' ; bloginfo( 'name' );
            }
            ?></title>
<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrap">
	<div id="header">
		<div id="logo"><a href="<?php echo home_url(); ?>"><span class="hide"><?php bloginfo('name'); ?></span></a></div>
		<div id="top_nav">
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</div>
	</div>