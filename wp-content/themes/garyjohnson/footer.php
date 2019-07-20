<footer id="footer_trigger">
	
	<div id="consultation" class="footer_form_wrapper">
		
		<div class="footer_form_inner">
		
			<div class="footer_cta_wrapper">
			
				<div class="footer_cta">
					
					<?php if(get_field('footer_form_call_to_action','option')): ?>
					 
						<?php while(has_sub_field('footer_form_call_to_action','option')): ?>
					 
							<span><?php the_sub_field( 'line_break' ); ?></span>
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
				
				</div><!-- footer_cta -->
			
			</div><!-- footer_cta_wrapper -->
		
			<div class="footer_form">
			
				<span class="form_cta"><?php the_field( 'how_can_we_help_you','option'); ?></span><!-- form_cta -->
			
				<span class="required">*Fields Required</span><!-- required -->	
			
				<?php gravity_form(1, false, false, false, '', true, 12); ?>
		
			</div><!-- footer_form -->
		
		</div><!-- footer_form_inner -->
		
	</div><!-- footer_form_wrapper -->
	
	<div class="footer_location_wrapper" style="background:url(<?php bloginfo('template_directory');?>/images/light-grey-terrazzo.png) top left repeat">
			
			<div class="footer_location_inner">
				
				<?php if(get_field('address','option')): ?>
				 
					<?php while(has_sub_field('address','option')): ?>
				 
						<div class="location_col">
					
							<span class="location_col_title"><?php the_sub_field( 'location_name' ); ?></span><!-- location_col_title -->
					
							<span class="street_address"><?php the_sub_field( 'address' ); ?></span><!-- street_address -->
							
							<?php if(get_sub_field('po_box')) { ?>
					
								<span class="po_box_address"><?php the_sub_field( 'po_box' ); ?></span><!-- po_box_address -->
							
							<?php } ?>
					
							<span class="phone_title">Phone</span><!-- phone_title -->
					
							<a class="footer_phone" href="<?php echo str_replace(['-', '(', ')', ' '], '', get_sub_field('phone_adress')); ?>"><?php the_sub_field( 'phone_adress' ); ?></a><!-- footer_phone -->
					
							<a class="get_directions" href="<?php the_sub_field( 'google_maps_link' ); ?>" target="_blank" rel="noopener">Get Directions</a><!-- get_directions -->
					
						</div><!-- location_col -->
				
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
				<a class="locations_button" href="<?php the_field( 'view_all_locations_page_link','option'); ?>"><?php the_field( 'view_all_locations_verbaige','option'); ?></a><!-- locations_button -->
				
			</div><!-- footer_location_inner -->
			
		</div><!-- footer_location_wrapper -->
		
		<div class="copyright">
			
			<div class="copyright_inner">
				
				<ul class="copyright_list">
					<li>&copy; 2019 by Gary C. Johnson, Attorneys at Law. All rights reserved.</li>
					<li><a href="">Disclaimer</a></li>
					<li><a href="">Site Map</a></li>
					<li><a href="">Google +</a></li>
				</ul>
				
				<ul class="social_media">
					<li>
						<a href="">
							<?php echo file_get_contents("wp-content/themes/garyjohnson/images/footer_icon-01.svg"); ?>
						</a>
					</li>
						<li>
							<a href="">
							
								<?php echo file_get_contents("wp-content/themes/garyjohnson/images/footer_icon-02.svg"); ?>
							
							</a>
						</li>
						<li>
							<a href="">
							
								<?php echo file_get_contents("wp-content/themes/garyjohnson/images/footer_icon-03.svg"); ?>
							
							</a>
						</li>
						<li>
							<a href="">
							
								<?php echo file_get_contents("wp-content/themes/garyjohnson/images/footer_icon-04.svg"); ?>
							
							</a>
						</li>
						<li>
							<a href="">
							
								<?php echo file_get_contents("wp-content/themes/garyjohnson/images/footer_icon-05.svg"); ?>
							
							</a>
						</li>
					</ul>
					
					<a class="ilawyer" href="//ilawyermarketing" target="_blank" rel="noopener">
						
						<img src="<?php bloginfo('template_directory');?>/images/footer_logo-01.svg"/>
					
					</a>
				
			</div><!-- copyright_inner -->
			
		</div><!-- copyright -->

	</footer>


<?php wp_footer();?>


</body>
</html>
