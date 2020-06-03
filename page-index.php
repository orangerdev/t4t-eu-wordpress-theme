<?php
/**
 * Template Name: Main Home
 */
global $post;
get_header('index'); ?>
<section id="section-home">
    <div class="header" uk-sticky>
        <div style="position: relative;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_back.svg">
            <div class="uk-position-top-right">
                <a href="<?php echo esc_url(carbon_get_theme_option('sc_facebook')); ?>" rel="nofollow" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_fb.svg" class="icon-socmed"></a>
                &nbsp;&nbsp;
                <a href="<?php echo esc_url(carbon_get_theme_option('sc_twitter')); ?>" rel="nofollow" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_twitter.svg" class="icon-socmed"></a>
                &nbsp;&nbsp;
                <a href="<?php echo esc_url(carbon_get_theme_option('sc_instagram')); ?>" rel="nofollow" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_ig.svg" class="icon-socmed"></a>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-text-center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_flag_ue.svg" class="flag">&nbsp;&nbsp;
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_flag_asean.svg" class="flag">&nbsp;&nbsp;
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_flag_id.svg" class="flag"><br><br>
            <h2>The European Union</h2>
            <h1>Blue Book</h1>
        </div>
    </div>
    <div class="book-wrapper">
        <div class="for-desktop">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_fade_left.svg" class="uk-position-left">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_fade_right.svg" class="uk-position-right">
        </div>
        <div class="book-slideshow">
            <div uk-slideshow="ratio: 4:4">
                <ul class="uk-slideshow-items">
                    <?php
                    $left_gallery = carbon_get_post_meta(get_the_ID(), 'index_section_1_image');
                    foreach($left_gallery as $slide) :
                    ?>
                    <li>
                        <a href="<?php echo esc_url($slide['url']); ?>">
                            <img src="<?php echo wp_get_attachment_url($slide['img'], 'medium'); ?>" alt="" style="width:100%;height:auto" />
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <div class="slide-nav">
                    <a href="#" uk-slidenav-previous uk-slideshow-item="previous"></a> <?php echo carbon_get_post_meta(get_the_ID(), 'index_section_1_title'); ?>
                    <a href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                </div>
            </div>
        </div
        ><div class="book-slideshow">
            <div uk-slideshow="ratio: 4:4">
                <ul class="uk-slideshow-items">
                    <?php
                    $right_gallery = carbon_get_post_meta(get_the_ID(), 'index_section_2_image');
                    foreach($right_gallery as $slide) :
                    ?>
                    <li>
                        <a href="<?php echo esc_url($slide['url']); ?>">
                            <img src="<?php echo wp_get_attachment_url($slide['img'], 'medium'); ?>" alt="" style="width:100%;height:auto" />
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <div class="slide-nav">
                    <a href="#" uk-slidenav-previous uk-slideshow-item="previous"></a> <?php echo carbon_get_post_meta(get_the_ID(), 'index_section_2_title'); ?>
                    <a href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <?php echo carbon_get_theme_option('footer_copyright'); ?>
    </div>
</section>
<?php get_footer('index');
