<footer id="footer_trigger">
	
	<div id="consultation" class="footer_form_wrapper">
		
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
				
				<div class="location_col">
					
					<span class="location_col_title">Pikeville</span><!-- location_col_title -->
					
					<span class="street_address">110 Caroline Ave,<br/> Pikeville, KY 41501</span><!-- street_address -->
					
					<span class="po_box_address">P.O. Box 231<br/> Pikeville, KY 41501</span><!-- po_box_address -->
					
					<span class="phone_title">Phone</span><!-- phone_title -->
					
					<a class="footer_phone" href="">(606) 437-40021</a><!-- footer_phone -->
					
					<a class="get_directions" href="">Get Directions</a><!-- get_directions -->
					
				</div><!-- location_col -->
				
				<div class="location_col">
					
					<span class="location_col_title">Hazard</span><!-- location_col_title -->
					
					<span class="street_address">941 N Main St #202,<br/> Hazard, KY 41701</span><!-- street_address -->
					
					<span class="po_box_address">P.O. Box 359<br/> Hazard, KY 41701</span><!-- po_box_address -->
					
					<span class="phone_title">Phone</span><!-- phone_title -->
					
					<a class="footer_phone" href="">(606) 436-6059</a><!-- footer_phone -->
					
					<a class="get_directions" href="">Get Directions</a><!-- get_directions -->
					
				</div><!-- location_col -->
				
				<div class="location_col">
					
					<span class="location_col_title">Lexington</span><!-- location_col_title -->
					
					<span class="street_address">2265 Executive Dr,<br/> Lexington, KY 40505</span><!-- street_address -->
					
					<span class="po_box_address">P.O. Box 55106<br/> Lexington, KY 40505</span><!-- po_box_address -->
					
					<span class="phone_title">Phone</span><!-- phone_title -->
					
					<a class="footer_phone" href="">(606) 268-4300</a><!-- footer_phone -->
					
					<a class="get_directions" href="">Get Directions</a><!-- get_directions -->
					
				</div><!-- location_col -->
				
				<div class="location_col">
					
					<span class="location_col_title">Louisville</span><!-- location_col_title -->
					
					<span class="street_address">9300 Shelbyville Rd,<br/> Ste. 609<br/> Louisville, KY 40222</span><!-- street_address -->
					
					<span class="phone_title">Phone</span><!-- phone_title -->
					
					<a class="footer_phone" href="">(606) 437-40021</a><!-- footer_phone -->
					
					<a class="get_directions" href="">Get Directions</a><!-- get_directions -->
					
				</div><!-- location_col -->
				
				<a class="locations_button" href="">View All Locations</a><!-- locations_button -->
				
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
