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
    class="<?php echo esc_attr($className); ?> ccc26_information"     
>
    <div class="ccc26_wrap">        
        <div class="ccc26_information-top">
            <div class="ccc26_information-column">
                <div class="ccc26_information-map">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/map.jpg" alt="Map">
                </div>
            </div>
            <div class="ccc26_information-column">
                <h2>Test title</h2>
                <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></p>
                <p>Sed a elementum nulla, non suscipit arcu. Nulla erat diam, vestibulum eget ex quis, convallis molestie mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In et purus in nulla faucibus rutrum. Mauris metus sem, finibus id accumsan ut, auctor nec nulla. Maecenas malesuada odio egestas enim varius ornare. Fusce iaculis condimentum turpis, a placerat massa.</p>
                <p>Fusce bibendum arcu mi, in molestie felis egestas congue. Proin at ultricies neque, id faucibus augue. Cras efficitur rhoncus nisi, sed sagittis metus efficitur eget.</p>
                <div class="ccc26_information-nav">
                    <ul>
                        <li><a href="#">Link 1</a></li>
                        <li><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                    </ul>
                </div>    
            </div>
        </div>
    </div>
</section>