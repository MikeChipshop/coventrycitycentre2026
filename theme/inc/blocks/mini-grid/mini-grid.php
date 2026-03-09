<?php
    $id = 'ccc26_block-' . $block['id'];
    if( !empty($block['anchor']) ):
        $id = $block['anchor'];
    endif;
    $className = 'ccc26_block';
    if( !empty($block['className']) ):
        $className .= ' ' . $block['className'];
    endif;
    if( !empty($block['align']) ):
        $className .= ' align' . $block['align'];
    endif;

    $gridTitle = get_field('grid_title');
    $gridIntro = get_field('grid_intro');
?>

<section 
    id="<?php echo esc_attr($id); ?>" 
    class="<?php echo esc_attr($className); ?> ccc26_mini-grid <?php echo get_field('content_grid'); ?>"     
>
    <div class="ccc26_wrap">
        <?php if($gridTitle || $gridIntro): ?>
            <header class="ccc26_mini-grid-header">
                <?php if($gridTitle): ?>
                    <h2><?php echo $gridTitle; ?></h2>
                <?php endif; ?>
                <?php if($gridIntro): ?>
                    <div class="ccc26_mini-grid-intro">
                        <p><?php echo $gridIntro; ?></p>
                    </div>
                <?php endif; ?>
            </header>
        <?php endif; ?>
        <nav>
            <ul>
                <?php 
                    if(get_field('content_grid') === 'default' || get_field('content_grid') === 'currentcat' || get_field('content_grid') === 'pages'):
                ?>
                    <?php 
                        if (get_field('content_grid') === 'currentcat'):
                            $terms = get_the_terms( get_the_ID(), 'section' );
                            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                                $first_term = $terms[0];
                                $directoryTerm = esc_html( $first_term->slug );
                            }
                            $postTypeSelected = 'directory';
                        elseif (get_field('content_grid') === 'pages'): 
                            $postTypeSelected = 'page';
                        else:
                            $postTypeSelected = 'directory';
                        endif; 
                    
                        $args = array(
                            'post_type' => $postTypeSelected,
                            'posts_per_page' => 10,
                            'orderby' => 'rand',
                            'tax_query' => array(
                            array (
                                    'taxonomy' => 'section',
                                    'field' => 'slug',
                                    'terms' => $directoryTerm,
                                )
                            ),
                        );
                    ?>     
                    <?php $query = new WP_Query( $args ); if ( $query->have_posts() ) : ?>
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
                                <?php if($gridTitle): ?>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php else: ?>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <?php endif; ?>
                                <div><a href="<?php the_permalink(); ?>">Find out more ></a></div>                    
                            </li>
                        <?php endwhile; ?>
                    <?php endif; wp_reset_query(); ?>
                <?php elseif(get_field('content_grid') === 'sections'): ?>
                    <?php 
                        $sectionTerm = get_field('section_term');
                        $args = array(
                            'post_type' => 'directory',
                            'posts_per_page' => -1,
                            'orderby' => 'rand',
                            'tax_query' => array(
                                array (
                                    'taxonomy' => 'section',
                                    'field' => 'slug',
                                    'terms' => $sectionTerm,
                                )
                            ),
                        );
                    ?>   
                    <?php $query = new WP_Query( $args ); if ( $query->have_posts() ) : ?>
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
                                <?php if($gridTitle): ?>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <?php else: ?>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <?php endif; ?>
                                <div><a href="<?php the_permalink(); ?>">Find out more ></a></div>                    
                            </li>
                        <?php endwhile; ?>
                    <?php endif; wp_reset_query(); ?>
                <?php else: ?>
                    <?php if( have_rows('custom_grid_items') ): ?>
                        <?php while( have_rows('custom_grid_items') ) : the_row(); ?>
                            <?php 
                                $itemTitle = get_sub_field('title');
                                $itemLink = get_sub_field('link');
                                $itemExcerpt = get_sub_field('excerpt');
                                $itemTab = get_sub_field('open_in_new_tab');

                                $attachment_id = get_sub_field('image');
                                $size = "full";
                                $image = wp_get_attachment_image_src( $attachment_id, $size ); 
                            ?>
                            <li>                    
                                <figure>
                                    <a href="<?php echo $itemLink; ?>" title="<?php echo $itemTitle; ?>" <?php if($itemTab): ?>target="_blank"<?php endif; ?>>
                                        <?php if($attachment_id): ?>
                                            <img src="<?php echo $image[0]; ?>" alt="<?php echo $itemTitle; ?>">
                                        <?php else: ?>
                                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder.png" alt="<?php echo get_the_title($post->ID); ?> thumbnail">
                                        <?php endif; ?>
                                    </a>
                                </figure>
                                <?php if($gridTitle): ?>
                                    <h3><a href="<?php echo $itemLink; ?>" <?php if($itemTab): ?>target="_blank"<?php endif; ?>><?php echo $itemTitle; ?></a></h3>
                                <?php else: ?>
                                    <h2><a href="<?php echo $itemLink; ?>" <?php if($itemTab): ?>target="_blank"<?php endif; ?>><?php echo $itemTitle; ?></a></h2>    
                                <?php endif; ?>
                                <?php if($itemExcerpt): ?>
                                    <div class="ccc26_mini-grid-excerpt"><?php echo $itemExcerpt; ?></div>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>                    
                    <?php endif; ?>        
                <?php endif; ?>
            </ul>
        </nav>
    </div>    
</section>