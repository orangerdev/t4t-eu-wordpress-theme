<?php
/**
 * Template Name: Success Stories
 */
global $post;

get_header('main');

$cats           = array();
$categories_set = carbon_get_the_post_meta('success_categories');

foreach($categories_set as $set) :
    $cats[] = $set['id'];
endforeach;

$query = new WP_Query(array(
    'post_type'      => 'success-stories',
    'posts_per_page' => -1,
    'tax_query'      => array(
        array(
            'taxonomy' => 'success-category',
            'field'    => 'term_id',
            'terms'    => $cats
        )
    )
));

get_template_part('template-parts/breadcrumbs');

?><div class="success-stories-holder"><?php

if($query->have_posts()) :

    while($query->have_posts()) :

        $query->the_post();

        get_template_part('template-parts/single', 'success-story');

    endwhile;

endif;

?>
</div><!-- class.success-stories-holder -->
<div class="button-holder">
 <a href="#" onclick="window.history.back();" class="back button">Back</a>
</div>
<?php

wp_reset_query();

get_footer('main');
