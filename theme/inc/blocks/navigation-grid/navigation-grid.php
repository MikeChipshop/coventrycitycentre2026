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

    $imageSecondary = get_field('secondary_image');
    $imageTitleSecondary = get_field('secondary_image_title');
    $imageLinkSecondary = get_field('secondary_image_link');

    $Title = get_field('main_title');
    $content = get_field('main_content');

    $attachment_id = get_field('main_image');
    $size = "full";
    $image = wp_get_attachment_image_src( $attachment_id, $size ); 

    $attachment_id_2 = get_field('secondary_image');
    $size_2 = "full";
    $image_2 = wp_get_attachment_image_src( $attachment_id_2, $size_2 ); 

?>

<section 
    id="<?php echo esc_attr($id); ?>" 
    class="<?php echo esc_attr($className); ?> ccc26_navigation-grid"     
>
   <div class="ccc26_wrap">
        <div class="ccc26_navigation-grid-column">
            <figure>
                <?php if($imageLink): ?>
                    <a href="<?php echo $imageLink; ?>" title="<?php echo $imageTitle; ?>">
                <?php endif; ?>
                <img src="<?php echo $image[0]; ?>" alt="<?php echo $imageTitle; ?>">
                <?php if($imageTitle): ?><h3><?php echo $imageTitle; ?></h3><?php endif; ?>
                <?php if($imageLink): ?>
                    </a>    
                <?php endif; ?>
            </figure>
            <?php if($imageSecondary): ?>
                <figure>
                    <?php if($imageLinkSecondary): ?>
                        <a href="<?php echo $imageLinkSecondary; ?>" title="<?php echo $imageTitleSecondary; ?>">
                    <?php endif; ?>
                    <img src="<?php echo $image_2[0]; ?>" alt="<?php echo $imageTitleSecondary; ?>">
                    <?php if($imageTitleSecondary): ?><h3><?php echo $imageTitleSecondary; ?></h3><?php endif; ?>
                    <?php if($imageLinkSecondary): ?>
                        </a>    
                    <?php endif; ?>
                </figure>
            <?php endif; ?>
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