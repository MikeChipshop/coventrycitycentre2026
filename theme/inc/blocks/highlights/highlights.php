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

    $linkOne = get_field('highlights_column_one_link');
    $linkTwo = get_field('highlights_column_two_link');
?>

<section 
    id="<?php echo esc_attr($id); ?>" 
    class="<?php echo esc_attr($className); ?> ccc26_highlights"     
>
    <div class="ccc26_wrap">      
        <?php if($linkOne): ?>
            <a href="<?php echo $linkOne; ?>" class="ccc26_highlights-column highlight-<?php echo $highlightColorOne; ?>">
        <?php else: ?>
            <div class="ccc26_highlights-column highlight-<?php echo $highlightColorOne; ?>">
        <?php endif; ?>
            <?php if($columnOneTitle): ?>                   
                <h2>
                    <div class="ccc26_title-icon">
                        <?php echo get_field('highlights_column_one_icon'); ?>
                    </div>
                    <div><?php echo $columnOneTitle; ?></div>
                </h2>
            <?php endif; ?>           
            <?php if($OneText): ?>
                <p><?php echo $OneText; ?></p>
            <?php endif; ?>
        <?php if($linkOne): ?>
            </a>    
        <?php else: ?>
        </div>
        <?php endif; ?>

        <?php if($linkTwo): ?>
            <a href="<?php echo $linkTwo; ?>" class="ccc26_highlights-column highlight-<?php echo $highlightColorTwo; ?>">
        <?php else: ?>
            <div class="ccc26_highlights-column highlight-<?php echo $highlightColorTwo; ?>">
        <?php endif; ?>
            <?php if($columnTwoTitle): ?>                   
                <h2>
                    <div class="ccc26_title-icon">
                        <?php echo get_field('highlights_column_two_icon'); ?>
                    </div>
                    <div><?php echo $columnTwoTitle; ?></div>
                </h2>
            <?php endif; ?>  
            <?php if($TwoText): ?>
                <p><?php echo $TwoText; ?></p>
            <?php endif; ?>
        <?php if($linkTwo): ?>
            </a>    
        <?php else: ?>
        </div>  
        <?php endif; ?>
</section>