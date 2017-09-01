<?php
/**
 * Solus Theme Customizer.
 *
 * @package Solus
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function solus_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->add_section( 'solus_section' , array(
        'title'       => __( 'Logo', 'solus' ),
        'priority'    => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );
    
    $wp_customize->add_setting( 'solus_logo',
        'sanitize_callback' == 'esc_url_raw'
    );

    $wp_customize->add_control( new WP_Customize_Image_Control( 
        $wp_customize, 'solus_logo', array(
            'label'    => __( 'Logo', 'solus' ),
            'section'  => 'solus_section',
            'settings' => 'solus_logo',
            'sanitize_callback' => 'esc_url_raw',
        ) 
    ) );

    $wp_customize->add_setting( 'solus_header_background_color', array(
       'default' => '66D344',
       'transport'   => 'refresh',
       'sanitize_callback' => 'esc_url_raw',
    ) );  

    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize, 
        'solus_header_background_color_control',
        array(
            'label'    => __( 'Header background color', 'solus' ), 
            'section'  => 'colors',
            'settings' => 'solus_header_background_color',
            'priority' => 10,
        ) 
    ));  

    $wp_customize->add_section(
        'social_options',
        array(
            'title' => 'Social Links',
            'description' => 'Enter the links of your favorite social.',
            'priority' => 35,
        )
    );

    //facebook
    $wp_customize->add_setting('fb_textbox', array( 'default' => 'http://facebook.com', 'sanitize_callback' => 'esc_url_raw',) );
    $wp_customize->add_control( 'fb_textbox', array( 'label' => 'Facebook Link', 'section' => 'social_options','type' => 'text',));

    //twitter
    $wp_customize->add_setting('tw_textbox', array( 'default' => 'http://twitter.com', 'sanitize_callback' => 'esc_url_raw', ) );
    $wp_customize->add_control( 'tw_textbox', array( 'label' => 'Twitter Link', 'section' => 'social_options','type' => 'text',));

    //dribbble
    $wp_customize->add_setting('dribbble_textbox', array( 'default' => 'http://dribbble.com', 'sanitize_callback' => 'esc_url_raw', ) );
    $wp_customize->add_control( 'dribbble_textbox', array( 'label' => 'dribbble Link', 'section' => 'social_options','type' => 'text',));

    //plusgoogle
    $wp_customize->add_setting('plusgoogle_textbox', array( 'default' => 'http://plusgoogle.com', 'sanitize_callback' => 'esc_url_raw', ) );
    $wp_customize->add_control( 'plusgoogle_textbox', array( 'label' => 'google plus Link', 'section' => 'social_options','type' => 'text',));

    //pinterest
    $wp_customize->add_setting('pinterest_textbox', array( 'default' => 'http://pinterest.com', 'sanitize_callback' => 'esc_url_raw', ) );
    $wp_customize->add_control( 'pinterest_textbox', array( 'label' => 'pinterest Link', 'section' => 'social_options','type' => 'text',));

    //github
    $wp_customize->add_setting('github_textbox', array( 'default' => 'http://github.com', 'sanitize_callback' => 'esc_url_raw', ) );
    $wp_customize->add_control( 'github_textbox', array( 'label' => 'github Link', 'section' => 'social_options','type' => 'text',));

    //tumblr
    $wp_customize->add_setting('tumblr_textbox', array( 'default' => 'http://tumblr.com', 'sanitize_callback' => 'esc_url_raw', ) );
    $wp_customize->add_control( 'tumblr_textbox', array( 'label' => 'tumblr Link', 'section' => 'social_options','type' => 'text',));

    //youtube
    $wp_customize->add_setting('youtube_textbox', array( 'default' => 'http://youtube.com', 'sanitize_callback' => 'esc_url_raw', ) );
    $wp_customize->add_control( 'youtube_textbox', array( 'label' => 'youtube Link', 'section' => 'social_options','type' => 'text',));

    //linkedin
    $wp_customize->add_setting('linkedin_textbox', array( 'default' => 'http://linkedin.com', 'sanitize_callback' => 'esc_url_raw', ) );
    $wp_customize->add_control( 'linkedin_textbox', array( 'label' => 'linkedin Link', 'section' => 'social_options','type' => 'text',));

    //social links background color on hover
    $wp_customize->add_setting(
        'color-setting',
        array(
            'default' => '#66d344',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
}
add_action( 'customize_register', 'solus_customize_register' );

function solus_custom_colors() {
    ?>
    <style type='text/css'>
        .site-branding a {
            background-color: <?php echo get_theme_mod('solus_header_background_color') ?>;
        }
    </style>
    <?php
}
add_action( 'wp_head' , 'solus_custom_colors' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function solus_customize_preview_js() {
    wp_enqueue_script( 'solus_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'solus_customize_preview_js' );
