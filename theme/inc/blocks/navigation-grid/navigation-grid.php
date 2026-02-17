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

    $image = get_field('main_image');
    $imageTitle = get_field('main_image_title');
    $imageLink = get_field('main_image_link');
    $Title = get_field('main_title');
    $content = get_field('main_content');

    $attachment_id = get_field('main_image');
    $size = "full";
    $image = wp_get_attachment_image_src( $attachment_id, $size ); 

?>

<section 
    id="<?php echo esc_attr($id); ?>" 
    class="<?php echo esc_attr($className); ?> ccc26_navigation-grid"     
>
   <div class="ccc26_wrap">
        <div class="ccc26_navigation-grid-column">
            <figure>
                <img src="<?php echo $image[0]; ?>" alt="<?php echo $imageTitle; ?>">
                <?php if($imageTitle): ?><h3><?php echo $imageTitle; ?></h3><?php endif; ?>
            </figure>
            <div class="ccc26_navigation-grid-content">
                <?php if($Title): ?><h2><?php echo $Title; ?></h2><?php endif; ?>
                <?php if($content): ?><p><?php echo $content; ?></p><?php endif; ?>
            </div>
        </div>
        <div class="ccc26_navigation-grid-column">
            <?php if( have_rows('grid_items') ): ?>
                <nav>
                    <ul>
                        <?php while( have_rows('grid_items') ) : the_row(); ?>
                            <?php
                                $gridTitle = get_sub_field('grid_items_image_title');
                                $gridLink = get_sub_field('grid_items_link');

                                $attachment_id = get_sub_field('grid_items_image');
                                $size = "full";
                                $image = wp_get_attachment_image_src( $attachment_id, $size ); 
                            ?>
                            <li>
                                <a href="<?php echo $gridLink; ?>">
                                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $gridTitle; ?>">
                                    <?php if($gridTitle): ?><h3><?php echo $gridTitle; ?></h3><?php endif; ?>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </nav>
            <?php endif; ?>
        </div>
    </div>
</section>