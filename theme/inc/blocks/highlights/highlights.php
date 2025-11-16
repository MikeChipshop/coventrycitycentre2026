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
    class="<?php echo esc_attr($className); ?> ccc26_highlights"     
>
    <div class="ccc26_wrap">        
        <div class="ccc26_highlights-column">
            <?php 
                if(get_field('highlights_column_one_title')): 
                    $columnOneTitle = get_field('highlights_column_one_title'); 
                    echo '<h2>' . $columnOneTitle . '</h2>';
                endif;              
            ?>            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lorem sem, cursus at purus sit amet, eleifend</p>
        </div>
        <div class="ccc26_highlights-column">
            <?php 
                if(get_field('highlights_column_two_title')): 
                    $columnTwoTitle = get_field('highlights_column_two_title'); 
                    echo '<h2>' . $columnTwoTitle . '</h2>';
                endif;              
            ?>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lorem sem, cursus at purus sit amet, eleifend</p>
        </div>     
    </div>
</section>