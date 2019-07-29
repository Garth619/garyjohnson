<section id="section_two" style="background:url(<?php bloginfo('template_directory');?>/images/light-grey-terrazzo.png) top left repeat">
	
	<div class="sec_two_inner">
		
		<div class="sec_two_slider">
			
			<?php if(get_field('section_two_slider')): ?>
			 
				<?php while(has_sub_field('section_two_slider')): ?>
			 
					<div class="sec_two_single_slide <?php the_sub_field( 'class' ); ?>">
				
						<div class="sec_two_inner_slide">
					
							<span class="slide_number"><?php the_sub_field( 'number' ); ?></span><!-- slide_number -->
					
							<span class="sec_two_slide_title"><?php the_sub_field( 'title' ); ?></span><!-- sec_two_slide_title -->
					
							<span class="sec_two_slide_description"><?php the_sub_field( 'description' ); ?></span><!-- sec_two_slide_description -->
					
					</div><!-- sec_two_inner_slide -->
				
				</div><!-- sec_two_single_slide -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- sec_two_slider -->
		
	</div><!-- sec_two_inner -->
	
</section><!-- section_two -->