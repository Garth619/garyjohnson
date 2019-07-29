<div class="internal_banner">
	
	<div class="banner_content">
		
		<div class="banner_title">
			
			<?php // blog banner conditionals
				
				if(is_category()) : ?>
			
				<h1 class="banner_header"><?php single_cat_title();?></h1>
				
			<?php elseif(is_archive()) : ?>
			
					<?php if ( have_posts() )the_post();?>

					<h1 class="banner_header">
					
						<?php if ( is_day() ) : 
							
								printf( __( '<span>%s</span>', 'twentyten' ), get_the_date() ); 
						
							elseif ( is_month() ) : 
							
								printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) );
						
							elseif ( is_year() ) :
						
								printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) );
						
						endif; ?>
					
					</h1><!-- banner_header -->
			
		<?php rewind_posts(); ?>
		
		<?php 
			
			// practice areas conditionals
			
			// specific page override
			
			elseif(get_field('banner_title')): 
				
				// if you want h1s in the banner instead of spans
				
				if(get_field('banner_h1s') == "H1 Tags") : ?>
			
					<h1>
			 
						<?php while(has_sub_field('banner_title')): ?>
			
							<span class="banner_header"><?php the_sub_field( 'line_break' ); ?></span><br/>
				
						<?php endwhile; ?>
			
					</h1>
					
					<?php 
						
						// otherwise just use custom spans
						
						else: ?>
					
					<?php while(has_sub_field('banner_title')): ?>
			
							<span class="banner_header"><?php the_sub_field( 'line_break' ); ?></span><br/>
				
						<?php endwhile; ?>
				
				<?php endif;?>
			  
			  <?php 
				  
				  // if not using the custom banner title above default to the options page default banner title
				  
				  else : ?>
			  
			  	<?php 
				  	
				  	// default banner title found in theme options
				  	
				  	while(has_sub_field('default_banner_title','option')): ?>
			  	 
			  		<span class="banner_header"><?php the_sub_field( 'line_break' ); ?></span><br/>
			  	    
			  	<?php endwhile; ?>
			  	 
			  <?php endif;?>
		
			</div><!-- banner_title -->
			
		<?php if(!get_field('turn_off_banner_button') == "Turn On Button") :?>
		
			<a class="internal_consultation_button" href="#consultation">Click for your free consultation</a><!-- internal_consultation_button -->
		
		<?php endif;?>
		
	</div><!-- banner_content -->
	
	<?php 
		
		$default_banner = get_field( 'default_banner','option');
	
		$custom_banner = get_field( 'practice_area_banner');
	
	?>
	
	<?php 
		
		// if custom banner on specific page
		
		if ( $custom_banner ) : ?>
	
		<img class="banner_image" src="<?php echo $custom_banner['url']; ?>" alt="<?php echo $custom_banner['alt']; ?>" />
		
		<?php 
			
			// otherwise show the default image on the options page
			
			else: ?>
		
		<img class="banner_image" src="<?php echo $default_banner['url']; ?>" alt="<?php echo $default_banner['alt']; ?>" />
	
	<?php endif; ?>
	
</div><!-- internal_banner -->