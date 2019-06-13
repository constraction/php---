<?php if( ! defined( 'ABSPATH' ) ) exit;

			
/**
 * Read More Button
 */
Kirki::add_section( 'the_score_premium_read_more', array(
    'title'          => __( 'Read More Button Options', 'the-score' ),
    'priority'       => 94,
    'capability'     => 'edit_theme_options',
) ); 

Kirki::add_field( 'the_score_options', array(
	'type'        => 'switch',
	'settings'    => 'the_score_premium_read_more_activate',
	'label'       => __( 'Activate Read More Button', 'the-score' ),
	'section'     => 'the_score_premium_read_more',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'On', 'the-score' ),
		'' => esc_html__( 'Off', 'the-score' ),
	),
	'default' => 'on',	
) );

Kirki::add_field( 'the_score_options', array(
	'type'     => 'text',
	'settings' => 'the_score_premium_read_more_setting',
	'label'    => __( 'Read More Button Text', 'the-score' ),
	'section'  => 'the_score_premium_read_more',
	'priority' => 10,
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'number',
	'settings'    => 'the_score_premium_read_more_length',
	'label'       => esc_html__( 'Read More Button Length', 'the-score' ),
	'section'     => 'the_score_premium_read_more',
	'choices'     => array(
		'min'  => 0,
		'max'  => 1000,
		'step' => 1,
	),
) );
		
Kirki::add_field( 'the_score_options', array(
	'type'        => 'color',
	'settings'    => 'the_score_premium_read_more_color',
	'label'       => __( 'Read More Button Color', 'the-score' ),
	'section'     => 'the_score_premium_read_more',
	'default'     => '',
) );
			
Kirki::add_field( 'the_score_options', array(
	'type'        => 'color',
	'settings'    => 'the_score_premium_read_more_hover_color',
	'label'       => __( 'Read More Button Hover Color', 'the-score' ),
	'section'     => 'the_score_premium_read_more',
) );
	
			
Kirki::add_field( 'the_score_options', array(
	'type'        => 'color',
	'settings'    => 'the_score_premium_read_more_background_color',
	'label'       => __( 'Read More Button Background Color', 'the-score' ),
	'section'     => 'the_score_premium_read_more',
  	'default' => '',	
) );
	

			
Kirki::add_field( 'the_score_options', array(
	'type'        => 'color',
	'settings'    => 'the_score_premium_read_more_background_hover_color',
	'label'       => __( 'Read More Button Background Hover Color', 'the-score' ),
	'section'     => 'the_score_premium_read_more',
  	'default' => '',	
) );
		

/**
 * Excerpt
 */
	function the_score_premium_excerpt_more( $more ) {
		if (get_theme_mod('the_score_premium_read_more_activate',true)) {
			return '<p class="link-more"><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . the_score_premium_return_read_more_text (). '</a></p>';
		}
	}
	add_filter( 'excerpt_more', 'the_score_premium_excerpt_more' );	
	
	function customize_premium_custom_excerpt_length( $length ) {
		if (get_theme_mod('the_score_premium_read_more_length')) {
			return get_theme_mod('the_score_premium_read_more_length');
		}
		else return 42;
	}
	
	add_filter( 'excerpt_length', 'customize_premium_custom_excerpt_length', 999 );
	
	function the_score_premium_return_read_more_text () {
		if (get_theme_mod('the_score_premium_read_more_setting')) {	 
			return get_theme_mod('the_score_premium_read_more_setting');
		} 
		return "Read More";
	}	
	
/**
 * Read More Styles
 */
function the_score_read_more_method() {

        $read_more_color_mod = get_theme_mod( 'the_score_premium_read_more_color' );
        $read_more_hover_color_mod = get_theme_mod( 'the_score_premium_read_more_hover_color' );
        $read_more_background_mod = get_theme_mod( 'the_score_premium_read_more_background_color' );
        $read_more_background_hover_mod = get_theme_mod( 'the_score_premium_read_more_background_hover_color' );
		

		if($read_more_color_mod) { $read_more_color = ".read-more, .read-slide, .link-more a {color: {$read_more_color_mod};}";} else {$read_more_color ="";}
		if($read_more_hover_color_mod) { $read_more_hover_color = ".read-more, .read-slide:hover, .link-more a:hover {color: {$read_more_hover_color_mod};}";} else {$read_more_hover_color ="";}
		if($read_more_background_mod) { $read_more_background = ".read-more {background: {$read_more_background_mod} !important; box-shadow: none;}";} else {$read_more_background ="";}
		if($read_more_background_hover_mod) { $read_more_background_hover = ".read-more:hover {background:{$read_more_background_hover_mod} !important;}";} else {$read_more_background_hover ="";}

        wp_add_inline_style( 'score-style', $read_more_color.$read_more_hover_color.$read_more_background.$read_more_background_hover);
}
add_action( 'wp_enqueue_scripts', 'the_score_read_more_method' );	