<?php
// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

function the_score_before_header () { 
if (get_theme_mod('activate_before_header')) {
?>
	<div class="before-header">
		<div class="left-top">
		<?php if (get_theme_mod('header_email')) { ?>
				<div class="h-email" itemprop="email"><span class="dashicons dashicons-email-alt"> </span> <?php echo get_theme_mod('header_email'); ?></div>
			<?php } ?>
			<?php if (get_theme_mod('header_address')) { ?>
				<div class="h-address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span class="dashicons dashicons-location"> </span> <?php echo get_theme_mod('header_address'); ?></div>
			<?php } ?>
			<?php if (get_theme_mod('header_phone')) { ?>
				<div class="h-phone" itemprop="telephone"><span class="dashicons dashicons-phone"> </span> <?php echo get_theme_mod('header_phone'); ?></div>
			<?php } ?>
		</div>
		<?php if ( get_theme_mod('activate_my_account') and in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { ?>
		<div class="right-top">
			<span class="dashicons dashicons-admin-users"></span>
			<?php if ( is_user_logged_in() ) { ?>
				<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','the-score'); ?>"><?php _e('My Account','the-score'); ?></a>
			<?php } 
			else { ?>
				<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','the-score'); ?>"><?php _e('Login / Register','the-score'); ?></a>
			<?php } ?>
		</div>
		<?php } ?>
	</div>
<?php
}
}