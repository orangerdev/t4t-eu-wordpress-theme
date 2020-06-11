<?php
$main_title = carbon_get_the_post_meta('page_main_title');
$sub_title  = carbon_get_the_post_meta('page_sub_title');
$main_title = (empty($main_title)) ? get_the_title() : $main_title;
?>
<section role="heading" class='article-heading'>
    <h1><?php echo $main_title; ?></h1>
    <h2><?php echo $sub_title; ?></h2>
</section>
