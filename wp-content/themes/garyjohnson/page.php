<?php get_header(); ?>


<div class="internal_main">

<?php get_template_part('page-templates/template', 'banner' ); ?>

<div class="internal_container two_col">
	
	<?php get_sidebar(); ?>
	
	<div class="internal_content content">
		
		<h1><?php the_title();?></h1>
		
		<?php get_template_part( 'loop', 'page' ); ?>
		
		
<!--
		<div class="blockquote_wrapper">
			
			<div class="blockquote_inner" style="background:url(<?php bloginfo('template_directory');?>/images/light-grey-terrazzo.png) top left repeat">
				
				<div class="blockquote_content"><strong>“We are driven by the passion to work</strong> tirelessly for our clients to get them back on their feet and the <strong>results they deserve.”</strong></div>
				
				<div class="blockquote_name">-Gary C. Johnson</div>
			
			</div>
			
		</div>
		
-->
		
				
	</div><!-- internal_content -->
	
</div><!-- internal_container -->

</div><!-- internal_main -->

		

		

	
<?php get_footer(); ?>
