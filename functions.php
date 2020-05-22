<?php

/**
 * Register theme style
 * Hooked via action wp_enqueue_scripts, priority 100
 * @since   1.0.0
 * @return  void
 */
function t4t_register_styles() {

    if(!is_page_template('page-home.php')) :

        wp_enqueue_style    ( 'parent-style', get_template_directory_uri() . '/style.css' );

    else :
        wp_register_style   ( 'uikit',        get_stylesheet_directory_uri() . '/css/vendor/uikit.min.css', array(), '3.4.2', 'all');
        wp_enqueue_style    ( 't4t-style',    get_stylesheet_directory_uri() . '/css/style.css', array('uikit'), '1.0.0', 'all');

        wp_register_script  ( 'uikit',        get_stylesheet_directory_uri() . '/js/uikit.min.js', array('jquery'), '3.4.2', false);
        wp_enqueue_script   ( 'uikit-icons',  get_stylesheet_directory_uri() . '/js/uikit-icons.min.js', array('jquery', 'uikit'), '3.4.2', false);
    endif;
}

add_action( 'wp_enqueue_scripts', 't4t_register_styles', 100 );

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
