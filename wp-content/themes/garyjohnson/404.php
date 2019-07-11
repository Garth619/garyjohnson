<?php get_header(); ?>

<div class="internal_main">

	<div class="not_found_wrapper">
		
		<h1 class="not_found_header">404</h1><!-- internal_header -->
		
		<span class="not_found_verbiage">Sorry, We couldn’t find this page</span><!-- not_found_verbiage -->
		
		<span class="go_back" onclick="goBack()">go back</span>
	
	</div><!-- not_found_wrapper -->
	
</div><!-- internal_main -->

<script type="text/javascript">
	function goBack() {
    window.history.back();
	}
</script>

<?php get_footer(); ?>