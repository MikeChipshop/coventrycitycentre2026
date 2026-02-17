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
    class="<?php echo esc_attr($className); ?> ccc26_video-banner"     
>
    <div class="ccc26_wrap">
        <?php if( get_field('video_type') === 'yt') : ?>
            <?php $youTubeURL = get_field('youtube_url'); ?>
            <div class="ccc26_video-embed">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $youTubeURL; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        <?php else: ?>
            <video autoplay muted loop>
                <source src="<?php the_field('video_url'); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        <?php endif; ?>
    </div>
</section>