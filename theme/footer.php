<footer class="ccc26_global-footer ccc26_background-deep-blue">
    <div class="ccc26_wrap">
        <div class="ccc26_global-footer-top">
            <div class="ccc26_global-footer-column">
                <nav>
                    <h2>Helpful Links for Visitors</h2>
                    <ul><?php wp_nav_menu( array('container' => false, 'theme_location' => 'footer_menu_one' )); ?></ul>
                </nav>
            </div>
            <div class="ccc26_global-footer-column">
                <nav>
                    <h2>Helpful Links for Business</h2>
                    <ul><?php wp_nav_menu( array('container' => false, 'theme_location' => 'footer_menu_two' )); ?></ul>
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