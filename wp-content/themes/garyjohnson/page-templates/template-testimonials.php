<?php 

/* Template Name: Testimonials */

get_header(); ?>


<div class="internal_main">

<div class="internal_container internal_wrapper">
	
	<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
	
	<div class="testimonial_wrapper">
		
		<div class="testi_col">
			
			<?php if(get_field('testimonials_column_one_gj')): ?>
			 
				<?php while(has_sub_field('testimonials_column_one_gj')): ?>
			 
					<div class="single_test">
				
						<div class="single_test_content">
					
							<?php the_sub_field( 'single_testimonial_content_gj' ); ?>
					
							<span class="testi_name"><?php the_sub_field( 'single_testimonial_name_gj' ); ?></span><!-- testi_name -->
					
						</div><!-- single_test_content -->
				
					</div><!-- single_test -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- testi_col -->
		
		<div class="testi_col">
			
			<?php if(get_field('testimonials_column_two_gj')): ?>
			 
				<?php while(has_sub_field('testimonials_column_two_gj')): ?>
			 
					<div class="single_test">
				
						<div class="single_test_content">
					
							<?php the_sub_field( 'single_testimonial_content_gj' ); ?>
					
							<span class="testi_name"><?php the_sub_field( 'single_testimonial_name_gj' ); ?></span><!-- testi_name -->
					
						</div><!-- single_test_content -->
				
					</div><!-- single_test -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- testi_col -->
		
	</div><!-- testimonial_wrapper -->
	
</div><!-- internal_container -->

</div><!-- internal_main -->



<?php get_footer(); ?>
