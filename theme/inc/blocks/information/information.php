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

    $mainTitle = get_field('title');
    $mainContent = get_field('content');
    $layoutStyle = get_field('layout_style');

    $attachment_id = get_field('image');
    $size = "full";
    $image = wp_get_attachment_image_src( $attachment_id, $size ); 
?>

<section 
    id="<?php echo esc_attr($id); ?>" 
    class="<?php echo esc_attr($className); ?> ccc26_information layout-<?php echo $layoutStyle; ?>"     
>
    <div class="ccc26_wrap">        
        <div class="ccc26_information-top">
            <div class="ccc26_information-column">
                <div class="ccc26_information-map">
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $title; ?>">
                </div>
            </div>
            <div class="ccc26_information-column">
                <?php if( get_field('intro') ): ?>
                    <h1><?php echo $mainTitle; ?></h1>
                <?php else: ?>
                    <h2><?php echo $mainTitle; ?></h2>
                <?php endif; ?>
                <?php echo $mainContent; ?>
                <div class="ccc26_information-nav">
                    <ul>
                        <?php if( have_rows('drop_down_items') ): ?>     
                            <?php $count = 0; ?>                          
                            <?php while( have_rows('drop_down_items') ) : the_row(); ?>
                                <?php
                                    $subTitle = get_sub_field('title');
                                    $subContent = get_sub_field('content');
                                ?>
                                <li x-data="{ expanded: false }">
                                    <?php
                                        $title = get_sub_field('title');
                                        $content = get_sub_field('content');
                                    ?>
                                    <h3
                                        id="ccc26_details-title-as0<?php echo $count; ?>"
                                        @click="expanded = !expanded"
                                        :class="{ 'active': expanded }"
                                    >
                                        <div class="ccc26_details-chevron">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.3 13.86">
                                                <path d="M.03,12.23c-.15-1.46.34-1.99,1.29-2.46l5.82-2.87L1.16,4.05C.26,3.73-.01,2.91,0,1.91.05,1.25.23.55.75.2c.41-.28,1.22-.26,1.76,0l10.5,5.04c.34,1.04.46,2.42-.07,3.35L2.17,13.78c-.38.18-1.22,0-1.49-.17-.31-.2-.61-.88-.66-1.37Z"/>
                                            </svg>
                                        </div>
                                        <div class="ccc26_details-title">
                                            <?php echo $subTitle; ?>
                                        </div>
                                    </h3>
                                    <div id="ccc26_details-content-as0<?php echo $count; ?>" class="ccc26_venue-detail-content" :class="expanded ? 'expanded' : 'collapsed'">
                                        <div>
                                            <div class="ccc26_venue-detail-content-container">
                                                <?php echo $subContent; ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php $count++; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>    
            </div>
        </div>
    </div>
</section>