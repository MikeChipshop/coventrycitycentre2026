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
    $contactAddress = get_field('contact_address');
    $contactEmail = get_field('contact_email');
    $contactTelephone = get_field('contact_telephone');
    $contactForm = get_field('contact_form_shortcode');

    $attachment_id = get_field('feature_image');
    $size = "full";
    $image = wp_get_attachment_image_src( $attachment_id, $size );
    $imageAlign = get_field('image_align');
?>

<section 
    id="<?php echo esc_attr($id); ?>" 
    class="<?php echo esc_attr($className); ?> ccc26_contact"     
>
    <div class="ccc26_wrap">
        <div class="ccc26_contact-column content">
            <?php if($imageAlign === 'top' && get_field('feature_image')): ?>
                <div class="ccc26_contact-image top">
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo get_post_meta($attachment_id, '_wp_attachment_image_alt', true); ?>">
                </div>
            <?php endif; ?>
            <?php if($contactIntro): ?>
                <div class="ccc26_contact-intro">
                    <?php echo $contactIntro; ?>
                </div>
            <?php endif; ?>
            <?php if($contactAddress): ?>
                <div class="ccc26_contact-address">
                    <?php echo $contactAddress; ?>
                </div>
            <?php endif; ?>
            <div class="ccc26_contact-details">
                <ul>
                    <?php if($contactEmail): ?>
                        <li><a href="mailto:<?php echo $contactEmail; ?>" target="_blank"><?php echo $contactEmail; ?></a></li>
                    <?php endif; ?>
                    <?php if($contactTelephone): ?>
                        <li><a href="tel:<?php echo $contactTelephone; ?>" target="_blank"><?php echo $contactTelephone; ?></a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <?php if($imageAlign === 'bottom' && get_field('feature_image')): ?>
                <div class="ccc26_contact-image bottom">
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo get_post_meta($attachment_id, '_wp_attachment_image_alt', true); ?>">
                </div>
            <?php endif; ?>
        </div>
        <div class="ccc26_contact-column form">
            <?php if($contactForm): ?>
                <?php echo do_shortcode($contactForm); ?>
            <?php endif; ?>
        </div>
    </div>
</section>