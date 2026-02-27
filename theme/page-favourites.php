<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>   
        <main class="ccc26_page-content">
            <section class="ccc26_mini-grid">
                <div class="ccc26_wrap">
                    <nav id="fav-items"></nav>
                </div>
            </section>
            <?php the_content(); ?>
        </main>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>