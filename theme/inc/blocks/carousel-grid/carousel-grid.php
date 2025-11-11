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
    class="<?php echo esc_attr($className); ?> ccc26_carousel-grid ccc26_background-yellow"     
>
    <div class="ccc26_wrap">
        <header>
            <h2>Things you'll love</h2>
            <div class="ccc26_carousel-grid-intro">
                <!-- If there is intro content, then it'd trigger this div -->
            </div>
        </header>
        <div class="ccc26_carousel-grid-items">
            <ul>
                <li>
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/carousel-1.jpg" alt="Sample Image">
                            <button><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                        </figure>
                        <h3>Herbert Art Gallery</h3>
                        <p>Find out more ></p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/carousel-2.jpg" alt="Sample Image">
                            <button><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                        </figure>
                        <h3>The Wave Water Park</h3>
                        <p>Find out more ></p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/carousel-3.jpg" alt="Sample Image">
                            <button><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                        </figure>
                        <h3>The CBS Arena</h3>
                        <p>Find out more ></p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/carousel-4.jpg" alt="Sample Image">
                            <button><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                        </figure>
                        <h3>The HMV Empire</h3>
                        <p>Find out more ></p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/carousel-5.jpg" alt="Sample Image">
                            <button><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                        </figure>
                        <h3>The Belgrave Theatre</h3>
                        <p>Find out more ></p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>