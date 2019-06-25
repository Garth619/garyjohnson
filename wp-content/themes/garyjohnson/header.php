<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



<style>

@import url('https://fonts.googleapis.com/css?family=Montserrat:700,900|Noto+Serif:400,700|Source+Sans+Pro:600,700&display=swap');

<?php the_field( 'review_css','option'); ?>

</style>

<?php wp_head(); ?>

<?php the_field('schema_code', 'option'); ?>

<?php the_field('analytics_code', 'option'); ?>

</head>

<body <?php body_class(); ?>>
	
	<header>
		
		<div class="header_left">
			
			<div class="vertical_logo">
					
					<a class="" href="">
				
						<?php echo file_get_contents("wp-content/themes/garyjohnson/images/hero_logo_vertical-01.svg"); ?>
					
					</a>
				
				</div><!-- vertical_logo -->
				
			</div><!-- header_left -->
			
			<div class="header_middle">
				
					<nav>
				
						<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
					
					</nav>
				
			</div><!-- header_middle -->
			
			<div class="header_right">
				
				<a class="phone" href="tel:6062624551">(606) 262-4551</a>
				
				<span class="free_consultation"><strong>call for your</strong> free consultation</span><!-- free_consultation -->
				
			</div><!-- header_right -->
		
	</header>
	
	
	
	

				


			