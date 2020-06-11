<?php
global $post;

get_header('main');

if(have_posts()) :

    while(have_posts()) :

        the_post();

        get_template_part('template-parts/thumbnail');

        get_template_part('template-parts/breadcrumbs');

        ?>
        <article <?php post_class('section-wrapper general-page article-holder'); ?>>

            <?php get_template_part('template-parts/title'); ?>

            <div class="the-content">
                <?php the_content(); ?>
            </div>

        </article>
        <?php

    endwhile;

endif;

get_footer('main');
