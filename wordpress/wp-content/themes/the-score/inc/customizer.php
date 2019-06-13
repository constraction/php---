<?php
// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}
/**
 * score Theme Customizer
 *
 * @package score
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 */
function the_score_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'the_score_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'the_score_customize_partial_blogdescription',
		) );
	}

/**
 * Sanitize
 */
 
	function the_score_sanitize_checkbox( $input ) {
		if ( $input ) {
			return 1;
		}
		return 0;
	}
	
	function header_sanitize_position( $input ) {
		$valid = array(
			'center' => esc_attr__( 'center center', 'the-score' ),
			'real' => esc_attr__( 'Real Size (Deactivate the image height.)', 'the-score' ),
		);
		
		if ( array_key_exists( $input, $valid ) ) {
			return $input;
		} else {
			return '';
		}
	}
			
	function header_sanitize_show( $input ) {
		$valid = array(
				'' => esc_attr__( 'Default', 'the-score' ),
				'all' => esc_attr__( 'All Pages', 'the-score' ),
				'home' => esc_attr__( 'Home Page', 'the-score' ),
		);
		
		if ( array_key_exists( $input, $valid ) ) {
			return $input;
		} else {
			return '';
		}
	}

/********************************************
* Breadcrumb
*********************************************/ 
		
		$wp_customize->add_section( 'the_score_premium_breadcrumb' , array(
			'title'       => __( 'Breadcrumb', 'the-score' ),
			'priority'		=> 70,
		) );
				
		$wp_customize->add_setting( 'the_score_home_activate_breadcrumb', array (
			'sanitize_callback'	=> 'the_score_sanitize_checkbox',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'the_score_home_activate_breadcrumb', array(
			'label'    => __( 'Activate Breadcrumb', 'the-score' ),
			'section'  => 'the_score_premium_breadcrumb',
			'settings' => 'the_score_home_activate_breadcrumb',
			'type'     =>  'checkbox',
		) ) );		
	
/**
 * Header Image
 */	
 		$wp_customize->add_setting( 'header_image_show', array (
			'sanitize_callback' => 'header_sanitize_show',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_image_show', array(
			'label'    => __( 'Activate Header Image', 'the-score' ),
			'section'  => 'header_image',		
			'settings' => 'header_image_show',
			'type'     =>  'select',
			'priority'    => 1,			
            'choices'  => array(
				'' => esc_attr__( 'Default', 'the-score' ),
				'all' => esc_attr__( 'All Pages', 'the-score' ),
				'home' => esc_attr__( 'Home Page', 'the-score' ),
            ),
			'default'  => 'all'	
		) ) );
		
		$wp_customize->add_setting( 'header_image_height', array (
			'sanitize_callback' => 'absint',
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_image_height', array(
			'section'  => 'header_image',
			'priority'    => 1,
			'settings' => 'header_image_height',
			'label'       => __( 'Image Height', 'the-score' ),			
			'type'     =>  'number',
			'input_attrs'     => array(
				'min'  => 200,
				'max'  => 1000,
				'step' => 1,
			),
		) ) );
		
		$wp_customize->add_setting( 'header_image_position', array (
			'sanitize_callback' => 'header_sanitize_position',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_image_position', array(
			'label'    => __( 'Image Position', 'the-score' ),
			'section'  => 'header_image',		
			'settings' => 'header_image_position',
			'type'     =>  'select',
			'priority'    => 2,			
            'choices'  => array(
				'center' => esc_attr__( 'Background Cover (center center)', 'the-score' ),
				'real' => esc_attr__( 'Real Size (Deactivate the image height.)', 'the-score' ),
            ),
			'default'  => 'real'	
		) ) );		
}
add_action( 'customize_register', 'the_score_customize_register' );

/**
 * Custom Font Size Styles
 */ 	

function the_score_header_position() {
        $header_image_height = get_theme_mod( 'header_image_height' );
        $header_image_position = get_theme_mod( 'header_image_position' );

		if($header_image_height and $header_image_position != 'real') { $header_height = ".header-image {height: {$header_image_height}px !important;}";} else {$header_height ="";}
		if($header_image_position == 'center') { $header_position = ".header-image {background-position: center center !important;}";} else {$header_position ="";}
		if($header_image_position == '50') { $header_position = ".header-image {background-position: 50% 50% !important;}";} else {$header_position ="";}
		if($header_image_position == 'real') { $header_position = ".header-image {background-position: no !important; height: auto;}";} else {$header_position ="";}
	
        wp_add_inline_style( 'score-style', 
		$header_height.$header_position
		);
}
add_action( 'wp_enqueue_scripts', 'the_score_header_position' );	

/**
 * Render the site title for the selective refresh partial.
 */
function the_score_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 */
function the_score_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function the_score_customize_preview_js() {
	wp_enqueue_script( 'score-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'the_score_customize_preview_js' );

/**
 * Kirki Config
 */
function the_score_kirki_configuration() {
    return array( 'url_path'     => get_stylesheet_directory_uri() . '/framework/kirki/' );
}
add_filter( 'kirki/config', 'the_score_kirki_configuration' );

/**
 * Kirki Customizing - Header Options
 */

Kirki::add_config( 'the_score_options', array(
    'option_type' => 'theme_mod',
    'capability'  => 'edit_theme_options'
) );
	
Kirki::add_panel( 'header', array(
    'title'          => __( 'Header Options', 'the-score' ),
    'priority'       => 47,
) );

Kirki::add_section( 'the_score_header', array(
    'title'          => __( 'Site Branding', 'the-score' ),
    'panel'       => 'header',
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
) );


/**
 * Letter Effect
 */
Kirki::add_field( 'the_score_options', array(
	'type'        => 'switch',
	'settings'    => 'header_letter',
	'label'       => __( 'Activate Site Branding Letter Effect', 'the-score' ),
	'section'     => 'the_score_header',
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'On', 'the-score' ),
		'' => esc_html__( 'Off', 'the-score' ),
	),
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'slider',
	'settings'    => 'header_letter_speed',
	'label'       => esc_html__( 'Letter Effect Speed', 'the-score' ),
	'section'     => 'the_score_header',
	'default'     => "70",
	'choices'     => array(
		'min'  => '0',
		'max'  => '300',
		'step' => '1',
	),
) );

/**
 * Header Styles
 */
Kirki::add_field( 'the_score_options', array(
	'type'        => 'slider',
	'settings'    => 'site_title_font_size',
	'label'       => esc_html__( 'Site Title Font Size in px.', 'the-score' ),
	'section'     => 'the_score_header',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
	'default'  => '60',
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'slider',
	'settings'    => 'site_tagline_font_size',
	'label'       => esc_html__( 'Site Tagline Font Size in px.', 'the-score' ),
	'section'     => 'the_score_header',
	'choices'     => array(
		'min'  => '0',
		'max'  => '50',
		'step' => '1',
	),
	'default'     => '20',
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'radio-image',
	'settings'    => 'site_branding_position',
	'label'       => esc_html__( 'Site Branding Position', 'the-score' ),
	'section'     => 'the_score_header',
	'default'     => '',
	'priority'    => 10,
	'choices'     => array(
		'left'   => get_template_directory_uri() . '/images/p-left.png',
		'center' => get_template_directory_uri() . '/images/p-center.png',
		'right'  => get_template_directory_uri() . '/images/p-right.png',
	),
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'slider',
	'settings'    => 'site_title_width',
	'label'       => esc_html__( 'Site Branding Width in %', 'the-score' ),
	'section'     => 'the_score_header',
	'choices'     => array(
		'min'  => '1',
		'max'  => '100',
		'step' => '1',
	),
	'default'     => '80',
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'slider',
	'settings'    => 'site_title_left_distanc',
	'label'       => esc_html__( 'Site Branding left distance in %.', 'the-score' ),
	'section'     => 'the_score_header',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
	'default'     => '0',
) );
Kirki::add_field( 'the_score_options', array(
	'type'        => 'slider',
	'settings'    => 'site_title_top_distanc',
	'label'       => esc_html__( 'Site Branding top distance in %.', 'the-score' ),
	'section'     => 'the_score_header',
	'choices'     => array(
		'min'  => '20',
		'max'  => '100',
		'step' => '1',
	),
	'default'     => '30',
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'switch',
	'settings'    => 'header_title_hide',
	'label'       => __( 'Hide Site Title', 'the-score' ),
	'section'     => 'the_score_header',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'On', 'the-score' ),
		'' => esc_html__( 'Off', 'the-score' ),
	),
	'default'     => '',
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'switch',
	'settings'    => 'header_tagline_hide',
	'label'       => __( 'Hide Tagline', 'the-score' ),
	'section'     => 'the_score_header',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'On', 'the-score' ),
		'' => esc_html__( 'Off', 'the-score' ),
	),
	'default'     => '',
) );

/**
 * Menu
 */
Kirki::add_section( 'the_score_top_menu', array(
    'title'          => __( ' Menu', 'the-score' ),
    'panel'       => 'header',
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'number',
	'settings'    => 'the_score_top_menu_font_size',
	'default'     => '13',
	'label'       => esc_html__( 'Tom Menu Font Size in px.', 'the-score' ),
	'section'     => 'the_score_top_menu',
	'choices'     => array(
		'min'  => 8,
		'max'  => 30,
		'step' => 1,
	),
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'color',
	'settings'    => 'the_score_menu_border_top_color',
	'label'       => __( 'Menu Border  Color', 'the-score' ),
	'section'     => 'the_score_top_menu',
	'default'     => '',
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'color',
	'settings'    => 'the_score_menu_background_color',
	'label'       => __( 'Menu Background Color', 'the-score' ),
	'section'     => 'the_score_top_menu',
	'default'     => '',
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'color',
	'settings'    => 'the_score_menu_background_hover_color',
	'label'       => __( 'Menu Background Hover Color', 'the-score' ),
	'section'     => 'the_score_top_menu',
	'default'     => '',
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'color',
	'settings'    => 'the_score_menu_color',
	'label'       => __( 'Menu Color', 'the-score' ),
	'section'     => 'the_score_top_menu',
	'default'     => '',
) );


/**
 * Before Header
 */
Kirki::add_section( 'the_score_before_header', array(
    'title'          => __( 'Before Header', 'the-score' ),
    'panel'       => 'header',
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'switch',
	'settings'    => 'activate_before_header',
	'label'       => esc_html__( 'Activate Section - Before Header.', 'the-score' ),
	'section'     => 'the_score_before_header',
	'default'     => "",
	'choices'     => array(
		'' => esc_html__( 'Off', 'the-score' ),
		'on'  => esc_html__( 'On', 'the-score' ),		
	),
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'color',
	'settings'    => 'before_background_color',
	'label'       => __( 'Bckground Color', 'the-score' ),
	'section'     => 'the_score_before_header',
	'default'     => '',
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'color',
	'settings'    => 'before_border_color',
	'label'       => __( 'Border Bottom Color', 'the-score' ),
	'section'     => 'the_score_before_header',
	'default'     => '',
) );


Kirki::add_field( 'the_score_options', array(
	'type'        => 'switch',
	'settings'    => 'activate_my_account',
	'label'       => esc_html__( 'Activate WooCommerce My Account.', 'the-score' ),
	'description'	    => esc_attr__( 'Before using woocommerce My Account options you need install WooCommerce. ', 'the-score' )."<a target='_blank' href='https://wordpress.org/plugins/woocommerce/'>Download here.</a>",	
	'tooltip'	    => esc_attr__( 'WooCommerce is a free eCommerce plugin that allows you to sell anything, beautifully. Built to integrate seamlessly with WordPress, WooCommerce is the worlds favorite eCommerce solution that gives both store owners and developers complete control.', 'the-score' ),
	'section'     => 'the_score_before_header',
	'default'     => "",
	'choices'     => array(
		'on'  => esc_html__( 'On', 'the-score' ),
		'' => esc_html__( 'Off', 'the-score' ),
	),
) );


Kirki::add_field( 'the_score_options', array(
	'type'     => 'text',
	'settings' => 'header_email',
	'label'    => __( 'E-mail', 'the-score' ),
	'section'  => 'the_score_before_header',
	'priority' => 10,
) );

Kirki::add_field( 'the_score_options', array(
	'type'     => 'text',
	'settings' => 'header_address',
	'label'    => __( 'Address', 'the-score' ),
	'section'  => 'the_score_before_header',
	'priority' => 10,
) );

Kirki::add_field( 'the_score_options', array(
	'type'     => 'text',
	'settings' => 'header_phone',
	'label'    => __( 'Phone', 'the-score' ),
	'section'  => 'the_score_before_header',
	'priority' => 10,
) );

/**
 *  Sidebar Options
 */
Kirki::add_section( 'the_score_sidebar', array(
    'title'          => __( 'Sidebar Options', 'the-score' ),
    'priority'       => 61,
    'capability'     => 'edit_theme_options',
) );

Kirki::add_field( 'the_score_options', array(
	'type'        => 'radio-image',
	'settings'    => 'sidebar_position',
	'label'       => esc_html__( 'Sidebar Position', 'the-score' ),
	'section'     => 'the_score_sidebar',
	'default'     => 'no',
	'priority'    => 10,
	'choices'     => array(
		'no'   => get_template_directory_uri() . '/images/no.png',
		'left' => get_template_directory_uri() . '/images/left.png',
		'right'  => get_template_directory_uri() . '/images/right.png',
	),
) );
Kirki::add_field( 'the_score_options', array(
	'type'        => 'slider',
	'settings'    => 'sidebar_width',
	'label'       => esc_html__( 'Sidebar Width', 'the-score' ),
	'section'     => 'the_score_sidebar',
	'default'     => "",
	'choices'     => array(
		'min'  => '20',
		'max'  => '50',
		'step' => '1',
	),
) );


/**
 * Custom Font Size Styles
 */ 	

function the_score_customizing_styles() {
        $site_title_font_size = get_theme_mod( 'site_title_font_size' );
        $site_tagline_font_size = get_theme_mod( 'site_tagline_font_size' );
        $site_branding_position = get_theme_mod( 'site_branding_position' );
        $site_title_width = get_theme_mod( 'site_title_width' );
        $site_title_left_distanc = get_theme_mod( 'site_title_left_distanc' );
        $site_title_top_distanc = get_theme_mod( 'site_title_top_distanc' );
        $header_title_hide = get_theme_mod( 'header_title_hide' );
        $header_tagline_hide = get_theme_mod( 'header_tagline_hide' );
        $the_score_top_menu_font_size = get_theme_mod( 'the_score_top_menu_font_size' );
        $header_image_show = get_theme_mod( 'header_image_show' );
        $sidebar_position = get_theme_mod( 'sidebar_position' );
        $the_score_menu_background_color = get_theme_mod( 'the_score_menu_background_color' );
        $the_score_menu_color = get_theme_mod( 'the_score_menu_color' );;
        $the_score_menu_background_hover_color = get_theme_mod( 'the_score_menu_background_hover_color' );
        $before_background_color = get_theme_mod( 'before_background_color' );
        $before_border_color = get_theme_mod( 'before_border_color' );
        $the_score_menu_border_top_color = get_theme_mod( 'the_score_menu_border_top_color' );
		
## Header Styles
		if($site_title_font_size) { $style1 = ".site-branding .site-title a, .site-title {font-size: {$site_title_font_size}px !important;}";} else {$style1 ="";}
		if($site_tagline_font_size) { $style2 = ".site-description {font-size: {$site_tagline_font_size}px !important;}";} else {$style2 ="";}
		if($site_branding_position == "left") { $style3 = ".site-branding {text-align: left !important;}";} else {$style3 ="";}
		if($site_branding_position == "right") { $style4 = ".site-branding {text-align: right !important;}";} else {$style4 ="";}
		if($site_branding_position == "center") { $style26 = ".site-branding {text-align: center !important;}";} else {$style26 ="";}
		if($site_title_width) { $style5 = ".site-branding {width: {$site_title_width}% !important;}";} else {$style5 ="";}
		if($site_title_left_distanc != '0') { $style6 = ".site-branding {left: {$site_title_left_distanc}% !important; right: auto;}";} else {$style6 ="";}
		if($site_title_top_distanc) { $style7 = ".site-branding {top: {$site_title_top_distanc}% !important;}";} else {$style7 ="";}
		if($header_title_hide) { $style8 = ".site-branding .site-title a, .site-branding .site-title {display: none !important;}";} else {$style8 ="";}
		if($header_tagline_hide) { $style9 = ".site-branding .site-description {display: none !important;}";} else {$style9 ="";}
		if($the_score_top_menu_font_size) { $style10 = ".main-navigation ul li a, .main-navigation ul ul li a {font-size: {$the_score_top_menu_font_size}px !important;}";} else {$style10 ="";}
		if($before_background_color) { $style17 = ".before-header {background: {$before_background_color} !important;}";} else {$style17 ="";}
		if($before_border_color) { $style19 = ".before-header {border-bottom: 1px solid {$before_border_color} !important;}";} else {$style19 ="";}

		if((!is_front_page() or !is_home())and $header_image_show == 'home') { $style11 = ".grid-top {position: relative !important;} .all-header{display: none !important;} .site-header {overflow: visible;}";} else {$style11 ="";}
		if((is_front_page() and !is_home()) and $header_image_show == 'home') { $style27 = ".grid-top {position: absolute !important;} body .all-header{display: block !important;} body .site-header {overflow: hidden;}";} else {$style27 ="";}		
		if (!has_header_image()) { $style14 = ".site-branding, .all-header {display: none !important;} .grid-top {position: relative;} .site-header{overflow: inherit;}";} else {$style14 ="";}			
## Sidebar Styles
		if($sidebar_position == 'no') { $style12 = "#content #secondary {display: none !important;}";} else {$style12 ="";}

## Menu Styles		
		if($the_score_menu_background_color) { $style15 = ".grid-top, .main-navigation ul ul, .dl-menuwrapper button:hover, .dl-menuwrapper button.dl-active, .dl-menuwrapper ul, .dl-menuwrapper button {background: {$the_score_menu_background_color} !important;}";} else {$style15 ="";}
		if($the_score_menu_color) { $style16 = ".main-navigation ul li a, .main-navigation ul li > a:after, .dl-menuwrapper li a, .dl-menuwrapper li > a:after, .dl-menuwrapper button, .dl-menuwrapper li.dl-back:after, .dl-menuwrapper li > a:not(:only-child):after {color: {$the_score_menu_color} !important;}";} else {$style16 ="";}
		if($the_score_menu_color) { $style21 = ".dl-menuwrapper button:after {background: {$the_score_menu_color} !important;box-shadow: 0 10px 0 {$the_score_menu_color}, 0 20px 0 {$the_score_menu_color} !important;}";} else {$style21 ="";}
		if($the_score_menu_background_hover_color) { $style18 = ".main-navigation ul li a:hover, .dl-menuwrapper li a:hover{background: {$the_score_menu_background_hover_color} !important;}";} else {$style18 ="";}
		if($the_score_menu_border_top_color) { $style20 = ".grid-top {border: 1px solid {$the_score_menu_border_top_color} !important;}";} else {$style20 ="";}

        wp_add_inline_style( 'score-style', 
		$style1.$style2.$style3.$style4.$style5.$style6.$style7.$style8.$style9.$style10.$style11.$style12.$style14.$style15.$style16.$style17.$style18.$style19.$style20.$style21.$style26.$style27
		);
}
add_action( 'wp_enqueue_scripts', 'the_score_customizing_styles' );

