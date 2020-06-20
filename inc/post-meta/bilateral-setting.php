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
                )),
            Field::make('text', 'brunei_link', 'Link to Brunei Darussalam')
                ->set_conditional_logic(array(
                    array(
                        'field'   => 'bilateral_nation',
                        'value'   => array('brunei'),
                        'compare' => 'NOT IN'
                    )
                ))
                ->set_default_value('#'),

            Field::make('text', 'cambodia_link', 'Link to Cambodia')
                ->set_conditional_logic(array(
                    array(
                        'field'   => 'bilateral_nation',
                        'value'   => array('cambodia'),
                        'compare' => 'NOT IN'
                    )
                ))
                ->set_default_value('#'),

            Field::make('text', 'indonesia_link', 'Link to Indonesia')
                ->set_conditional_logic(array(
                    array(
                        'field'   => 'bilateral_nation',
                        'value'   => array('indonesia'),
                        'compare' => 'NOT IN'
                    )
                ))
                ->set_default_value('#'),

            Field::make('text', 'laos_link', 'Link to Laos')
                ->set_conditional_logic(array(
                    array(
                        'field'   => 'bilateral_nation',
                        'value'   => array('laos'),
                        'compare' => 'NOT IN'
                    )
                ))
                ->set_default_value('#'),

            Field::make('text', 'malaysia_link', 'Link to Malaysia')
                ->set_conditional_logic(array(
                    array(
                        'field'   => 'bilateral_nation',
                        'value'   => array('malaysia'),
                        'compare' => 'NOT IN'
                    )
                ))
                ->set_default_value('#'),

            Field::make('text', 'philiphines_link', 'Link to Philiphines')
                ->set_conditional_logic(array(
                    array(
                        'field'   => 'bilateral_nation',
                        'value'   => array('philiphines'),
                        'compare' => 'NOT IN'
                    )
                ))
                ->set_default_value('#'),

            Field::make('text', 'singapore_link', 'Link to Singapore')
                ->set_conditional_logic(array(
                    array(
                        'field'   => 'bilateral_nation',
                        'value'   => array('singapore'),
                        'compare' => 'NOT IN'
                    )
                ))
                ->set_default_value('#'),

            Field::make('text', 'thailand_link', 'Link to Thailand')
                ->set_conditional_logic(array(
                    array(
                        'field'   => 'bilateral_nation',
                        'value'   => array('thailand'),
                        'compare' => 'NOT IN'
                    )
                ))
                ->set_default_value('#'),

            Field::make('text', 'vietnam_link', 'Link to Vietnam')
                ->set_conditional_logic(array(
                    array(
                        'field'   => 'bilateral_nation',
                        'value'   => array('vietnam'),
                        'compare' => 'NOT IN'
                    )
                ))
                ->set_default_value('#')
        ));

}

add_action( 'carbon_fields_register_fields', 't4t_crb_bilateral_post_meta_setting', 10 );
