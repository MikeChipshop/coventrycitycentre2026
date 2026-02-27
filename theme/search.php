<?php get_header(); ?>
<main class="ccc26_page-content">
    <?php if ( have_posts() ) : ?>  
        <div class="ccc26_mini-grid"> 
            <div class="ccc26_wrap">    
                <ul>
                    <?php while ( have_posts() ) : the_post(); ?>               
                        <li>                    
                            <figure>
                                <a href="<?php the_permalink(); ?>">
                                    <?php if(has_post_thumbnail($post->ID)):
                                        echo get_the_post_thumbnail($post->ID, 'medium_large');
                                    else: ?>
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder.png" alt="<?php echo get_the_title($post->ID); ?> thumbnail">
                                    <?php endif; ?>
                                </a>
                                <button class="ccc26_favourite-button ccc26_toggle-favourite" data-id="<?php echo get_the_ID(); ?>"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                            </figure>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div><a href="<?php the_permalink(); ?>">Find out more ></a></div>                    
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div> 
        </div>
    <?php else: ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>