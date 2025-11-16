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
    class="<?php echo esc_attr($className); ?> ccc26_pos"     
>
   <div class="ccc26_wrap ccc26_pos-columns">
        <div class="ccc26_pos-column ccc26_background-deep-blue">
            <div class="ccc26_pos-column-wrap">
                <h2><span>Follow Us</span><br /> on <em>Socials</em></h2>
            </div>
            <div class="ccc26_pos-column-content">
                <p>Sed a elementum nulla, non suscipit arcu. Nulla erat diam, vestibulum eget ex quis, convallis molestie mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                <p><a href="#">@CoventryCity</a></p>
            </div>
            <?php get_template_part( 'inc/social', 'list' ); ?>
        </div>
        <div class="ccc26_pos-column ccc26_background-pink">
            <div class="ccc26_pos-column-wrap">
                <h2><span>Sign Up</span><br /> for <em>Updates</em></h2>
            </div>
            <div class="ccc26_pos-column-content">
                <p>Sed a elementum nulla, non suscipit arcu. Nulla erat diam, vestibulum eget ex quis, convallis molestie mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            
            </div>
            
        </div>
    </div>
</section>