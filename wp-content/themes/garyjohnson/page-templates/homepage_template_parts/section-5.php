<section id="section_five">
	
	<div class="sec_five_inner">
		
		<h2 class="sec_five_inner_header"><?php the_field( 'section_five_header_gj' ); ?></h2><!-- sec_five_inner -->
		
		<div id="sec_five_trigger" class="sec_five_container">
			
			<div class="sec_five_image">
				
				<?php $section_five_image = get_field( 'section_five_image' ); ?>

				<img src="<?php echo $section_five_image['url']; ?>" alt="<?php echo $section_five_image['alt']; ?>" />

			</div><!-- sec_five_image -->
			
			<div class="sec_five_content content">
				
				<?php the_field( 'section_five_content_gj' ); ?>
				
			</div><!-- sec_five_content -->
			
		</div><!-- sec_five_container -->
		
	</div><!-- sec_five_inner -->
	
</section><!-- section_five -->