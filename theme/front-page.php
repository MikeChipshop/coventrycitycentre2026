<?php get_header(); ?>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>    
            <main class="ccc26_page-content">
                <section class="ccc26_pos">
                    <div class="ccc26_wrap ccc26_pos-columns">
                        <div class="ccc26_pos-column ccc26_background-deep-blue">
                            <div class="ccc26_pos-column-wrap">
                                <h2><span>Follow Us</span> on Socials</h2>
                            </div>
                            <div class="ccc26_pos-column-content">
                               
                            </div>
                        </div>
                        <div class="ccc26_pos-column ccc26_background-pink">
                            <div class="ccc26_pos-column-wrap">
                                <h2><span>Follow Us</span> on Socials</h2>
                            </div>
                            <div class="ccc26_pos-column-content">
                               
                            </div>
                        </div>
                    </div>
                </section>
                <?php the_content(); ?> 
            </main>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>