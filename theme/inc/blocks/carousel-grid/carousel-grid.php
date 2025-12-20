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
    $block_title = get_field('block_title');
    $block_intro = get_field('block_intro');
    $carousel_posts = get_field('post_items');
?>

<section 
    id="<?php echo esc_attr($id); ?>" 
    class="<?php echo esc_attr($className); ?> ccc26_carousel-grid ccc26_background-yellow"     
>
    <div class="ccc26_wrap">
        <header>
            <?php if($block_title): ?>
                <h2><?php echo $block_title; ?></h2>
            <?php endif; ?>
            <?php if($block_intro): ?>
                <div class="ccc26_carousel-grid-intro">
                    <?php echo $block_intro; ?>
                </div>
            <?php endif; ?>
        </header>
        <?php if( $carousel_posts ): ?>
        <div class="ccc26_carousel-grid-items">
                <ul>
                    <?php foreach( $carousel_posts as $post ): setup_postdata($post); ?>
                        <li>
                            
                                <figure>
                                    <a href="<?php echo get_permalink($post->ID); ?>">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/carousel-1.jpg" alt="Sample Image">
        </a>
                                    <button class="ccc26_favourite-button ccc26_toggle-favourite" data-id="<?php echo $post->ID; ?>"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                                </figure>
                                <h3><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></h3>
                                <p><a href="<?php echo get_permalink($post->ID); ?>">Find out more ></a></p>
                            </a>
                        </li>
                    <?php endforeach; wp_reset_postdata(); ?>
                    <!-- 
                    <li>
                        <a href="#">
                            <figure>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/carousel-2.jpg" alt="Sample Image">
                                <button class="ccc26_favourite-button"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                            </figure>
                            <h3>The Wave Water Park</h3>
                            <p>Find out more ></p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <figure>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/carousel-3.jpg" alt="Sample Image">
                                <button class="ccc26_favourite-button"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                            </figure>
                            <h3>The CBS Arena</h3>
                            <p>Find out more ></p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <figure>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/carousel-4.jpg" alt="Sample Image">
                                <button class="ccc26_favourite-button"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                            </figure>
                            <h3>The HMV Empire</h3>
                            <p>Find out more ></p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <figure>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/carousel-5.jpg" alt="Sample Image">
                                <button class="ccc26_favourite-button"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                            </figure>
                            <h3>The Belgrave Theatre</h3>
                            <p>Find out more ></p>
                        </a>
                    </li> -->
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>