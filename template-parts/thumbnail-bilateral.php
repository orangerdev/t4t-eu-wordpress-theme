<?php

if(has_post_thumbnail()) :

    $main_title = carbon_get_the_post_meta('page_main_title');
    $sub_title  = carbon_get_the_post_meta('featured_image_caption');
    $flags      = array(
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
    );
    $nation =  carbon_get_the_post_meta('bilateral_nation');
?>
<section class='bilateral post-cover-image' role='banner'>
    <figure>
        <?php the_post_thumbnail('full'); ?>
    </figure>
    <div class="caption-holder" role="definition">
        <div class="caption">
            <div class="flags">
                <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_book_flag_eu.png" alt=""></span>
                <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_book_flag_asean.png" alt=""></span>
            </div>
            <h3><?php echo $main_title; ?></h3>
            <?php echo wpautop($sub_title); ?>
        </div>
    </div>
</section>
<section class='bilateral asean-nation-flags' role="banner">
    <div class="holder">
    <?php
    foreach($flags as $flag => $title) :
        $state = ($nation === $flag) ? 'active' : '';
        $link  = carbon_get_the_post_meta( $flag . '_link');
    ?>
        <div class="flag <?php echo $state; ?>">
            <a href='<?php echo $link; ?>'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_book_flag_<?php echo $flag; ?>.png" alt="" >
            </a>
        </div>
    <?php endforeach; ?>
    </div>
</section>
<?php
endif;
