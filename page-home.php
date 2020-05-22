<?php
/**
 * Template Name: Homepage
 */
global $post;
get_header('main');
?>
    <section id="section-cover">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_batik.png" width="100%" id="img-batik">
        <div class="uk-text-center cover-title">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_flag_ue.svg">&nbsp;&nbsp;<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_flag_asean.svg">
            <h1>
                Blue Book 2020
            </h1>
            <div class="subtitle">EU-ASEAN Natural Partners</div>
        </div>
    </section>
    <section id="section-cooperation">
        <div class="uk-text-center for-desktop">
            <h2>EU-ASEAN COORPERATION</h2><br>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_eu_asean_cooperation.svg" width="800">
        </div>
        <div class="for-mobile">
            <div class="uk-text-center" style="margin-bottom: 100px;">
                <h2>EU-ASEAN COORPERATION</h2><br>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_eu_asean_cooperation_ver.svg">
            </div>
        </div>
        <div class="section-wrapper content-euworldwide">
            <div class="uk-grid-collapse uk-child-width-expand@s" uk-grid>
                <div class="for-mobile">
                    <?php echo wp_get_attachment_image( carbon_get_post_meta($post->ID, 'section_1_image'), 'full' ); ?>
                </div>
                <div>
                    <div class="desc desc-left">
                        <?php echo wpautop(carbon_get_post_meta($post->ID, 'section_1_content')); ?>
                    </div>
                </div>
                <div class="for-desktop">
                    <?php echo wp_get_attachment_image( carbon_get_post_meta($post->ID, 'section_1_image'), 'full' ); ?>
                </div>
            </div>
        </div>
    </section>
    <section id="section-euasean">
        <div class="section-wrapper uk-text-center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_book_flag_eu.png" width="50">&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_book_flag_asean.png" width="50"><br><br>
            <h2>THE EU ASEAN</h2>
            <div class="subtitle">Natural Partners</div><br>
            <div class="desc">
                <?php echo wpautop( carbon_get_post_meta($post->ID, 'section_2_content') ); ?>
            </div>
            <br>
            <a href="<?php echo carbon_get_the_post_meta('section_2_link'); ?>" class="btn-default-dark">
                READ MORE
            </a>
        </div>
    </section>
    <section id="section-cooperation">
        <div class="section-wrapper content-euworldwide">
            <div class="uk-grid-collapse uk-child-width-expand@s" uk-grid>
                <div style="position: relative;">
                    <?php echo wp_get_attachment_image( carbon_get_post_meta($post->ID, 'section_3_image'), 'full' ); ?>
                    <img class="uk-position-bottom-right img-sustain" src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_sustainable.svg">
                </div>
                <div><?php echo wpautop( carbon_get_post_meta($post->ID, 'section_3_content') ); ?></div>

            </div>
        </div>
    </section>
    <section id="section-bilateral">
        <div class="section-wrapper">
             <div class="uk-grid-collapse uk-child-width-expand@s" uk-grid>
                 <div>
                     <div class="desc desc-right">
                        <h2>BILATERAL<br>COOPERATION</h2>
                        <div class="subtitle">Strengthening EU-ASEAN development cooperation through close partnership with ASEAN Member States.</div>
                        <div class="for-desktop">
                            <br><br>
                            <a href='<?php echo carbon_get_the_post_meta('section_4_link'); ?>' class="btn-default">READ MORE</a>
                        </div>
                    </div>
                 </div>
                 <div class="flags">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_book_flag_brunei.png">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_book_flag_cambodia.png">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_book_flag_indonesia.png">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_book_flag_laos.png">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_book_flag_malaysia.png">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_book_flag_myanmar.png">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_book_flag_philiphines.png">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_book_flag_singapore.png">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_book_flag_thailand.png">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_book_flag_vietnam.png">
                    <div class="for-mobile">
                        <br><br>
                        <a href='<?php echo carbon_get_the_post_meta('section_4_link'); ?>' class="btn-default">READ MORE</a>
                        <br>
                        <br>
                    </div>
                 </div>

            </div>
        </div>
    </section>
<?php get_footer('main');
