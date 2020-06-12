<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Post meta setting for homepage
 * Hooked via action carbon_fields_register_fields, priority 10
 * @since   1.0.0
 * @return  void
 */
function t4t_crb_default_page_post_meta_setting() {

    Container::make( 'post_meta', __('Default Page Setting', 't4teu'))
        ->where( 'post_type', '=', 'page')
        ->add_fields( array(
            Field::make('separator',    'sp_page_detail',   __('Page Title', 't4teu')),
            Field::make('text',         'page_main_title',  __('Main Title', 't4teu')),
            Field::make('text',         'page_sub_title',   __('Sub Title', 't4teu')),

            Field::make('separator',    'sp_featured_image',        __('Featured Image', 't4teu')),
            Field::make('textarea',     'featured_image_caption',   __('Caption', 't4teu'))
        ));

}

add_action( 'carbon_fields_register_fields', 't4t_crb_default_page_post_meta_setting', 10 );
