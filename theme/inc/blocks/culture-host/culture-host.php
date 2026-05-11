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

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> ccc26_block ccc26_block-culture-host">
    <div class="ccc26_wrap">
        <?php if(get_field('page_type') === 'panel'): ?>
            <?php 
                $widget = get_field('widget_code');
                echo $widget;
            ?>
        <?php else: ?>
            <iframe style="border:0;height:1000px;width:100%;" id="ch-partner-frame" frameborder="0" src="https://culturehosts.coventrybid.co.uk?partner_id=coventrybid"></iframe>
            <script src="https://culturehosts.coventrybid.co.uk/js/partnersite.js?partner_id=coventrybid"></script>
        <?php endif; ?>
    </div>
</section>