<?php
/**
 * Template Name: ForeWord
 */
global $post;
get_header('main');

get_template_part('template-parts/breadcrumbs');

$forewords = carbon_get_the_post_meta('foreword_content');
$i = 0;
foreach($forewords as $foreword) :

    if(0 < $i) :
    ?>
    <div class="foreword-separator"></div><!-- SEPARATOR -->
    <?php
    endif;
?>

<div class="section-wrapper general-page foreword-page">

    <div class="foreword-holder">
        <div uk-grid class='foreword-author'>
            <div class="uk-width-expand@m author-description">
                <div class="holder">
                    <h2><?php echo $foreword['main_title']; ?></h2>
                    <h4><?php echo $foreword['sub_title']; ?></h4>
                </div>
            </div>
            <div class="uk-width-1-3@m author-photo">
                <figure>
                    <?php echo wp_get_attachment_image( $foreword['img'], 'full' ); ?>
                </figure>
            </div>
        </div>
        <div class="foreword-content">
            <?php echo wpautop($foreword['content']); ?>
        </div>
        <div class="foreword-sign">
            <h5><?php echo $foreword['name']; ?></h5>
            <h6><?php echo $foreword['position']; ?></h6>
        </div>
    </div>
</div>

<?php
    $i++;
endforeach;
get_footer('main');
