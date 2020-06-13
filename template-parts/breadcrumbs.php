<?php
    $class = has_post_thumbnail() ? '' : 'no-cover-image';
?>
<div class="section-wrapper general-page the-breadcrumbs <?php echo $class; ?>">
    <?php t4teu_breadcrumbs(); ?>
</div>
