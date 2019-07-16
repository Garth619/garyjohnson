<div class="internal_banner">
	
	<div class="banner_content">
		
		<div class="banner_title">
			
			<?php if(is_category()) : ?>
			
				<span class="banner_header"><?php single_cat_title();?></span>
				
			<?php elseif(is_archive()) : ?>
			
					<?php if ( have_posts() )the_post();?>

					<span class="banner_header">
					
						<?php if ( is_day() ) : 
							
								printf( __( '<span>%s</span>', 'twentyten' ), get_the_date() ); 
						
							elseif ( is_month() ) : 
							
								printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) );
						
							elseif ( is_year() ) :
						
								printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) );
						
						endif; ?>
					
					</span><!-- banner_header -->
			
		<?php rewind_posts(); ?>

			
			<?php else: ?>
			
				<span class="banner_header">We go the extra</span><br/>
				<span class="banner_header">mile for our clients</span>
			
			<?php endif;?>
		
		</div><!-- banner_title -->
		
		<a class="internal_consultation_button" href="#consultation">Click for your free consultation</a><!-- internal_consultation_button -->
		
	</div><!-- banner_content -->
	
	<img class="banner_image" src="<?php bloginfo('template_directory');?>/images/intl_header_img.jpg"/>
	
</div><!-- internal_banner -->