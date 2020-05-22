<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Post meta setting for homepage
 * Hooked via action carbon_fields_register_fields, priority 10
 * @since   1.0.0
 * @return  void
 */
function t4t_crb_home_post_meta_setting() {

    Container::make( 'post_meta', __('HomePage Setting', 't4teu'))
        ->where( 'post_type', '=', 'page')
        ->where( 'post_template', '=', 'page-home.php')
        ->add_fields( array(
            Field::make('separator',    'sp_section_1',        __('Section 1', 't4teu')),
            Field::make('rich_text',    'section_1_content',   __('Content', 't4teu')),
            Field::make('image',        'section_1_image',     __('Image', 't4teu')),

            Field::make('separator',    'sp_section_2',        __('Section 2', 't4teu')),
            Field::make('rich_text',    'section_2_content',   __('Content', 't4teu')),
            Field::make('text',         'section_2_link',      __('Link', 't4teu')),

            Field::make('separator',    'sp_section_3',        __('Section 3', 't4teu')),
            Field::make('rich_text',    'section_3_content',   __('Content', 't4teu')),
            Field::make('image',        'section_3_image',     __('Image', 't4teu')),

            Field::make('separator',    'sp_section_4',        __('Section 4', 't4teu')),
            Field::make('text',         'section_4_link',      __('Link', 't4teu'))
        ));

}

add_action( 'carbon_fields_register_fields', 't4t_crb_home_post_meta_setting', 10 );
