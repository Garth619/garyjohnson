<?php 

/* Template Name: About */

get_header(); ?>

<div class="internal_main">

<div class="internal_container internal_wrapper">
	
	<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
	
	<div id="about_trigger" class="about_top_wrapper content">
		
		<div class="about_top_left">
			
			<?php the_field( 'about_top_content' ); ?>
			
		</div><!-- about_top_left -->
		
		<div class="about_top_right">
			
			<div class="about_right_video_wrapper">
				
				<span class="about_right_title"><?php the_field( 'learn_about_our_firm_title' ); ?></span><!-- about_right_title -->
				
				<div class="about_right_video">
					
					<div class="my_wistia wistia_embed wistia_async_<?php the_field( 'learn_about_our_firm_wistia_id' ); ?> popover=true popoverContent=html"></div><!-- my_wistia -->
					
					<?php $learn_about_our_firm_video_thumbnail = get_field( 'learn_about_our_firm_video_thumbnail' ); ?>
					
					<?php if ( $learn_about_our_firm_video_thumbnail ) { ?>
					
					<img class="about_video_thumb" src="<?php echo $learn_about_our_firm_video_thumbnail['url']; ?>" alt="<?php echo $learn_about_our_firm_video_thumbnail['alt']; ?>" />
					
					<?php } ?>
					
					<div class="play_button_overlay">
						
						<div class="play_button"></div><!-- play_button -->
						
					</div><!-- play_button_overlay -->
					
				</div><!-- intl_about_img -->
				
			</div><!-- about_right_video_wrapper -->
			
		</div><!-- about_top_right -->
		
	</div><!-- about_top_wrapper -->
	
	<div id="about_bottom_trigger" class="about_bottom_wrapper">
		
		<div class="about_bottom_left">
			
			<div class="about_bottom_blockquote" style="background:url(<?php bloginfo('template_directory');?>/images/light-grey-terrazzo.png) top left repeat">
				
				<div class="about_bottom_blockquote_inner">
					
					<div class="about_bottom_blockquote_content">
						
						<span>
						
							<?php if(get_field('about_bottom_blockquote')): ?>
							 
								<?php while(has_sub_field('about_bottom_blockquote')): ?>
							 
									<strong><?php the_sub_field( 'line_breaks' ); ?></strong>
							    
								<?php endwhile; ?>
							 
							<?php endif; ?>
						
						</span>
						
					</div><!-- about_bottom_blockquote_content -->
					
					<a class="about_blockquote_button" href="#consultation"></a><!-- about_blockquote_button -->
					
				</div><!-- about_bottom_blockquote_inner -->
				
			</div><!-- about_bottom_blockquote -->
			
		</div><!-- about_bottom_left -->
		
		<div class="about_bottom_right content">
			
			<?php the_field( 'about_bottom_content' ); ?>
			
		</div><!-- about_bottom_right -->
		
	</div><!-- about_bottom_wrapper -->
	
	<div id="about_awards_trigger" class="about_awards_wrapper">
		
		<span class="about_awards_title"><?php the_field( 'about_awards_slider_title' ); ?></span><!-- about_awards_title -->
		
		<div class="about_awards_slider">
			
			<?php if(get_field('about_page_awards_slider')): ?>
			 
				<?php while(has_sub_field('about_page_awards_slider')): ?>
			 
					<div class="about_awards_slide">
				
						<div class="about_awards_slide_inner">
					
							<?php $logo = get_sub_field( 'logo' ); ?>
		
							<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
					
						</div><!-- about_awards_slide_inner -->
				
					</div><!-- about_awards_slide -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
						
		</div><!-- about_awards_slider -->
		
	</div><!-- about_awards_wrapper -->
	
</div><!-- internal_container -->

</div><!-- internal_main -->

<?php get_footer(); ?>
		
</script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>

