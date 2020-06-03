<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * General theme setting
 * Hooked via action carbon_fields_register_fields, priority 10
 * @since   1.0.0
 * @return  void
 */
function t4t_crb_theme_setting() {

    Container::make( 'theme_options', __('Theme Setting', 't4teu'))
        ->add_tab( __('Sidebar', 't4teu'), array(

            Field::make('separator',    'sp_sidebar_edocument',  __('E-Document Version', 't4teu')),
            Field::make('file',         'edocument_file',        __('Document', 't4teu')),
            Field::make('text',         'edocument_title',       __('Button Title', 't4teu')),

            Field::make('separator',    'sp_sidebar_get_connected',         __('Get Connected', 't4teu')),
            Field::make('rich_text',    'sidebar_get_connected_content',    __('Content', 't4teu'))
        ))
        ->add_tab( __('Social Media', 't4teu'), array(
            Field::make('text',     'sc_facebook',  __('Facebook', 't4teu')),
            Field::make('text',     'sc_twitter',   __('Twitter', 't4teu')),
            Field::make('text',     'sc_instagram', __('Instagram', 't4teu'))
        ))
        ->add_tab( __('Other', 't4teu'), array(
            Field::make('textarea',     'footer_copyright',  __('Copyright', 't4teu')),
        ));

}

add_action( 'carbon_fields_register_fields', 't4t_crb_theme_setting', 10 );
