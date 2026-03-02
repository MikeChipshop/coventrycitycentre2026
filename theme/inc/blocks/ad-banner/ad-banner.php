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

    $adBannerImage = get_field('ad_image');
    $adBannerLink = get_field('ad_link');
    $adBannerTitle = get_field('ad_title');

?>

<section 
    id="<?php echo esc_attr($id); ?>" 
    class="<?php echo esc_attr($className); ?> ccc26_ad-banner"     
>   
    <div class="ccc26_ad-banner-wrap">
        <a href="<?php echo $adBannerLink; ?>" target="_blank" title="<?php echo $adBannerTitle; ?>">
            <?php
                $attachment_id = $adBannerImage;
                $size = "ad-banner";
                $image = wp_get_attachment_image_src( $attachment_id, $size );
            ?>
            <img src="<?php echo $image[0]; ?>" alt="<?php echo $adBannerTitle; ?>">
        </a>
    </div>

</section>