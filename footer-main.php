<div style="padding: 20px;">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_batik_separator.png" width="100%">
</div>
<footer>
    <div class="footer-nav">
        <div class="section-wrapper">
            <div class="uk-grid-collapse uk-child-width-expand@s" uk-grid>
                <?php dynamic_sidebar( 'footer-sidebar-t4t' ); ?>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        © 2020 The European Union Mission to ASEAN. All rights reserved.
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
