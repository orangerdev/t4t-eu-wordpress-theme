<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Post meta setting for index
 * Hooked via action carbon_fields_register_fields, priority 10
 * @since   1.0.0
 * @return  void
 */
function t4t_crb_contact_post_meta_setting() {

    Container::make( 'post_meta', __('Contact Setting', 't4teu'))
        ->where( 'post_type', '=', 'page')
        ->where( 'post_template', '=', 'page-contact.php')
        ->add_fields( array(
            Field::make('complex',      'contact_content',      __('Content', 't4teu'))
                ->add_fields(array(
                    Field::make('text',         'main_title',    __('Main Title', 't4teu'))
                        ->set_default_value('CONTACTS'),

                    Field::make('text',         'sub_title',    __('Sub Title', 't4teu')),
                    Field::make('complex',      'contact',      __('Contact', 't4teu'))
                        ->add_fields(array(
                            Field::make('text',     'country', __('Country', 't4teu')),
                            Field::make('textarea', 'address', __('Address', 't4teu')),
                            Field::make('text',     'phone',   __('Phone', 't4teu')),
                            Field::make('text',     'fax',     __('Fax', 't4teu')),
                            Field::make('text',     'email',   __('Email', 't4teu')),
                            Field::make('image',    'flag',    __('Flag', 't4teu'))
                                ->set_value_type('url')
                        ))
                        ->set_layout('tabbed-vertical')
                        ->set_header_template('<% if(country) { %> <%- country %> <% } %>')
                ))
                ->set_layout('tabbed-vertical')
                ->set_header_template('<% if(sub_title) { %> <%- sub_title %> <% } %>')
        ));

}

add_action( 'carbon_fields_register_fields', 't4t_crb_contact_post_meta_setting', 10 );
