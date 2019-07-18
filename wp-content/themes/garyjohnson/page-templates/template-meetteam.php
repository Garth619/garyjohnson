<?php 

/* Template Name: Attorney Directory */

get_header(); ?>

<div class="internal_main">

<div class="internal_container internal_wrapper">
	
	<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
	
	<div class="meet_team_wrapper">
		
		<?php $meet_attorneys = get_field( 'meet_attorneys' ); ?>
		
		<?php if ( $meet_attorneys ): ?>
		
		<?php foreach ( $meet_attorneys as $post ):  ?>
			
			<?php setup_postdata ( $post ); ?>
				
				<div class="single_att">
			
					<a class="" href="<?php the_permalink();?>">
				
						<div class="single_att_img">
				
							<?php $attorney_bio_image = get_field( 'attorney_bio_image' ); ?>
							
							<?php if ( $attorney_bio_image ) : ?>
							
								<img src="<?php echo $attorney_bio_image['url']; ?>" alt="<?php echo $attorney_bio_image['alt']; ?>" />
								
								<?php else: ?>
								
								<img src="<?php bloginfo('template_directory');?>/images/placeholder.jpg" alt="Attorney Placeholder Image" />
							
							<?php endif; ?>
				
						</div><!-- single_att_img -->
				
						<span class="att_view_profile">View Profile</span><!-- att_view_profile -->
				
						<span class="single_att_name"><?php the_title();?></span><!-- single_att_name -->
				
						<span class="single_att_position"><?php the_field( 'attorney_position' ); ?></span><!-- single_att_position -->
			
					</a>
			
				</div><!-- single_att -->
			
			<?php endforeach; ?>
			
		<?php wp_reset_postdata(); ?>
		
		<?php endif; ?>	
	
	</div><!-- meet_team_wrapper -->
	
</div><!-- internal_container -->

</div><!-- internal_main -->

<?php get_footer(); ?>
