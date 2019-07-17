<?php 

/* Template Name: Att Bio */

get_header(); ?>

<div class="internal_main">

<div class="internal_container internal_wrapper">
	
	<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
	
	<span class="att_bio_position"><?php the_field( 'attorney_position' ); ?></span><!-- att_bio_position -->
	
	<div class="att_bio_wrapper">
	
		<div class="att_bio_left">
			
			<div class="att_bio_image">
				
				<?php $attorney_bio_image = get_field( 'attorney_bio_image' ); ?>
				
				<?php if ( $attorney_bio_image ) { ?>
				
				<img src="<?php echo $attorney_bio_image['url']; ?>" alt="<?php echo $attorney_bio_image['alt']; ?>" />
				
				<?php } ?>
				
			</div><!-- att_bio_image -->
			
			<div class="att_bio_info">
				
				<ul>
					<?php if(get_field('location_att')) { ?>
						<li>
							<span class="att_bio_info_title"><?php the_field( 'location_title_att' ); ?></span><!-- att_bio_info_title -->
							<span class="att_bio_info_content"><?php the_field( 'location_att' ); ?></span>
							</li>
					<?php } ?>
					<?php if(get_field('phone_one_att') || get_field('phone_two_att')) { ?>
						<li>
							<span class="att_bio_info_title"><?php the_field( 'phone_title_att' ); ?></span><!-- att_bio_info_title -->
							<a class="att_bio_info_content" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('phone_one_att')); ?>"><?php the_field( 'phone_one_att' ); ?></a>
							<a class="att_bio_info_content" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('phone_two_att')); ?>"><?php the_field( 'phone_two_att' ); ?></a>
						</li>
					<?php } ?>
					<?php if(get_field('fax_number_att')) { ?>
					<li>
						<span class="att_bio_info_title"><?php the_field( 'fax_title_att' ); ?></span><!-- att_bio_info_title -->
						<span class="att_bio_info_content"><?php the_field( 'fax_number_att' ); ?></span>
						
					</li>
					<?php } ?>
					<?php if(get_field('email_address_att')) { ?>
					<li>
						<span class="att_bio_info_title"><?php the_field( 'email_title_att' ); ?></span><!-- att_bio_info_title -->
						<a class="att_bio_info_content email_me" href="mailto:<?php the_field( 'email_address_att' ); ?>"><?php the_field( 'email_me' ); ?></a>
					</li>
					<?php } ?>
				</ul>
				
			</div><!-- att_bio_info -->
			
		</div><!-- att_bio_left -->
		
		<div class="att_bio_right content">
			
				<?php get_template_part( 'loop', 'page' ); ?>
			
		</div><!-- att_bio_right -->
	
	</div><!-- att_bio_wrapper -->
	
	<div class="att_bio_stats">
		
		<?php if(get_field('attorney_additional_information')): ?>
		 
			<?php while(has_sub_field('attorney_additional_information')): ?>
		 
				<ul class="att_bio_stats_menu">
			
					<li>
			
						<div class="stat_arrow">
					
							<?php echo file_get_contents("wp-content/themes/garyjohnson/images/nav_arrow-01.svg"); ?>
					
						</div><!-- stat_arrow -->
				
						<span><?php the_sub_field( 'section_title' ); ?></span>
						
						<?php if(get_sub_field('list_items')): ?>
							
							<ul class="att_bio_stats_submenu">
						 
							<?php while(has_sub_field('list_items')): ?>
						 
								<li><?php the_sub_field( 'list_item' ); ?></li>		
						    
							<?php endwhile; ?>
							
							</ul>
						 
						<?php endif; ?>
				
					</li>
			
				</ul><!-- att_bio_stats_menu -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		
	</div><!-- att_bio_stats -->
	
	<div class="att_awards_wrapper">
		
		<span class="att_awards_title"><?php the_field( 'awards_title_att' ); ?></span><!-- att_awards_title -->
		
		<div class="att_awards_slider">
			
			<?php if(get_field('awards_slider_att')): ?>
			 
				<?php while(has_sub_field('awards_slider_att')): ?>
			 
					<div class="att_awards_slide">
				
						<div class="att_awards_slide_inner">
				
							<?php $awards_logo = get_sub_field( 'awards_logo' ); ?>
							
							<img src="<?php echo $awards_logo['url']; ?>" alt="<?php echo $awards_logo['alt']; ?>" />
				
						</div><!-- att_awards_slide_inner -->
				
					</div><!-- att_awards_slide -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
						
		</div><!-- att_awards_slider -->
		
	</div><!-- att_awards_wrapper -->
	
</div><!-- internal_container -->

</div><!-- internal_main -->

<?php get_footer(); ?>

