<footer class="ccc26_global-footer ccc26_background-deep-blue">
    <div class="ccc26_wrap">
        <div class="ccc26_global-footer-top">
            <div class="ccc26_global-footer-column">
                <nav>
                    <ul><?php wp_nav_menu( array('container' => false, 'theme_location' => 'footer_menu' )); ?></ul>
                </nav>
            </div>
            <div class="ccc26_global-footer-column logo">
                <a href="https://coventrybid.co.uk" target="_blank">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/coventrybid-logo.png" alt="Visit Coventry BID">
                </a>
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