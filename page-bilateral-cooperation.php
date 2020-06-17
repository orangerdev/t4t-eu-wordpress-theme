<?php
/**
 * Template Name: Bilateral Cooperation
 */
global $post;

get_header('main');

if(have_posts()) :

    while(have_posts()) :

        the_post();

        get_template_part('template-parts/thumbnail', 'bilateral');

        get_template_part('template-parts/breadcrumbs');
        ?>
        <article <?php post_class('section-wrapper general-page article-holder bilateral'); ?>>

            <section role="heading" class='article-heading'>
                <h1><?php the_title(); ?></h1>
            </section>

            <div class="the-content">
                <?php the_content(); ?>
            </div>

        </article>
        <?php

    endwhile;

endif;

get_footer('main');
