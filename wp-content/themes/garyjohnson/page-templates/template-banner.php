<div class="internal_banner">
	
	<div class="banner_content">
		
		<div class="banner_title">
			
			<?php if(is_category()) : ?>
			
				<span class="banner_header"><?php single_cat_title();?></span>
			
			<?php else: ?>
			
				<span class="banner_header">We go the extra</span><br/>
				<span class="banner_header">mile for our clients</span>
			
			<?php endif;?>
		
		</div><!-- banner_title -->
		
		<a class="internal_consultation_button" href="">Click for your free consultation</a><!-- internal_consultation_button -->
		
	</div><!-- banner_content -->
	
	<img class="banner_image" src="<?php bloginfo('template_directory');?>/images/intl_header_img.jpg"/>
	
</div><!-- internal_banner -->