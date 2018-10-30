<?php
/* The file for displaying single posts */
?>

<?php get_header(); ?>
		
	<div class="main">
		
		<div id="content" class="two-thirds left">

			<?php get_template_part( 'includes/loop', 'single' ); ?>
			
			<?php
			// list of latest posts
			
			global $post;
			$args = array( 'posts_per_page' => 5 );
			
			$latestposts = get_posts( $args );
			
			if ( $latestposts ) { ?>
				
				<div class="latestposts">
					
					<h3><?php _e( 'Latest Posts:', 'tutsplus' ); ?></h3>
					
					<ul>
						
						<?php foreach ( $latestposts as $post ) {
							
							setup_postdata( $post ); ?>
							<li>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</li>
							
						<?php } ?>
						
					</ul>	
				
				</div>	
				
			<?php } ?>	

		</div><!-- #content -->  

		
<?php get_sidebar(); ?>

<?php get_footer(); ?>

