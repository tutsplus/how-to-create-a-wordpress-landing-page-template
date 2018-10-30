<?php
/* The template file for dispalying static pages */
?>

<?php get_header(); ?>
		
	<div class="main">
		
		<div id="content" class="two-thirds left">

			<?php get_template_part( 'includes/loop', 'single' ); ?>
			
			<?php
			// list of latest posts
			$args = array( 'posts_per_page' => 5 );
			
			$query = new WP_Query( $args );
			
			// the loop
			if ( $query->have_posts() ) { ?>
				
				<div class="latestposts two-thirds left">
					
					<h3><?php _e( 'Latest Posts:', 'tutsplus' ); ?></h3>
					
					<ul>
						
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						
							<li>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</li>
							
						<?php endwhile; ?>
						
					</ul>	
					
				</div>		
				
				<?php 
				wp_reset_postdata();
			} ?>

		</div><!-- #content -->
		
		
<?php get_sidebar(); ?>

<?php get_footer(); ?>

