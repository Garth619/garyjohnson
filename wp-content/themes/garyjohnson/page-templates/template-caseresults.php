<?php 

/* Template Name: Case Results */

get_header(); ?>


<div class="internal_main">

	<div class="internal_container internal_wrapper">
	
		<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
	
		<div class="case_results_wrapper">
	
			<span class="case_results_intro"><?php the_field( 'case_results_intro' ); ?></span><!-- case_results_intro -->
			
			<div class="case_results_grid">
				
				<div class="cr_col">
					
					<?php if(get_field('case_results_column_one')): ?>
					 
						<?php while(has_sub_field('case_results_column_one')): ?>
					 
							<div class="cr_single">
						
								<span class="cr_amount"><?php the_sub_field( 'amount' ); ?></span>
						
								<span class="cr_type"><?php the_sub_field( 'type' ); ?></span><!-- cr_type -->
						
								<div class="cr_content_wrapper content">
							
									<div class="facts">
										
										<?php if(get_sub_field('facts_title')) { ?>
							
											<span class="cr_subtitle"><?php the_sub_field( 'facts_title' ); ?></span><!-- cr_subtitle -->
										
										<?php } 
										
										if(get_sub_field('facts_content')) {
								
											the_sub_field( 'facts_content' );
										
										} ?>
							
									</div><!-- facts -->
							
									<div class="results">
										
										<?php if(get_sub_field('results_title')) { ?>
							
										<span class="cr_subtitle"><?php the_sub_field( 'results_title' ); ?></span><!-- cr_subtitle -->
										
										<?php } 
										
										if(get_sub_field('results_content')) {
								
											the_sub_field( 'results_content' );
										
										} ?>
							
									</div><!-- facts -->
							
								</div><!-- cr_content_wrapper -->
						
							</div><!-- cr_single -->
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
				</div><!-- cr_col -->
				
				<div class="cr_col">
					
					<?php if(get_field('case_results_column_two')): ?>
					 
						<?php while(has_sub_field('case_results_column_two')): ?>
					 
							<div class="cr_single">
						
								<span class="cr_amount"><?php the_sub_field( 'amount' ); ?></span>
						
								<span class="cr_type"><?php the_sub_field( 'type' ); ?></span><!-- cr_type -->
						
								<div class="cr_content_wrapper content">
							
									<div class="facts">
										
										<?php if(get_sub_field('facts_title')) { ?>
							
											<span class="cr_subtitle"><?php the_sub_field( 'facts_title' ); ?></span><!-- cr_subtitle -->
										
										<?php } 
										
										if(get_sub_field('facts_content')) {
								
											the_sub_field( 'facts_content' );
										
										} ?>
							
									</div><!-- facts -->
							
									<div class="results">
										
										<?php if(get_sub_field('results_title')) { ?>
							
										<span class="cr_subtitle"><?php the_sub_field( 'results_title' ); ?></span><!-- cr_subtitle -->
										
										<?php } 
										
										if(get_sub_field('results_content')) {
								
											the_sub_field( 'results_content' );
										
										} ?>
							
									</div><!-- facts -->
							
								</div><!-- cr_content_wrapper -->
						
							</div><!-- cr_single -->
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
				</div><!-- cr_col -->
				
			</div><!-- case_results_grid -->
	
		</div><!-- case_results_wrapper -->
	
	</div><!-- internal_container -->

</div><!-- internal_main -->					
			  


<?php get_footer(); ?>
