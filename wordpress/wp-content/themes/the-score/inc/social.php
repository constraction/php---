<?php if( ! defined( 'ABSPATH' ) ) exit;

	function the_score_social_section () { ?>
		
			<div <?php if(get_theme_mod( 'social_media_activate' )){ ?> style="float: none;"<?php } ?> class="fa-icons">
			
				<?php if (get_theme_mod( 'the_score_facebook' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' )) == "_blank"){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_facebook' )); ?>"><i class="fa fa-facebook-f"></i></a>
				<?php endif; ?>
							
				<?php if (get_theme_mod( 'the_score_twitter' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_twitter' )) ?>"><i class="fa fa-twitter"></i></a>
				<?php endif; ?>
											
				<?php if (get_theme_mod( 'the_score_google' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_google' )); ?>"><i class="fa fa-google-plus"></i></a>
				<?php endif; ?>
															
				<?php if (get_theme_mod( 'the_score_youtube' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_youtube' )); ?>"><i class="fa fa-youtube"></i></a>
				<?php endif; ?>
																			
				<?php if (get_theme_mod( 'the_score_vimeo' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_vimeo' )); ?>"><i class="fa fa-vimeo"></i></a>
				<?php endif; ?>
																			
				<?php if (get_theme_mod( 'the_score_pinterest' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_pinterest' )); ?>"><i class="fa fa-pinterest"></i></a>
				<?php endif; ?>	
				
				<?php if (get_theme_mod( 'the_score_instagram' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_instagram' )); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<?php endif; ?>
																			
				<?php if (get_theme_mod( 'the_score_linkedin' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_linkedin' )); ?>"><i class="fa fa-linkedin"></i></a>
				<?php endif; ?>
																			
				<?php if (get_theme_mod( 'the_score_rss' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_rss' )); ?>"><i class="fa fa-rss"></i></a>
				<?php endif; ?>
																			
				<?php if (get_theme_mod( 'the_score_stumbleupon' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_stumbleupon' )); ?>"><i class="fa fa-stumbleupon"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_flickr' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_flickr' )); ?>"><i class="fa fa-flickr" aria-hidden="true"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_dribbble' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_dribbble' )); ?>"><i class="fa fa-dribbble"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_digg' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_digg' )); ?>"><i class="fa fa-digg"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_skype' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_skype' )); ?>"><i class="fa fa-skype"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_deviantart' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_deviantart' )); ?>"><i class="fa fa-deviantart"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_yahoo' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_yahoo' )); ?>"><i class="fa fa-yahoo"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_reddit_alien' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_reddit_alien' )); ?>"><i class="fa fa-reddit-alien"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_paypal' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_paypal' )); ?>"><i class="fa fa-paypal"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_dropbox' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_dropbox' )); ?>"><i class="fa fa-dropbox"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_soundcloud' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_soundcloud' )); ?>"><i class="fa fa-soundcloud"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_vk' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_vk' )); ?>"><i class="fa fa-vk"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_envelope' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_envelope' )); ?>"><i class="fa fa-envelope"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_address_book' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_address_book' )); ?>"><i class="fa fa-address-book" aria-hidden="true"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_address_apple' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_address_apple' )); ?>"><i class="fa fa-apple"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_address_amazon' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_address_amazon' )); ?>"><i class="fa fa-amazon"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_address_slack' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_address_slack' )); ?>"><i class="fa fa-slack"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_address_slideshare' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_address_slideshare' )); ?>"><i class="fa fa-slideshare"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_address_wikipedia' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_address_wikipedia' )); ?>"><i class="fa fa-wikipedia-w"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_address_wordpress' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_address_wordpress' )); ?>"><i class="fa fa-wordpress"></i></a>
				<?php endif; ?>
																							
				<?php if (get_theme_mod( 'the_score_address_odnoklassniki' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_address_odnoklassniki' )); ?>"><i class="fa fa-odnoklassniki"></i></a>
				<?php endif; ?>
																											
				<?php if (get_theme_mod( 'the_score_address_tumblr' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_address_tumblr' )); ?>"><i class="fa fa-tumblr"></i></a>
				<?php endif; ?>

				<?php if (get_theme_mod( 'the_score_address_github' )) : ?>
					<a target="<?php if(esc_attr(get_theme_mod( 'the_score_social_link_type' ))){echo esc_attr(get_theme_mod( 'the_score_social_link_type' )); } else {echo "_self"; } ?>" href="<?php echo esc_url(get_theme_mod( 'the_score_address_github' )); ?>"><i class="fa fa-github-alt" aria-hidden="true"></i></a>
				<?php endif; ?>	
				
			</div>
		
<?php } 


Kirki::add_section( 'the_score_social_section', array(
    'title'          => __( 'Social Media', 'the-score' ),
	'description' => __( 'Social media buttons', 'the-score' ),	
    'priority'       => 64,
    'capability'     => 'edit_theme_options',
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'switch',
	'settings'    => 'social_media_activate',
	'label'       => __( 'Activate Social Icons in Footer', 'the-score' ),
	'section'     => 'the_score_social_section',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'On', 'the-score' ),
		'' => esc_html__( 'Off', 'the-score' ),
	),
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'select',
	'settings'    => 'the_score_social_link_type',
	'label'       => __( 'Link Type', 'the-score' ),
	'section'     => 'the_score_social_section',
	'default'     => '',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'' => esc_html__( ' ', 'the-score' ),
		'_self' => esc_html__( '_self', 'the-score' ),
		'_blank' => esc_html__( '_blank', 'the-score' ),		
	),
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'color',
	'settings'    => 'social_media_color',
	'label'       => __( 'Social Icons Color', 'the-score' ),
	'section'     => 'the_score_social_section',
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'color',
	'settings'    => 'social_media_hover_color',
	'label'       => __( 'Social Icons Hover Color', 'the-score' ),
	'section'     => 'the_score_social_section',
) );

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_facebook',
	'label'    => esc_attr__( 'Enter Facebook url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_twitter',
	'label'    => esc_attr__( 'Enter Twitter url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_google',
	'label'    => esc_attr__( 'Enter Google+ url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_linkedin',
	'label'    => esc_attr__( 'Enter Linkedin url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_rss',
	'label'    => esc_attr__( 'Enter RSS url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_pinterest',
	'label'    => esc_attr__( 'Enter Pinterest url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_youtube',
	'label'    => esc_attr__( 'Enter Youtube url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_vimeo',
	'label'    => esc_attr__( 'Enter Vimeo url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_instagram',
	'label'    => esc_attr__( 'Enter Ynstagram url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_stumbleupon',
	'label'    => esc_attr__( 'Enter Stumbleupon url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_flickr',
	'label'    => esc_attr__( 'Enter Flickr url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_dribbble',
	'label'    => esc_attr__( 'Enter Dribbble url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_digg',
	'label'    => esc_attr__( 'Enter Digg url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_skype',
	'label'    => esc_attr__( 'Enter Skype url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_deviantart',
	'label'    => esc_attr__( 'Enter Deviantart url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_yahoo',
	'label'    => esc_attr__( 'Enter Yahoo url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_reddit_alien',
	'label'    => esc_attr__( 'Enter Reddit Alien url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_paypal',
	'label'    => esc_attr__( 'Enter Paypal url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_dropbox',
	'label'    => esc_attr__( 'Enter Dropbox url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_soundcloud',
	'label'    => esc_attr__( 'Enter Soundcloud url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_vk',
	'label'    => esc_attr__( 'Enter VK url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_envelope',
	'label'    => esc_attr__( 'Enter Envelope url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_address_book',
	'label'    => esc_attr__( 'Enter Address Book url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_address_apple',
	'label'    => esc_attr__( 'Enter Apple url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_address_apple',
	'label'    => esc_attr__( 'Enter Amazon url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_address_apple',
	'label'    => esc_attr__( 'Enter Amazon url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_address_slack',
	'label'    => esc_attr__( 'Enter Slack url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_address_slideshare',
	'label'    => esc_attr__( 'Enter Slideshare url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_address_wikipedia',
	'label'    => esc_attr__( 'Enter Wikipedia url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_address_wordpress',
	'label'    => esc_attr__( 'Enter WordPress url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_address_odnoklassniki',
	'label'    => esc_attr__( 'Enter Odnoklassniki url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_address_tumblr',
	'label'    => esc_attr__( 'Enter Tumblr url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

Kirki::add_field( 'the_score_options', array(
	'type'     => 'url',
	'settings' => 'the_score_address_github',
	'label'    => esc_attr__( 'Enter GitHub url', 'the-score' ),
	'section'  => 'the_score_social_section',
	'default'  => '',
	'sanitize_callback' => 'esc_url_raw',	
) );	

/********************************************
* Social styles
*********************************************/ 	

function the_score_social_method() {

        $social_media_color_mod = get_theme_mod( 'social_media_color' );
        $social_media_hover_color_mod = get_theme_mod( 'social_media_hover_color' );

		if($social_media_color_mod) { $social_media_color = ".social .fa-icons i, .social-top .fa {color: {$social_media_color_mod} !important;}";} else {$social_media_color ="";}
		if($social_media_hover_color_mod) { $social_media_hover_color = ".social .fa-icons i:hover, .social-top a:hover .fa {color: {$social_media_hover_color_mod} !important;}";} else {$social_media_hover_color ="";}

        wp_add_inline_style( 'score-style', 
		$social_media_color.$social_media_hover_color);
}
add_action( 'wp_enqueue_scripts', 'the_score_social_method' );				
		