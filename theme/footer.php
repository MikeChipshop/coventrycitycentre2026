<footer class="ccc26_global-footer ccc26_background-deep-blue">
    <div class="ccc26_wrap">
        <div class="ccc26_global-footer-top">
            <div class="ccc26_global-footer-column">
                <nav>
                    <ul><?php wp_nav_menu( array('container' => false, 'theme_location' => 'footer_menu' )); ?></ul>
                </nav>
            </div>
            <div class="ccc26_global-footer-column logo">
                <?php if( have_rows('footer_logos','option') ): ?>
                    <?php while( have_rows('footer_logos','option') ) : the_row(); ?>
                        <?php
                            $attachment_id = get_sub_field('footer_logos_image');
                            $size = "full";
                            $image = wp_get_attachment_image_src( $attachment_id, $size ); 

                            $link = get_sub_field('footer_logos_link');
                            $target = get_sub_field('footer_logos_link_target');
                        ?>
                        <a href="<?php echo $link; ?>"<?php if( $target ): ?> target="_blank"<?php endif; ?>>
                            <img src="<?php echo $image[0]; ?>" alt="">
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="ccc26_global-footer-bottom">
            <p>Site content copyright &copy;<?php echo date("Y"); ?></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>        
</body>
</html>