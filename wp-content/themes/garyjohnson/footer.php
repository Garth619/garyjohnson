<footer id="footer_trigger">
	
	<div class="footer_form_wrapper">
		
		<div class="footer_form_inner">
		
			<div class="footer_cta_wrapper">
			
				<div class="footer_cta">
				
					<span>Request your</span>
					<span>free case</span>
					<span>consultation</span>
				
				</div><!-- footer_cta -->
			
			</div><!-- footer_cta_wrapper -->
		
			<div class="footer_form">
			
				<span class="form_cta">How Can We Help You?</span><!-- form_cta -->
			
				<span class="required">*Fields Required</span><!-- required -->	
			
				<?php gravity_form(1, false, false, false, '', true, 12); ?>
		
			</div><!-- footer_form -->
		
		</div><!-- footer_form_inner -->
		
	</div><!-- footer_form_wrapper -->
	
	<div class="footer_location_wrapper" style="background:url(<?php bloginfo('template_directory');?>/images/light-grey-terrazzo.png) top left repeat">
			
			<div class="footer_location_inner">
				
				<div class="location_col"></div><!-- location_col -->
				
				<div class="location_col"></div><!-- location_col -->
				
				<div class="location_col"></div><!-- location_col -->
				
				<div class="location_col"></div><!-- location_col -->
				
			</div><!-- footer_location_inner -->
			
		</div><!-- footer_location_wrapper -->

	</footer>


<?php wp_footer();?>


</body>
</html>
