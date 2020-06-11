<?php

if(has_post_thumbnail()) :
?>
<section class='post-cover-image' role='banner'>
    <figure>
        <?php the_post_thumbnail('full'); ?>
    </figure>
</section>
<?php
endif;
