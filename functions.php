<?php

/**
 * Register theme style
 * Hooked via action wp_enqueue_scripts, priority 100
 * @since   1.0.0
 * @return  void
 */
function t4t_register_styles() {

    $styles = wp_styles();

    $page_templates = array('page-home.php', 'page-index.php', 'page-foreword.php');

    if(!is_page_template($page_templates) ) :

        wp_enqueue_style    ( 'parent-style', get_template_directory_uri() . '/style.css' );

    else :

        $styles->add_data   ( 'twentytwenty-style', 'after', array() );

        wp_register_style   ( 'uikit',        get_stylesheet_directory_uri() . '/css/vendor/uikit.min.css', array(), '3.4.2', 'all');
        wp_enqueue_style    ( 't4t-style',    get_stylesheet_directory_uri() . '/css/style.css', array('uikit'), '1.0.0', 'all');

        wp_register_script  ( 'uikit',        get_stylesheet_directory_uri() . '/js/uikit.min.js', array('jquery'), '3.4.2', false);
        wp_enqueue_script   ( 'uikit-icons',  get_stylesheet_directory_uri() . '/js/uikit-icons.min.js', array('jquery', 'uikit'), '3.4.2', false);
    endif;
}

add_action( 'wp_enqueue_scripts', 't4t_register_styles', 100 );

/**
 * Register widget areas.
 * Hooked via action t4teu_sidebar_registration, priority 10
 * @since 	1.0.0
 * @return 	void
 */
function t4teu_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<span class="subtitle">',
		'after_title'   => '</span><br /><br />',
		'before_widget' => '<div class="sub-footer">',
		'after_widget'  => '</div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Main Footer #1', 't4teu' ),
				'id'          => 'footer-sidebar-t4t',
				'description' => __( 'Widgets in this area will be displayed in t4t theme.', 't4teu' ),
			)
		)
	);

}

add_action( 'widgets_init', 't4teu_sidebar_registration', 10);

if(!function_exists('__debug')) :

/**
 * Debugging functions
 * @since   1.0.0
 * @return  void
 */

function __debug()
{
    $bt     = debug_backtrace();
    $caller = array_shift($bt);
    $args   = [
        "file"  => $caller["file"],
        "line"  => $caller["line"],
        "args"  => func_get_args()
    ];

    do_action('qm/info', $args);
}

endif;

if(!function_exists('__print_debug')) :

/**
 * Debugging functions
 * @since   1.0.0
 * @return  void
 */

function __print_debug()
{
    $bt     = debug_backtrace();
    $caller = array_shift($bt);
    $args   = [
        "file"  => $caller["file"],
        "line"  => $caller["line"],
        "args"  => func_get_args()
    ];

    ?><pre><?php
    print_r(func_get_args());
    ?></pre><?php
}

endif;

/**
 * Load carbon fields
 * Hooked via action after_setup_theme, priority 10
 * @since   1.0.0
 * @return  void
 */
function t4t_crb_load() {
    require_once ( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action( "after_setup_theme", 't4t_crb_load', 10);

require_once ( get_stylesheet_directory() . '/inc/theme-uikit-offcanvas-menu.php' );
require_once ( get_stylesheet_directory() . '/inc/theme-uikit-primary-menu.php' );
require_once ( get_stylesheet_directory() . '/inc/theme-uikit-top-menu.php' );
require_once ( get_stylesheet_directory() . '/inc/theme-options.php' );
require_once ( get_stylesheet_directory() . '/inc/theme-tags.php' );
require_once ( get_stylesheet_directory() . '/inc/post-meta/home-setting.php' );
require_once ( get_stylesheet_directory() . '/inc/post-meta/index-setting.php' );
