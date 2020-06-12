<?php

if(has_post_thumbnail()) :

    $caption = carbon_get_the_post_meta('featured_image_caption');
?>
<section class='post-cover-image' role='banner'>
    <figure>
        <?php the_post_thumbnail('full'); ?>
    </figure>
    <?php if(!empty($caption)) : ?>
    <div class="caption-holder" role="definition">
        <div class="caption">
            <?php echo wpautop($caption); ?>
        </div>
    </div>
    <?php endif; ?>
</section>
<?php
endif;
