<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Post meta setting for success story list
 * Hooked via action carbon_fields_register_fields, priority 10
 * @since   1.0.0
 * @return  void
 */
function t4t_crb_list_success_story_page_post_meta_setting() {

    Container::make( 'post_meta', __('Display Success Stories', 't4teu'))
        ->where( 'post_type', '=', 'page')
        ->where( 'post_template', '=', 'page-success-stories.php')
        ->add_fields( array(
            Field::make('association',     'success_categories',        __('Display from Categories', 't4teu'))
                ->set_types(array(
                    array(
                        'type'      => 'term',
                        'taxonomy'  => 'success-category'
                    )
                ))
        ));

}

add_action( 'carbon_fields_register_fields', 't4t_crb_list_success_story_page_post_meta_setting', 10 );
