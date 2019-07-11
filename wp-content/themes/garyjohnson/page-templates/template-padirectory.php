<?php 

/* Template Name: PA Directory */

get_header(); ?>

<div class="internal_main">

<div class="internal_container internal_wrapper">
	
	<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
	
	<div class="pa_directory_wrapper">
	
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
	
	</div><!-- pa_directory_wrapper -->
	
</div><!-- internal_container -->

</div><!-- internal_main -->

<?php get_footer(); ?>
