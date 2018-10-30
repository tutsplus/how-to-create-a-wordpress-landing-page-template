<?php
	// loop for single projects 
?>

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); //Open the loop ?>
			
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<h2 class="entry-title"><?php the_title(); ?></h2>

		
		<?php if ( ! is_page() ) {
			
			echo '<section class="entry-meta">';
				echo get_the_date();
				echo get_the_term_list( $post->ID, 'tutsplus_project_type', '<p>Categories: ', ', ', '</p>' );
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