<?php get_header(); ?>


<div class="internal_main">

<?php get_template_part('page-templates/template', 'banner' ); ?>

<div class="internal_container two_col">
	
	<?php get_sidebar('blog'); ?>
	
	<div class="internal_content content">
		
		<?php get_template_part( 'loop', 'single' ); ?>
		
	</div><!-- internal_content -->
	
</div><!-- internal_container -->

</div><!-- internal_main -->

				
<?php get_footer(); ?>




