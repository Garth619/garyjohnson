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
					<li><?php the_field( 'copyright','option'); ?></li>
					<?php if(get_field('disclaimer','option')) { ?>
					<li><a href="<?php the_field( 'disclaimer','option'); ?>">Disclaimer</a></li>
					<?php } 
					if(get_field('site_map','option')) { ?>
					<li><a href="<?php the_field( 'site_map','option'); ?>">Site Map</a></li>
					<?php }
					 if(get_field('google_plus','option')) { ?>
					<li><a href="<?php the_field( 'google_plus','option'); ?>" target="_blank" rel="noopener">Google +</a></li>
					<?php } ?>
				</ul>
				
				<ul class="social_media">
					<?php if(get_field('google_icon_link','option')) { ?>
					<li>
						<a class="google" href="<?php the_field( 'google_icon_link','option'); ?>" target="_blank" rel="noopener">
							<?php echo file_get_contents("wp-content/themes/garyjohnson/images/footer_icon-01.svg"); ?>
						</a>
					</li>
					<?php } ?>
					<?php if(get_field('facebook_icon_link','option')) { ?>
						<li>
							<a class="facebook" href="<?php the_field( 'facebook_icon_link','option'); ?>" target="_blank" rel="noopener">
								<?php echo file_get_contents("wp-content/themes/garyjohnson/images/footer_icon-02.svg"); ?>
							</a>
						</li>
					<?php } ?>
					<?php if(get_field('linkedin_icon_link','option')) { ?>
						<li>
							<a class="linkedin" href="<?php the_field( 'linkedin_icon_link','option'); ?>" target="_blank" rel="noopener">
								<?php echo file_get_contents("wp-content/themes/garyjohnson/images/footer_icon-03.svg"); ?>
							</a>
						</li>
						<?php } ?>
						<?php if(get_field('twitter_icon_link','option')) { ?>
						<li>
							<a class="twitter" href="<?php the_field( 'twitter_icon_link','option'); ?>" target="_blank" rel="noopener">
								<?php echo file_get_contents("wp-content/themes/garyjohnson/images/footer_icon-04.svg"); ?>
							</a>
						</li>
						<?php } ?>
						<?php if(get_field('youtube_icon_link','option')) { ?>
						<li>
							<a class="youtube" href="<?php the_field( 'youtube_icon_link','option'); ?>" target="_blank" rel="noopener">
								<?php echo file_get_contents("wp-content/themes/garyjohnson/images/footer_icon-05.svg"); ?>
							</a>
						</li>
						<?php } ?>
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
