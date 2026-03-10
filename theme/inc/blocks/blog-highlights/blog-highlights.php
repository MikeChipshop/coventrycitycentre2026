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

    $contactIntro = get_field('contact_intro');
?>

<section 
    id="<?php echo esc_attr($id); ?>" 
    class="<?php echo esc_attr($className); ?> ccc26_blog-highlights"     
>
    <div class="ccc26_wrap">
        <?php $featured_posts = get_field('blog_items'); ?>
        <?php if( $featured_posts ): ?>
            <?php foreach( $featured_posts as $post ): setup_postdata($post); ?>
                <div class="ccc26_blog-highlights-item">
                    <figure>
                        <a href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail($post->ID)):
                                echo get_the_post_thumbnail($post->ID, 'medium_large');
                            else: ?>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder.png" alt="<?php echo get_the_title($post->ID); ?> thumbnail">
                            <?php endif; ?>
                        </a>                        
                    </figure>
                    <h2><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></h2>
                    <div><a href="<?php echo get_permalink($post->ID); ?>" title="<?php echo get_the_title($post->ID); ?>">Read more ></a></div>        
                </div>
            <?php endforeach; ?>
        <?php wp_reset_postdata(); endif; ?>
    </div>
</section>