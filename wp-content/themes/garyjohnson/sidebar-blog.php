
	<div class="sidebar_wrapper blog">
		
		<div class="sidebar_box">
			
			<div class="sidebar_box_inner">
				
				<h3>Recent Stories</h3>
				
				<?php $mymain_query = new WP_Query( array( 'post_type' => 'post','posts_per_page' => '5', 'order' => 'DSC' ) ); ?>
					
				<ul>
					
					<?php while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
          
          	<li>
          		
          		<a href="<?php the_permalink();?>">
	          		
	          		<span class="sidebar_post_date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span><!-- sidebar_post_title -->
	          		
	          		<span class="sidebar_post_title"><?php the_title();?></span><!-- sidebar_post_title -->
	          	
	          	</a>
          	
          	</li>
        
					<?php endwhile; ?>
        
				</ul>
        
       <?php wp_reset_postdata(); // reset the query ?>
			
			</div><!-- sidebar_box_inner -->
			
		</div><!-- sidebar_box -->
		
		<div class="sidebar_box cat_box">
			
			<div class="sidebar_box_inner">

				<?php dynamic_sidebar( 'category_sidebar' ); ?>
			
			</div><!-- sidebar_box_inner -->
			
		</div><!-- sidebar_box -->
		
		<div class="sidebar_box cat_box">
			
			<div class="sidebar_box_inner">

				<?php dynamic_sidebar( 'archive_sidebar' ); ?>
			
			</div><!-- sidebar_box_inner -->
			
		</div><!-- sidebar_box -->
		
	</div><!-- sidebar_wrapper -->
	
