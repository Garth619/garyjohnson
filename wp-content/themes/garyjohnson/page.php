<?php get_header(); ?>


<div class="internal_main">

<div class="internal_banner">
	
	<div class="banner_content">
		
		<div class="banner_title">
			
			<span>We go the extra</span><br/>
			<span>mile for our clients</span>
		
		</div><!-- banner_title -->
		
		<a class="internal_consultation_button" href="">Click for your free consultation</a><!-- internal_consultation_button -->
		
	</div><!-- banner_content -->
	
	<img class="banner_image" src="<?php bloginfo('template_directory');?>/images/intl_header_img.jpg"/>
	
</div><!-- internal_banner -->

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
