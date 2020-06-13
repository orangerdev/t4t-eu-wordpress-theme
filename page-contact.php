<?php
/**
 * Template Name: Contact
 */
global $post;

get_header('main');

if(have_posts()) :

    while(have_posts()) :

        the_post();

        get_template_part('template-parts/thumbnail');

        get_template_part('template-parts/breadcrumbs');

        $contact_content = carbon_get_the_post_meta('contact_content');

        foreach($contact_content as $content) :
        ?>
        <div class='section-wrapper general-page contact-content'>
            <section class='contact-heading' role="heading">
                <h2><?php echo $content['main_title']; ?></h2>
                <h4><?php echo $content['sub_title']; ?></h4>
            </section>
            <section class='contact-list' role="list">
            <?php foreach($content['contact'] as $contact) : ?>
                <div class="contact-detail">
                    <figure>
                        <img src="<?php echo $contact['flag']; ?>" alt="">
                    </figure>
                    <div class="detail">
                        <h5><?php echo $contact['country']; ?></h5>
                        <?php echo wpautop($contact['address']); ?>
                        <span class='info phone'>
                            <span class='prefix'>T</span>
                            <span class='value'><?php echo $contact['phone']; ?></span>
                        </span>
                        <span class='info fax'>
                            <span class='prefix'>F</span>
                            <span class='value'><?php echo $contact['fax']; ?></span>
                        </span>
                        <span class='info email'>
                            <span class='prefix'>E</span>
                            <span class='value'><?php echo $contact['email']; ?></span>
                        </span>
                    </div>
                </div>
            <?php endforeach; ?>
            </section>
        </div>
        <?php
        endforeach;

    endwhile;

endif;

get_footer('main');
