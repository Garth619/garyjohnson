<section id="section_four">
	
	<div class="sec_four_inner">
		
		<div class="sec_four_slider">
			
			<?php if(get_field('section_four_slider')): ?>
			 
				<?php while(has_sub_field('section_four_slider')): ?>
			 
					<div class="sec_four_slide">
			
						<div class="sec_four_reg <?php the_sub_field( 'class' ); ?>">
				
							<div class="sec_four_reg_inner">
					
								<div class="sec_four_svg <?php the_sub_field( 'class' ); ?>">
									
									<?php $svgname = get_sub_field( 'svg_file_name' ); ?>
					
									<?php echo file_get_contents("wp-content/themes/garyjohnson/images/" . $svgname .""); ?>
					
								</div><!-- sec_four_svg --> 
					
								<span class="sp_amount"><?php the_sub_field( 'amount' ); ?></span><!-- sp_amount -->
					
								<span class="sp_type"><?php the_sub_field( 'type' ); ?></span><!-- sp_type -->
					
								<span class="sec_four_reg_description"><?php the_sub_field( 'description' ); ?></span><!-- sec_four_reg_description -->
					
							</div><!-- sec_four_reg_inner -->
				
						</div><!-- sec_four_reg -->
			
						<div class="sec_four_hover">
				
							<a href="<?php the_field( 'view_all_results' ); ?>">
				
								<div class="sec_four_hover_inner">
					
									<div class="sec_four_hover_description_wrapper">
				  
										<span class="sec_four_hover_description"><?php the_sub_field( 'hover_description' ); ?></span>
				  
				  			</div><!-- sec_four_hover_description_wrapper -->
				  
								<div class="view_sp_button_wrapper">
				  
									<span class="view_sp_button">View All Results</span><!-- view_all_results -->
				  
				  			</div><!-- view_sp_button_wrapper -->
					
							</div><!-- sec_four_hover_inner -->
				
						</a>
				
					</div><!-- sec_four_hover -->
			
				</div><!-- sec_four_slide -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
		
		</div><!-- sec_four_slider -->
		
	</div><!-- sec_four_inner -->
	
	<a class="sec_four_view_all" href="<?php the_field( 'view_all_results' ); ?>">View All Results</a><!-- sec_four_view_all -->
	
</section><!-- section_four -->