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
    class="<?php echo esc_attr($className); ?> ccc26_image-grid"     
>
    <div class="ccc26_wrap">
        <?php if( have_rows('global_image_grid','option') ): ?>
            <ul>
                <?php while( have_rows('global_image_grid','option') ) : the_row(); ?>
                    <li>                        
                        <?php
                            $attachment_id = get_sub_field('image');
                            $size = "full";
                            $image = wp_get_attachment_image_src( $attachment_id, $size ); 

                            $link = get_sub_field('link');
                            $label = get_sub_field('label');
                        ?>
                        <?php if($link): ?>
                            <a href="<?php echo $link; ?>" title="<?php echo $label; ?>"> 
                        <?php else: ?>
                            <div>
                        <?php endif; ?>
                            <figure>
                                <img src="<?php echo $image[0]; ?>" alt="<?php echo $label; ?>">
                            </figure>
                        <?php if($link): ?>
                            </a>
                        <?php else: ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>