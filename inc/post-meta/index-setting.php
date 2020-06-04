<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Post meta setting for index
 * Hooked via action carbon_fields_register_fields, priority 10
 * @since   1.0.0
 * @return  void
 */
function t4t_crb_index_post_meta_setting() {

    Container::make( 'post_meta', __('Index Setting', 't4teu'))
        ->where( 'post_type', '=', 'page')
        ->where( 'post_template', '=', 'page-index.php')
        ->add_fields( array(
            Field::make('separator',    'sp_index_section_1',         __('Left Content', 't4teu')),
            Field::make('text',         'index_section_1_title',      __('Title', 't4teu')),
            Field::make('complex',      'index_section_1_image',      __('Gallery', 't4teu'))
                ->add_fields(array(
                    Field::make('text',     'link', __('Link', 't4teu'))
                        ->set_default_value('#'),

                    Field::make('image',    'img',  __('Image', 't4teu')),
                    Field::make('text',     'text', __('Overlay Title', 't4teu'))
                ))
                ->set_layout('tabbed-vertical'),

            Field::make('separator',    'sp_index_section_2',         __('Right Content', 't4teu')),
            Field::make('text',         'index_section_2_title',      __('Title', 't4teu')),
            Field::make('complex',      'index_section_2_image',      __('Gallery', 't4teu'))
                ->add_fields(array(
                    Field::make('text',     'link', __('Link', 't4teu'))
                        ->set_default_value('#'),

                    Field::make('image',    'img',  __('Image', 't4teu')),
                    Field::make('text',     'text', __('Overlay Title', 't4teu'))
                ))
                ->set_layout('tabbed-vertical'),
        ));

}

add_action( 'carbon_fields_register_fields', 't4t_crb_index_post_meta_setting', 10 );
