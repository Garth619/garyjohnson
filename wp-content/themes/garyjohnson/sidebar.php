<div class="sidebar_wrapper">
		
		<div class="sidebar_box">
			
			<div class="sidebar_box_inner">


<?php
				
				if ( get_field('sidebar_menu') ){ //use same classes as widgets ?>
    
   
        
        	<span class="sidebar_title">
            
            <?php if(get_field('sidebar_menu_title')){
                
                the_field('sidebar_menu_title');
            
            }
            
            else {
                
                echo 'Practice Areas';
            
            } ?>
	        
        	</span>

					<?php
            
            wp_nav_menu(array(
                'menu' => get_field('sidebar_menu'),
                'container' => 'ul',
                'depth' => 2
            ));
        	
        	?>
    	
    
			
			<?php
			
			}
			
			else {
			
			if(have_rows('sidebars','option')){
        
        $no_sidebar_yet = true;

        while(have_rows('sidebars','option')): the_row();
            
            if(is_descendant_of(get_sub_field('page')) &&  $no_sidebar_yet){
                
                echo '<!-- ancestor default -->';
                
                dynamic_sidebar( ilaw_id_friendly_text( get_sub_field( 'sidebar_name' ) ) );
                
                $no_sidebar_yet = false;
                
                break;
            }
        
        endwhile;

        if($no_sidebar_yet){
            
            echo '<!-- no ancestral sidebar -->';
            
            dynamic_sidebar( 'default_sidebar' );
            // break;
        }

    }
    	
    	else{
        
        echo '<!--  default -->';
        
        dynamic_sidebar( 'default_sidebar' );
    	
    	}
	
	};?>
	
	
	</div><!-- sidebar_box_inner -->
			
		</div><!-- sidebar_box -->
		
		<div class="small_sidebar_box">
			
			<div class="small_sidebar_inner">
				
				<span class="small_sidebar_title">About Our Firm</span><!-- small_sidebar_title -->
				
				<div class="small_sidebar_video">
					
					<div class="play_button"></div><!-- play_button -->
				
					<img src="<?php bloginfo('template_directory');?>/images/header_video_img_01.jpg"/>
				
				</div><!-- small_sidebar_video -->
				
			</div><!-- small_sidebar_inner -->
			
		</div><!-- small_sidebar_box -->
		
	</div><!-- sidebar_wrapper -->