<?php
/**
 * Sample implementation of the Customizer Social Links.
 *
 * You can add an optional custom header image to header.php like so ...
 *
 *
 * @package Solus
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses solus_header_style()
 * @uses solus_admin_header_style()
 * @uses solus_admin_header_image()
 */

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