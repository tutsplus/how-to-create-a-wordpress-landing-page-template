<?php
	// loop for single posts and pages 
?>

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); //Open the loop ?>
			
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<h2 class="entry-title"><?php the_title(); ?></h2>

		
		<?php if ( ! is_page() ) {
			
			echo '<section class="entry-meta">';
				echo get_the_date();
			echo '</section><!-- .entry-meta -->';
			
		}
		?>
		
		
		<section class="entry-content">
			<?php the_content(); ?>
		</section><!-- .entry-content -->	
		
		<section class="entry-utility">
			<?php comment_form(); ?>		
		</section>
		
	</article>

<?php endwhile; endif; // End the loop. ?>