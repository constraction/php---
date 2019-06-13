<?php
// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 */
?>


	</div><!-- #content -->
	<footer id="colophon" class="site-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
		<?php if (esc_attr(get_theme_mod( 'social_media_activate' )) ) { ?>
			<div style="float: none; text-align: center;  display: inline-table;" class="social">
					<div  style="float: none;" class="fa-icons">
						<?php echo the_score_social_section (); ?>
					</div>
			</div>
		<?php } ?>
			<div class="footer-center">
			
				<?php if (  is_active_sidebar('footer-1') ) : ?>
					<div class="footer-widgets">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
				<?php endif; ?>
				
				<?php if (  is_active_sidebar('footer-2') ) : ?>
					<div class="footer-widgets">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
				<?php endif; ?>
				
				<?php if (  is_active_sidebar('footer-3') ) : ?>
					<div class="footer-widgets">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
				<?php endif; ?>
				
				<?php if (  is_active_sidebar('footer-4') ) : ?>
					<div class="footer-widgets">
						<?php dynamic_sidebar( 'footer-4' ); ?>
					</div>
				<?php endif; ?>
				
			</div>		
		<div class="site-info">
		<?php if(get_theme_mod('the_score_copyright')) {
			echo get_theme_mod('code_copyright_text');
		}
		else { ?>
			<a class="powered" href="<?php echo esc_url( __( 'https://wordpress.org/', 'the-score' ) ); ?>">
				<?php
				printf( esc_html__( 'Powered by %s', 'the-score' ), 'WordPress' );
				?>
			</a>
			<p>
				<?php esc_html_e('All rights reserved', 'the-score'); ?>  &copy; <?php bloginfo('name'); ?>			
				<a title="Seos Themes" href="<?php echo esc_url('https://seosthemes.com/', 'the-score'); ?>" target="_blank"><?php esc_html_e('Theme by Seos Themes', 'the-score'); ?></a>
			</p>
		<?php } ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<?php if(get_theme_mod('activate_back_to_top', true)) { the_score_to_top(); } ?>

<?php wp_footer(); ?>

</body>
</html>
