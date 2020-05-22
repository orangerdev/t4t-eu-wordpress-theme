<!DOCTYPE html>
<head>
    <meta content="utf-8" http-equiv="encoding">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="format-detection" content = "telephone=no">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="navigation">
        <div class="for-desktop">
            <div class="uk-child-width-expand@s" uk-grid>
                <div class="uk-width-expand@m">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_flag_ue.svg" class="flag">&nbsp;&nbsp;<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_flag_asean.svg" class="flag">
                    <?php
                    wp_nav_menu(
                        array(
                            'container'  => false,
                            'theme_location' => 'primary',
                        )
                    );
                    ?>
                </div>
                <div class="uk-text-right uk-width-1-4@m uk-margin-remove">
                    <form class="" action="" method="get" style='display:inline-block;'>
                        <input class="uk-input" type="text" name='s' style="display: inline-block; width: 100px; height: 20px;">
                    </form>
                    &nbsp;&nbsp;<a uk-toggle="target: #slide-nav"><span uk-icon="menu"></span></a>
                </div>
            </div>
        </div>
        <div class="for-mobile">
            <div style="width: 50%; display: inline-block;">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_flag_ue.svg" class="flag">&nbsp;&nbsp;
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_flag_asean.svg" class="flag">
            </div>
            <div style="width: 50%; display: inline-block; text-align: right;">
                <a uk-toggle="target: #slide-nav"><span uk-icon="menu"></span>
            </div>
        </div>
    </div>
    <div id="slide-nav" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar">
            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <div class="slide-menu">
                <?php
                wp_nav_menu(
                    array(
                        'container'  => false,
                        'theme_location' => 'primary',
                    )
                );
                ?>
                <div class="uk-margin uk-text-center">
                    <a href="#"><button class="btn-default">DOWNLOAD E-DOCUMENT<br>VERSION</button></a>
                </div>
                <div class="socmed uk-text-center">
                    Get Connected &nbsp;&nbsp;<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_fb.svg">&nbsp;<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_twitter.svg">&nbsp;<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_ig.svg">
                </div>
            </div>
        </div>
    </div>
