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
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
    const wrapperNode = document.querySelector('.ccc26_hero-carousel-wrap .embla')
    const viewportNode = wrapperNode.querySelector('.ccc26_hero-carousel-wrap .embla__viewport')
    const prevButtonNode = wrapperNode.querySelector('.ccc26_hero-carousel-wrap .embla__prev')
    const nextButtonNode = wrapperNode.querySelector('.ccc26_hero-carousel-wrap .embla__next')
    const emblaApi = EmblaCarousel(viewportNode, { loop: true, align: 'start' })

    prevButtonNode.addEventListener('click', () => emblaApi.scrollPrev(), false)
    nextButtonNode.addEventListener('click', () => emblaApi.scrollNext(), false)
});
</script>
<section 
    id="<?php echo esc_attr($id); ?>" 
    class="<?php echo esc_attr($className); ?> ccc26_hero-carousel"     
>
    <div class="ccc26_hero-carousel-wrap">
        <div class="wrap">
        <?php
            $categories = get_the_terms( $post->ID, 'section' );
            foreach( $categories as $category ) {
                $termID = $category->term_id;
            }
        ?>
        <?php if( have_rows('carousel_images', 'section_' . $termID) ): ?>
            <div class="embla">
                <div class="embla__viewport">
                    <ul class="embla__container">
                        <?php while( have_rows('carousel_images', 'section_' . $termID ) ) : the_row(); ?>
                            <li class="embla__slide">                        
                                <?php
                                    $attachment_id = get_sub_field('image');
                                    $size = "full";
                                    $image = wp_get_attachment_image_src( $attachment_id, $size ); 

                                    $link = get_sub_field('link');
                                    $label = get_sub_field('label');
                                ?>
                                <?php if($link): ?>
                                    <a href="<?php echo $link; ?>" title="<?php echo $label; ?>"> 
                                <?php else: ?>
                                    <div>
                                <?php endif; ?>
                                    <figure>
                                        <img src="<?php echo $image[0]; ?>" alt="<?php echo $label; ?>">
                                    </figure>
                                <?php if($link): ?>
                                    </a>
                                <?php else: ?>
                                    </div>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <button class="embla__prev">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 185 151.66">
                        <rect x="66.59" y="30.85" width="79.51" height="79.51"/>
                        <path d="M141.14,16.73c-4.94-2.21-10.11-3.95-15.31-5.94l-16.66-6.35c-20-7.64-44.22-4.85-63.31,3.96C21.05,19.85,4.74,46.42,1.09,73.2c-1.74,12.76-1.49,25.53,1.4,37.91,5.89,25.24,28.84,41.68,54.36,40.49,11.72-.56,22.89-.77,34.5-2.81,22.2-3.88,39.44-10.39,56.94-24.21l14.2-12.45c21.17-22.62,45.95-65.21-21.35-95.4ZM123.02,71.82c-.78.58-2.14,1.28-3.44.66l-23.53-11.39c-.82-1.69-1.23-5.74.08-6.9l23-11.28c1.33-.64,2.66-.31,3.47.2,1.45.92,1.52,2.3,1.58,3.91.08,2.03-.6,3.48-2.41,4.33l-13.12,6.25,12.9,6.34c4.37,2.14,2.38,7.21,1.47,7.88Z"/>
                    </svg>
                </button>
                <button class="embla__next">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 156.92 159.07">
                        <rect class="cls-1" x="35.07" y="42.12" width="79.51" height="79.51"/>
                        <path d="M124.99,28.68C104.06,13.63,73.78-.48,47.56.01-15.82,2.22-2.82,72.35,12.97,119.04c10.62,31.4,45.17,47.91,76.23,36.33,9.05-3.37,17.31-6.99,23.6-9.59,20.13-8.31,35.44-24.9,41.63-45.78,8.68-29.29-6.4-54.26-29.45-71.32ZM99.64,91.62l-22.84,11.29c-1.23.61-2.48.39-3.45-.13-2.35-1.26-2.45-6.51.17-7.8l13.69-6.75-13.5-6.49c-1.58-.76-2.25-2.33-2.03-4.1-.12-1.4.11-2.72,1.12-3.58.73-.62,2.17-1.33,3.43-.72l23.68,11.36c.43,1.85,1.38,5.65-.27,6.92Z"/>
                    </svg>
                </button>
            </div>
        <?php endif; ?>
        </div>
    </div>
</section>