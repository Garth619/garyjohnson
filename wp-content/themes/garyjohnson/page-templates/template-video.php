<?php 

/* Template Name: Video Center */

get_header(); ?>


<div class="internal_main">

<div class="internal_container internal_wrapper">
	
	<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
	
	<div class="video_center_wrapper">
		
		<?php if(get_field('wistia_videos')): ?>
		 
			<?php while(has_sub_field('wistia_videos')): ?>
		 
				<div class="single_video">
			
					<div class="single_video_thumbnail">
				
						<div class="my_wistia">
					
							<div class="play_button_overlay">
						
								<div class="play_button"></div><!-- play_button -->
						
							</div><!-- play_button_overlay -->
					
							<div class="video wistia_embed wistia_async_<?php the_sub_field( 'wistia_id' ); ?> popover=true popoverContent=thumbnail">
						
					</div><!-- video -->
					
				</div><!-- my_wistia -->
				
			</div><!-- single_video_thumbnail -->
			
			<span class="video_title"><?php the_sub_field( 'video_title' ); ?></span><!-- video_title -->
			
		</div><!-- single_video -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
				
	</div><!-- video_center_wrapper -->
	
</div><!-- internal_container -->

</div><!-- internal_main -->



<?php get_footer(); ?>

</script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>