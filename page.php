<?php
global $post;

get_header('main');

if(have_posts()) :

    while(have_posts()) :

        the_post();

        get_template_part('template-parts/thumbnail');

        get_template_part('template-parts/breadcrumbs');

        get_template_part('template-parts/single', 'page');

    endwhile;

endif;

get_footer('main');
