<?php get_header(); ?>


<div class="internal_main">

<?php get_template_part('page-templates/template', 'banner' ); ?>

<div class="internal_container two_col">
	
	<?php get_sidebar(); ?>
	
	<div class="internal_content content">
		
		<?php if(get_field('banner_h1s') == "H1 Tags") :?>
		
			<h2 class="pa_header"><?php the_title();?></h2><!-- pa_header -->
			
			<?php else: ?>
		
			<h1 class="pa_header"><?php the_title();?></h1><!-- pa_header -->
		
		<?php endif;?>
		
		<?php get_template_part( 'loop', 'page' ); ?>

	</div><!-- internal_content -->
	
</div><!-- internal_container -->

</div><!-- internal_main -->

	
<?php get_footer(); ?>

