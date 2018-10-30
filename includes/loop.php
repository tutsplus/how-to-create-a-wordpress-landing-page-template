<?php if( have_posts() ) : while ( have_posts() ) : the_post(); //Open the loop ?>
			
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<section class="entry-meta">
			<?php echo get_the_date(); ?>
		</section><!-- .entry-meta -->
		
		<section class="entry-content">
			<?php if ( is_archive() || is_home() ) {
				
				the_excerpt();
				
				echo '<a href="' . get_the_permalink() . '">' . __( 'Read More', 'tutsplus' ) . '</a>';
								
			}
			
			else {
				
				the_content();
				
			}
			?>
		</section><!-- .entry-content -->	

		<?php if ( ! is_archive() && ! is_home() ) {
			
			echo '<section class="entry-utility">';
				
				comment_form();
				
			echo '</section>'; //entry-utility
				
			}
		?>
			
		
		
	</article>

<?php endwhile; endif; // End the loop. ?>