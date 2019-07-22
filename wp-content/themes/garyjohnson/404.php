<?php get_header(); ?>

<div class="internal_main">

	<div class="not_found_wrapper">
		
		<h1 class="not_found_header"><?php the_field( '404_header','option'); ?></h1><!-- internal_header -->
		
		<span class="not_found_verbiage"><?php the_field( '404_verbiage','option'); ?></span><!-- not_found_verbiage -->
		
		<span class="go_back" onclick="goBack()">go back</span>
	
	</div><!-- not_found_wrapper -->
	
</div><!-- internal_main -->

<script type="text/javascript">
	function goBack() {
    window.history.back();
	}
</script>

<?php get_footer(); ?>