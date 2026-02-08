<?php
    // Create id attribute allowing for custom "anchor" value.
    $id = 'ccc26_block-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }

    // Create class attribute allowing for custom "className" and "align" values.
    $className = 'ccc26_block';
    if( !empty($block['className']) ) {
        $className .= ' ' . $block['className'];
    }
    if( !empty($block['align']) ) {
        $className .= ' align' . $block['align'];
    }
?>

<section 
    id="<?php echo esc_attr($id); ?>" 
    class="<?php echo esc_attr($className); ?> ccc26_mini-grid"     
>
    <?php
        $args = array(
            'post_type' => 'directory',
            'posts_per_page' => 10,
            'orderby' => 'rand',
        );

        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
    ?>
        <div class="ccc26_wrap">
            <nav>
                <ul>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
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
            </nav>
        </div>
    <?php endif; ?>
</section>