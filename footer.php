	</div><!-- .main -->
	
	<footer>
		
		<?php if ( ! is_page_template( 'landing-page-template.php' ) ) { ?>	
		
			<div class="fatfooter">
			
				<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) { ?>
					<div class="one-third left widget-area first">
						<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
					</div><!-- .first .widget-area -->
				<?php } ?>
			
				<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) { ?>
					<div class="one-third left widget-area second">
						<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
					</div><!-- .first .widget-area -->
				<?php } ?>
			
				<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) { ?>
					<div class="one-third left widget-area third">
						<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
					</div><!-- .first .widget-area -->
				<?php } ?>
			
			</div>
			
		<?php } ?>
				
	</footer>
	
	
	<?php if ( is_page_template( 'landing-page-template.php' ) ) { ?>
		
		<section class="colophon" role="contentinfo">
			<small class="copyright left">
				Copyright <?php bloginfo( 'name' ); ?>
			</small><!-- #copyright -->
	
			<small class="credits right">
				Proudly powered by WordPress.
			</small><!-- #credits -->
		</section><!--#colophon-->
		
	<?php }
	
	else { ?>
			
		<section class="colophon" role="contentinfo">
			<small class="copyright left">
				Copyright <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?>
				</a>
			</small><!-- #copyright -->
	
			<small class="credits right">
				Proudly powered by <a href="http://wordpress.org/">WordPress</a>.
			</small><!-- #credits -->
		</section><!--#colophon-->
		
	<?php } ?>
	
	<?php wp_footer(); ?>

</body>
</html>