<section id="section_three">
	
	<div class="sec_three_inner">
		
		<h1 class="sec_three_header"><?php the_field( 'section_three_header_gj' ); ?></h1><!-- section_three_header -->
		
		<span class="sec_three_description"><?php the_field( 'section_three_intro_gj' ); ?></span><!-- sec_three_description -->
		
		<div id="sec_three_trigger" class="sec_three_top_content_wrapper content">
			
			<div class="sec_three_top_content">
			
				<?php the_field( 'section_three_content_gj' ); ?>
			
			</div><!-- sec_three_top_content -->
			
			<div class="sec_three_top_img">
				
				<div class="sec_three_top_img_inner">
					
					<?php $section_three_image = get_field( 'section_three_image' ); ?>

					<img data-src="<?php echo $section_three_image['url']; ?>" alt="<?php echo $section_three_image['alt']; ?>" />
				
					<a class="meet_attorneys_button" href="<?php the_field( 'meet_the_attorneys_page_link' ); ?>">Meet the Attorneys</a><!-- meet_attorneys_button -->
				
				</div><!-- sec_three_top_img_inner -->
				
			</div><!-- sec_three_top_img -->
			
		</div><!-- sec_three_top_content_wrapper -->
		
		<div id="sec_three_bottom_trigger" class="sec_three_bottom_content_wrapper">
			
			<div class="sec_three_blockquote">
				
				<div class="sec_three_blockquote_inner" data-src="<?php bloginfo('template_directory');?>/images/light-grey-terrazzo.png">
					
					<div class="sec_three_blockquote_content">
						
						<div class="sec_three_quote">
							
							<?php the_field( 'section_three_blockquote_gj' ); ?>
						
						</div><!-- sec_three_quote -->
						
						<span class="blockquote_name"><?php the_field( 'section_three_blockquote_name' ); ?></span><!-- blockquote_name -->
						
					</div><!-- sec_three_blockquote_content -->
					
				</div><!-- sec_three_blockquote_inner -->
				
			</div><!-- sec_three_blockquote -->
			
			<div class="sec_three_bottom_content content">
				
				<?php the_field( 'section_three_bottom_content_gj' ); ?>
				
			</div><!-- sec_three_bottom_content -->
			
		</div><!-- sec_three_bottom_content_wrapper -->
		
	</div><!-- sec_three_inner -->
	
</section><!-- section_three -->