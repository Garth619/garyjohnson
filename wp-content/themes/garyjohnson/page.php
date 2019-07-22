<?php get_header(); ?>


<div class="internal_main">

<?php get_template_part('page-templates/template', 'banner' ); ?>

<div class="internal_container two_col">
	
	<?php get_sidebar(); ?>
	
	<div class="internal_content content">
		
		<h1><?php the_title();?></h1>
		
		<?php get_template_part( 'loop', 'page' ); ?>

	</div><!-- internal_content -->
	
</div><!-- internal_container -->

</div><!-- internal_main -->

	
<?php get_footer(); ?>

