<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>


<div class="internal_main">

<div class="internal_container internal_wrapper" style="background:url(<?php bloginfo('template_directory');?>/images/light-grey-terrazzo.png) top left repeat">
	
	<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
	
	<div class="contact_page_wrapper">
		
		<div class="contact_left">
			
			<?php $contact_image = get_field( 'contact_image' ); ?>
			
			<?php if ( $contact_image ) { ?>
			
			<img src="<?php echo $contact_image['url']; ?>" alt="<?php echo $contact_image['alt']; ?>" />
			
			<?php } ?>
			
		</div><!-- contact_left -->
		
		<div class="contact_right">
			
			<div class="contact_location_wrapper">
				
				<?php if(get_field('address','option')): ?>
				 
					<?php while(has_sub_field('address','option')): ?>
				 
						<div class="location_col">
					
							<span class="location_col_title"><?php the_sub_field( 'location_name' ); ?></span><!-- location_col_title -->
					
							<span class="street_address"><?php the_sub_field( 'address' ); ?></span><!-- street_address -->
					
							<span class="po_box_address"><?php the_sub_field( 'po_box' ); ?></span><!-- po_box_address -->
					
							<span class="phone_title">Phone</span><!-- phone_title -->
					
							<a class="footer_phone" href=""><?php the_sub_field( 'phone_adress' ); ?></a><!-- footer_phone -->
					
							<a class="get_directions" href="<?php the_sub_field( 'google_maps_link' ); ?>" target="_blank" rel="noopener">Get Directions</a><!-- get_directions -->
					
						</div><!-- location_col -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</div><!-- contact_location_wrapper -->
			
		</div><!-- contact_right -->
		
	</div><!-- contact_page_wrapper -->
	
		
</div><!-- internal_container -->

</div><!-- internal_main -->


			
<?php get_footer(); ?>