<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Post meta setting for index
 * Hooked via action carbon_fields_register_fields, priority 10
 * @since   1.0.0
 * @return  void
 */
function t4t_crb_bilateral_post_meta_setting() {

    Container::make( 'post_meta', __('Bilateral Setting', 't4teu'))
        ->where( 'post_type', '=', 'page')
        ->where( 'post_template', '=', 'page-bilateral-cooperation.php')
        ->add_fields( array(
            Field::make('radio',      'bilateral_nation',      __('Current Nation', 't4teu'))
                ->set_options(array(
                    'brunei'      => __('Brunei Darussalam'),
                    'cambodia'    => __('Cambodia'),
                    'indonesia'   => __('Indonesia'),
                    'laos'        => __('Laos'),
                    'malaysia'    => __('Malaysia'),
                    'myanmar'     => __('Myanmar'),
                    'philiphines' => __('Philiphines'),
                    'singapore'   => __('Singapore'),
                    'thailand'    => __('Thailand'),
                    'vietnam'     => __('Vietnam')
                ))
        ));

}

add_action( 'carbon_fields_register_fields', 't4t_crb_bilateral_post_meta_setting', 10 );
