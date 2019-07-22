<?php 

/* Template Name: Judo Law */

get_header(); ?>


<div class="internal_main">

<div class="internal_container internal_wrapper">
	
	<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
	
	<div class="judo_law_wrapper">
		
		<div class="judo_law_left content">
			
			<?php get_template_part( 'loop', 'page' ); ?>
						
		</div><!-- judo_law_left -->
		
		<div class="judo_law_right">
			
			<div class="judo_law_video_wrapper">
				
				<div class="judo_wistia wistia_embed wistia_async_<?php the_field( 'wistia_id_judo_law' ); ?> popover=true popoverContent=html"></div>
				
				<div class="judo_law_video_overlay">
					
					<div class="judo_law_video_content">
						
						<div class="judo_law_logo_wrapper">
							
							<?php echo file_get_contents("wp-content/themes/garyjohnson/images/judolaw2.svg"); ?>
							
						</div><!-- judo_law_logo_wrapper -->
						
						<span class="click_watch">Click to Watch</span><!-- click_watch -->
						
					</div><!-- judo_law_video_content -->
					
				</div><!-- judo_law_video_overlay -->
				
				<img src="<?php bloginfo('template_directory');?>/images/intl_video_img_02_hover.jpg"/>
				
			</div><!-- judo_law_video_wrapper -->
			
		</div><!-- judo_law_right -->
		
	</div><!-- judo_law_wrapper -->
	
</div><!-- internal_container -->

</div><!-- internal_main -->

<?php get_footer(); ?>

</script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>