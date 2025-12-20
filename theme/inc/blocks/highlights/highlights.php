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

    $columnOneTitle = get_field('highlights_column_one_title'); 
    $columnTwoTitle = get_field('highlights_column_two_title');

    $OneText = get_field('highlights_column_one_text');
    $TwoText = get_field('highlights_column_two_text');

    $highlightColorOne = get_field('highlights_column_one_highlight_colour');
    $highlightColorTwo = get_field('highlights_column_two_highlight_colour');

?>

<section 
    id="<?php echo esc_attr($id); ?>" 
    class="<?php echo esc_attr($className); ?> ccc26_highlights"     
>
    <div class="ccc26_wrap">        
        <div class="ccc26_highlights-column highlight-<?php echo $highlightColorOne; ?>">
            <?php if($columnOneTitle): ?>                   
                <h2>
                    <div class="ccc26_title-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m368-320 112-84 110 84-42-136 112-88H524l-44-136-44 136H300l110 88-42 136ZM160-160q-33 0-56.5-23.5T80-240v-135q0-11 7-19t18-10q24-8 39.5-29t15.5-47q0-26-15.5-47T105-556q-11-2-18-10t-7-19v-135q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v135q0 11-7 19t-18 10q-24 8-39.5 29T800-480q0 26 15.5 47t39.5 29q11 2 18 10t7 19v135q0 33-23.5 56.5T800-160H160Zm0-80h640v-102q-37-22-58.5-58.5T720-480q0-43 21.5-79.5T800-618v-102H160v102q37 22 58.5 58.5T240-480q0 43-21.5 79.5T160-342v102Zm320-240Z"/></svg>
                    </div>
                    <div><?php echo $columnOneTitle; ?></div>
                </h2>
            <?php endif; ?>           
            <?php if($OneText): ?>
                <p><?php echo $OneText; ?></p>
            <?php endif; ?>
        </div>
        <div class="ccc26_highlights-column highlight-<?php echo $highlightColorTwo; ?>">
            <?php if($columnTwoTitle): ?>                   
                <h2>
                    <div class="ccc26_title-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M200-200v-560 454-85 191Zm0 80q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v320h-80v-320H200v560h280v80H200Zm494 40L552-222l57-56 85 85 170-170 56 57L694-80ZM320-440q17 0 28.5-11.5T360-480q0-17-11.5-28.5T320-520q-17 0-28.5 11.5T280-480q0 17 11.5 28.5T320-440Zm0-160q17 0 28.5-11.5T360-640q0-17-11.5-28.5T320-680q-17 0-28.5 11.5T280-640q0 17 11.5 28.5T320-600Zm120 160h240v-80H440v80Zm0-160h240v-80H440v80Z"/></svg>
                    </div>
                    <div><?php echo $columnTwoTitle; ?></div>
                </h2>
            <?php endif; ?>  
            <?php if($TwoText): ?>
                <p><?php echo $TwoText; ?></p>
            <?php endif; ?>
        </div>     
    </div>
</section>