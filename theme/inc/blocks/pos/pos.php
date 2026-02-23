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

    // Variables
    $b1TitleOne = get_field('b1_title_part_one');
    $b1TitleTwo = get_field('b1_title_part_two');
    $b1Content = get_field('b1_content');
    $b1SocialLabel = get_field('b1_social_handle_label');
    $b1SocialLink = get_field('b1_social_handle_link');

    $b2TitleOne = get_field('b2_title_part_one');
    $b2TitleTwo = get_field('b2_title_part_two');
    $b2Content = get_field('b2_content');
    $b2Form = get_field('form_code');

?>

<section 
    id="<?php echo esc_attr($id); ?>" 
    class="<?php echo esc_attr($className); ?> ccc26_pos"     
>
   <div class="ccc26_wrap ccc26_pos-columns">
        <div class="ccc26_pos-column ccc26_background-pink">
            <div class="ccc26_pos-column-wrap">
                <h2>
                    <?php if( $b1TitleOne): ?>
                        <span><?php echo $b1TitleOne; ?></span><br />
                    <?php endif; ?>
                    <?php if( $b1TitleTwo ): ?>
                        <em><?php echo $b1TitleTwo; ?></em>
                    <?php endif; ?>
                </h2>
            </div>
            <div class="ccc26_pos-column-content">
                <?php echo $b1Content; ?>
                <p><a href="<?php echo $b1SocialLink; ?>" target="_blank" rel="noopener noreferrer"><?php echo $b1SocialLabel; ?></a></p>
            </div>
            <?php if(get_field('add_social_media')): ?>
                <?php get_template_part( 'inc/social', 'list' ); ?>
            <?php endif; ?>
        </div>
        <div class="ccc26_pos-column ccc26_background-deep-blue">
            <div class="ccc26_pos-column-wrap">
                <h2>
                    <?php if($b2TitleOne): ?>
                        <span><?php echo $b2TitleOne; ?></span><br />
                    <?php endif; ?>
                    <?php if($b2TitleTwo): ?>
                        <em><?php echo $b2TitleTwo; ?></em>
                    <?php endif; ?>
                </h2>
            </div>
            <div class="ccc26_pos-column-content">
                <?php echo $b2Content; ?>

                <?php if($b2Form): ?>
                    <div class="ccc26_pos-form">
                        <?php echo $b2Form; ?>
                    </div>
                <?php endif; ?>
            </div>
            
        </div>
    </div>
</section>