<?php
/* The file for displaying single projects */
?>

<?php get_header(); ?>
		
	<div class="main">
		
		<div id="content" class="two-thirds left">

			<?php get_template_part( 'includes/loop', 'project' ); ?>

		</div><!-- #content -->

		
<?php get_sidebar(); ?>

<?php get_footer(); ?>

