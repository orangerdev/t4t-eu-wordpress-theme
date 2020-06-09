<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Post meta setting for index
 * Hooked via action carbon_fields_register_fields, priority 10
 * @since   1.0.0
 * @return  void
 */
function t4t_crb_foreword_post_meta_setting() {

    Container::make( 'post_meta', __('Foreword Setting', 't4teu'))
        ->where( 'post_type', '=', 'page')
        ->where( 'post_template', '=', 'page-foreword.php')
        ->add_fields( array(
            Field::make('complex',      'foreword_content',      __('Content', 't4teu'))
                ->add_fields(array(
                    Field::make('text',         'main_title',    __('Main Title', 't4teu'))
                        ->set_default_value('Foreword'),

                    Field::make('text',         'sub_title',    __('Sub Title', 't4teu')),
                    Field::make('image',        'img',          __('Photo', 't4teu')),
                    Field::make('rich_text',    'content',      __('Content', 't4teu')),
                    Field::make('text',         'name',         __('Name', 't4teu')),
                    Field::make('text',         'position',     __('Position', 't4teu'))

                ))
                ->set_layout('tabbed-vertical')
                ->set_header_template('<% if(name) { %> <%- name %> <% } %>')
        ));

}

add_action( 'carbon_fields_register_fields', 't4t_crb_foreword_post_meta_setting', 10 );
