<?php get_header(); ?>
<main class="ccc26_page-content">
    <?php if ( have_posts() ) : ?>        
        <ul>
            <?php while ( have_posts() ) : the_post(); ?>               
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>                    
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>