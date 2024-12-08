<?php
/**
 * StoreBase Theme Customizer
 *
 * @package StoreBase
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function storebase_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'storebase_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'storebase_customize_partial_blogdescription',
			)
		);
	}

    // Add footer text customization section
    $wp_customize->add_section(
        'storebase_footer_section',
        array(
            'title'       => __( 'Footer Settings', 'storebase' ),
            'priority'    => 160, // Position it towards the end
            'description' => __( 'Customize the footer text displayed at the bottom of your site.', 'storebase' ),
        )
    );

    // Add setting for footer text
    $wp_customize->add_setting(
        'storebase_footer_text',
        array(
            'default'           => __( 'Copyright ©2025 powered by WordPress. Theme by WC Studio.', 'storebase' ),
            'sanitize_callback' => 'wp_kses_post', // Ensures only safe HTML is allowed
            'transport'         => 'postMessage', // Allows live preview without reloading
        )
    );

    // Add control for footer text (textarea)
    $wp_customize->add_control(
        'storebase_footer_text_control',
        array(
            'label'       => __( 'Footer Text', 'storebase' ),
            'section'     => 'storebase_footer_section',
            'settings'    => 'storebase_footer_text',
            'type'        => 'textarea', // Allow multiline text input
            'description' => __( 'Edit the footer text displayed at the bottom of your site.', 'storebase' ),
        )
    );
    // Selective refresh for live previewing
    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial(
            'storebase_footer_text',
            array(
                'selector'        => '.footer-bottom .copyright',
                'render_callback' => 'storebase_customize_partial_footer_text',
            )
        );
    }
}
add_action( 'customize_register', 'storebase_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function storebase_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function storebase_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
/**
 * Render the footer text for the selective refresh partial.
 *
 * @return void
 */
function storebase_customize_partial_footer_text() {
    echo wp_kses_post( get_theme_mod( 'storebase_footer_text', __( 'Copyright ©2025 powered by WordPress. Theme by WC Studio.', 'storebase' ) ) );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function storebase_customize_preview_js() {
	wp_enqueue_script( 'storebase-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'storebase_customize_preview_js' );
