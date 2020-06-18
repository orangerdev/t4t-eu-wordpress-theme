<?php
global $post;

$flag            = carbon_get_the_post_meta('flag');
$sub_title       = carbon_get_the_post_meta('sub_title');
$caption         = wpautop(carbon_get_the_post_meta('image_caption'));
$quote           = wpautop(carbon_get_the_post_meta('image_quote'));
$author_name     = carbon_get_the_post_meta('quote_author');
$author_position = carbon_get_the_post_meta('author_position');
$tags            = get_the_terms($post, 'success-tag');
$labels          = get_the_terms($post, 'success-label');
?>
<article <?php post_class('section-wrapper general-page success-story'); ?>>

    <section class='heading' role="heading">
        <h2><?php the_title(); ?></h2>
        <h3><?php echo $sub_title; ?></h3>
        <?php if($labels): ?>
        <div class="labels">
            <?php foreach($labels as $label) : ?>
            <span class='label'><?php echo $label->name; ?><b></b></span>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <?php if($flag) : ?>
        <figure>
            <img src="<?php echo wp_get_attachment_url($flag); ?>" alt="">
        </figure>
        <?php endif;  ?>
    </section>

    <div class="content-holder">
        <div class="left-content">
            <div class="the-content">
                <?php the_content(); ?>
            </div>
            <?php if($tags): ?>
            <div class="post-tags">
            <?php
                foreach($tags as $tag) :
                    $image = carbon_get_term_meta($tag->term_id, 'logo');
                    if($image) :
                    ?><img src="<?php echo wp_get_attachment_url($image); ?>" alt=""><?php
                    endif;
                endforeach;
            ?>
            </div>
            <?php endif; ?>
        </div>
        <div class="right-content">

            <?php if(has_post_thumbnail()) : ?>
            <div class="featured-image">
                <figure>
                    <?php the_post_thumbnail('full'); ?>
                </figure>
                <figcaption><?php echo $caption; ?></figcaption>
            </div>
            <?php endif; ?>

            <div class="quote-holder">
                <div class="quote-content">
                    <?php echo $quote; ?>
                </div>
                <h4><?php echo $author_name; ?></h4>
                <h5><?php echo $author_position; ?></h5>
            </div>
        </div>
    </div>


</article>
