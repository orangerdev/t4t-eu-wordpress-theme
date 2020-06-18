<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Post meta setting for success story
 * Hooked via action carbon_fields_register_fields, priority 10
 * @since   1.0.0
 * @return  void
 */
function t4t_crb_success_story_page_post_meta_setting() {

    Container::make( 'post_meta', __('Properties', 't4teu'))
        ->where( 'post_type', '=', 'success-stories')
        ->add_fields( array(
            Field::make('text',     'sub_title',        __('Sub Title', 't4teu')),
            Field::make('image',    'flag',             __('Flag', 't4teu')),
            Field::make('textarea', 'image_caption',    __('Image Caption', 't4teu')),
            Field::make('textarea', 'image_quote',      __('Quote', 't4teu')),
            Field::make('text',     'quote_author',     __('Author Name', 't4teu')),
            Field::make('text',     'author_position',  __('Author Position', 't4teu')),
        ));

}

add_action( 'carbon_fields_register_fields', 't4t_crb_success_story_page_post_meta_setting', 10 );
