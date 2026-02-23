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
    $block_title = get_field('block_title');
    $block_intro = get_field('block_intro');
    $carousel_posts = get_field('post_items');
?>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
  const wrapperNode = document.querySelector('.embla')
  const viewportNode = wrapperNode.querySelector('.embla__viewport')
  const prevButtonNode = wrapperNode.querySelector('.embla__prev')
  const nextButtonNode = wrapperNode.querySelector('.embla__next')

  const emblaApi = EmblaCarousel(viewportNode, { loop: true, align: 'start' })

  prevButtonNode.addEventListener('click', () => emblaApi.scrollPrev(), false)
  nextButtonNode.addEventListener('click', () => emblaApi.scrollNext(), false)
});
</script>

<style>

</style>

<section 
    id="<?php echo esc_attr($id); ?>" 
    class="<?php echo esc_attr($className); ?> ccc26_carousel-grid ccc26_background-yellow"     
>
    <div class="ccc26_wrap">
        <header>
            <?php if($block_title): ?>
                <h2><?php echo $block_title; ?></h2>
            <?php endif; ?>
            <?php if($block_intro): ?>
                <div class="ccc26_carousel-grid-intro">
                    <?php echo $block_intro; ?>
                </div>
            <?php endif; ?>
        </header>
        <?php if( $carousel_posts ): ?>
        <div class="embla">
            <div class="ccc26_carousel-grid-items embla__viewport">
                    <ul class="embla__container">
                        <?php foreach( $carousel_posts as $post ): setup_postdata($post); ?>
                            <li class="embla__slide">
                                
                                    <figure>
                                        <a href="<?php echo get_permalink($post->ID); ?>">
                                            <?php if(has_post_thumbnail($post->ID)):
                                                echo get_the_post_thumbnail($post->ID, 'medium_large');
                                            else: ?>
                                                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/placeholder.png" alt="<?php echo get_the_title($post->ID); ?> thumbnail">
                                            <?php endif; ?>
                                        </a>
                                        <button class="ccc26_favourite-button ccc26_toggle-favourite" data-id="<?php echo $post->ID; ?>"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                                    </figure>
                                    <h3><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></h3>
                                    <p><a href="<?php echo get_permalink($post->ID); ?>">Find out more ></a></p>
                                </a>
                            </li>
                        <?php endforeach; wp_reset_postdata(); ?>                    
                    </ul>
                <?php endif; ?>
            </div>
            <button class="embla__prev"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88.22 92.71">
  <defs>
    <style>
      .cls-1 {
        fill: #fff;
      }
    </style>
  </defs>
  <path class="cls-1" d="M87.99,79.48c1.05-6.13-1.52-10.6-6.46-12.99l-41.31-20.04,43.29-20.93c4.52-2.19,4.87-7.98,4.61-12.38.46-4.82-.93-8.82-4.45-11.22-3.21-2.19-7.09-2.61-11.13-.68L4.3,33.9C1.73,35.13.11,37.3.09,40.11L0,51.08c-.03,3.48,1.56,6.23,4.7,7.74l68.83,32.99c3.96,1.9,8,.55,10.97-1.72,2.83-2.16,4-6.06,3.49-10.61Z"/>
</svg></button>
            <button class="embla__next"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88.22 92.71">
  <defs>
    <style>
      .cls-1 {
        fill: #fff;
      }
    </style>
  </defs>
  <path class="cls-1" d="M87.99,79.48c1.05-6.13-1.52-10.6-6.46-12.99l-41.31-20.04,43.29-20.93c4.52-2.19,4.87-7.98,4.61-12.38.46-4.82-.93-8.82-4.45-11.22-3.21-2.19-7.09-2.61-11.13-.68L4.3,33.9C1.73,35.13.11,37.3.09,40.11L0,51.08c-.03,3.48,1.56,6.23,4.7,7.74l68.83,32.99c3.96,1.9,8,.55,10.97-1.72,2.83-2.16,4-6.06,3.49-10.61Z"/>
</svg></button>
        </div>
    </div>
</section>