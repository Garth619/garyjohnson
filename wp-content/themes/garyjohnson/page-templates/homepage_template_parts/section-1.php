<section id="section_one">
	
	<div class="sec_one_left">
		
		<div class="sec_one_left_content">
			
			<div class="sec_one_header">
				
				<?php if(get_field('section_one_header')): ?>
				 
					<?php while(has_sub_field('section_one_header')): ?>
				 
						<span><?php the_sub_field( 'line_break' ); ?></span>
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
			
			</div><!-- sec_one_header -->
			
			<a class="consultation_button" href="#consultation"><?php the_field( 'section_one_click_verbiage'); ?></a><!-- consultation_button -->
			
		</div><!-- sec_one_left_content -->
		
		<div class="sec_one_left_img">
		
			<picture>
			
				<source type="image/webp" srcset="<?php bloginfo('template_directory');?>/images/hero.webp" >
					
				<img src="<?php bloginfo('template_directory');?>/images/header_img_desk.jpg"/>
		
			</picture>
					
		</div><!-- sec_one_left_img -->
		
		
	
		</div><!-- sec_one_left -->
	
	<div class="sec_one_right desktop">
		
		<?php // having issues with slick slider dirsupting my desktop animations with the "mobileFirst" setting so there are two "sec_one_right" sections, one for desktop one for mobile ?>
		
		<div class="sec_one_wistia_wrapper">
			
			<div class="sec_one_single_vid">
				
					<div class="sec_one_single_vid_wistia wistia_embed wistia_async_<?php the_field( 'section_one_video_one_wistia_id' ); ?> popover=true popoverContent=html"></div><!-- sec_one_single_vid_wistia -->
				
					
					<div class="sec_one_video_img">
						
						<?php $section_one_video_one_image = get_field( 'section_one_video_one_image' ); ?>
						
						<?php $section_one_video_one_image_webp = get_field( 'section_one_video_one_image_webp' ); ?>
						
						<picture>
							
							<source type="image/webp" srcset="<?php echo $section_one_video_one_image_webp['url']; ?>" >
				
							<img class="video_thumb" src="<?php echo $section_one_video_one_image['url']; ?>" alt="<?php echo $section_one_video_one_image['alt']; ?>" />
						
						</picture>
						
						<div class="sec_one_video_overlay">
							
							<div class="play_button"></div><!-- play_button -->
							
						</div><!-- sec_one_video_overlay -->
						
					</div><!-- sec_one_video_img -->
					
					<div class="sec_one_single_content">
					
						<span class="sec_one_video_title"><?php the_field( 'section_one_video_one_title' ); ?></span><!-- sec_one_video_title -->
					
						<span class="sec_one_video_description"><?php the_field( 'section_one_video_one_content' ); ?></span><!-- sec_one_video_description -->
					
						<span class="click_to_watch">Click to watch</span><!-- click_to_watch -->
					
					</div><!-- sec_one_single_content -->
				
			</div><!-- sec_one_single_vid -->
			
			<div class="sec_one_single_vid">
				
					<div class="sec_one_single_vid_wistia wistia_embed wistia_async_
<?php the_field( 'section_one_video_two_wistia_id' ); ?> popover=true popoverContent=html"></div><!-- sec_one_single_vid_wistia -->
					
					<div class="sec_one_video_img">
						
						<?php $section_one_video_two_image = get_field( 'section_one_video_two_image' ); ?>
						
						<?php $section_one_video_two_image_webp = get_field( 'section_one_video_two_image_webp' ); ?>
						
						<picture>
						
							<source type="image/webp" srcset="<?php echo $section_one_video_two_image_webp['url']; ?>" >
						
							<img class="video_thumb" src="<?php echo $section_one_video_two_image['url']; ?>" alt="<?php echo $section_one_video_two_image['alt']; ?>" />
						
						</picture>

						<div class="sec_one_video_overlay">
							
							
							<?php $section_one_video_two_judo_law_logo = get_field( 'section_one_video_two_judo_law_logo' ); ?>

							<img class="judo_play" src="<?php echo $section_one_video_two_judo_law_logo['url']; ?>" alt="<?php echo $section_one_video_two_judo_law_logo['alt']; ?>" />
							
						</div><!-- sec_one_video_overlay -->
						
					</div><!-- sec_one_video_img -->
					
					<div class="sec_one_single_content">
					
						<span class="sec_one_video_title"><?php the_field( 'section_one_video_two_title' ); ?></span><!-- sec_one_video_title -->
					
						<span class="sec_one_video_description"><?php the_field( 'section_one_video_two_content' ); ?></span><!-- sec_one_video_description -->
					
						<span class="click_to_watch">Click to watch</span><!-- click_to_watch -->

					</div><!-- sec_one_single_content -->
				
				
			</div><!-- sec_one_single_vid -->
			
		</div><!-- sec_one_wistia_wrapper -->
		
	</div><!-- sec_one_right -->
	
	<div class="sec_one_right mobile">
		
		<div class="sec_one_wistia_wrapper">
			
			<div class="sec_one_single_vid">
				
					<div class="sec_one_single_vid_wistia wistia_embed wistia_async_<?php the_field( 'section_one_video_one_wistia_id' ); ?> popover=true popoverContent=html"></div><!-- sec_one_single_vid_wistia -->
				
					
					<div class="sec_one_video_img">
						
						<?php $section_one_video_one_image = get_field( 'section_one_video_one_image' ); ?>
						
						<?php $section_one_video_one_image_webp = get_field( 'section_one_video_one_image_webp' ); ?>
						
						<picture>
							
							<source type="image/webp" srcset="<?php echo $section_one_video_one_image_webp['url']; ?>" >
				
							<img class="video_thumb" src="<?php echo $section_one_video_one_image['url']; ?>" alt="<?php echo $section_one_video_one_image['alt']; ?>" />
						
						</picture>
						
						<div class="sec_one_video_overlay">
							
							<div class="play_button"></div><!-- play_button -->
							
						</div><!-- sec_one_video_overlay -->
						
					</div><!-- sec_one_video_img -->
					
					<div class="sec_one_single_content">
					
						<span class="sec_one_video_title"><?php the_field( 'section_one_video_one_title' ); ?></span><!-- sec_one_video_title -->
					
						<span class="sec_one_video_description"><?php the_field( 'section_one_video_one_content' ); ?></span><!-- sec_one_video_description -->
					
						<span class="click_to_watch">Click to watch</span><!-- click_to_watch -->
					
					</div><!-- sec_one_single_content -->
				
			</div><!-- sec_one_single_vid -->
			
			<div class="sec_one_single_vid">
				
					<div class="sec_one_single_vid_wistia wistia_embed wistia_async_
<?php the_field( 'section_one_video_two_wistia_id' ); ?> popover=true popoverContent=html"></div><!-- sec_one_single_vid_wistia -->
					
					<div class="sec_one_video_img">
						
						<?php $section_one_video_two_image = get_field( 'section_one_video_two_image' ); ?>
						
						<?php $section_one_video_two_image_webp = get_field( 'section_one_video_two_image_webp' ); ?>
						
						<picture>
						
							<source type="image/webp" srcset="<?php echo $section_one_video_two_image_webp['url']; ?>" >
						
							<img class="video_thumb" src="<?php echo $section_one_video_two_image['url']; ?>" alt="<?php echo $section_one_video_two_image['alt']; ?>" />
						
						</picture>

						<div class="sec_one_video_overlay">
							
							<?php $section_one_video_two_judo_law_logo = get_field( 'section_one_video_two_judo_law_logo' ); ?>

							<img class="judo_play" src="<?php echo $section_one_video_two_judo_law_logo['url']; ?>" alt="<?php echo $section_one_video_two_judo_law_logo['alt']; ?>" />
							
						</div><!-- sec_one_video_overlay -->
						
					</div><!-- sec_one_video_img -->
					
					<div class="sec_one_single_content">
					
						<span class="sec_one_video_title"><?php the_field( 'section_one_video_two_title' ); ?></span><!-- sec_one_video_title -->
					
						<span class="sec_one_video_description"><?php the_field( 'section_one_video_two_content' ); ?></span><!-- sec_one_video_description -->
					
						<span class="click_to_watch">Click to watch</span><!-- click_to_watch -->

					</div><!-- sec_one_single_content -->
				
				
			</div><!-- sec_one_single_vid -->
			
		</div><!-- sec_one_wistia_wrapper -->
		
	</div><!-- sec_one_right -->

</section><!-- section_one -->

