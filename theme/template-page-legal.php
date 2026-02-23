<?php
/**
* Template Name: Legal
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>
<?php get_header(); ?>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>    
            <main class="ccc26_page-content legal">
                <?php the_content(); ?> 
            </main>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>