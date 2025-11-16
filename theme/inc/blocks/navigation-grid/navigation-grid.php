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
    class="<?php echo esc_attr($className); ?> ccc26_navigation-grid"     
>
   <div class="ccc26_wrap">
        <div class="ccc26_navigation-grid-column">
            <figure>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg" alt="Navigation Image">
                <h3>What's on</h3>
            </figure>
            <div class="ccc26_navigation-grid-content">
                <h2>Welcome to Coventry, a city rich in culture and history.</h2>
                <p>Thousands of people visit Coventry every year to experience our unique and exciting city. With a wide variety to see and do, we have handpicked some of the best for you.</p>
            </div>
        </div>
        <div class="ccc26_navigation-grid-column">
            <nav>
                <ul>
                    <li>
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-2.jpg">
                            <h3>Shop 'till you drop</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-3.jpg">
                            <h3>Eating out</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-4.jpg">
                            <h3>Heritage in Coventry</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-5.jpg">
                            <h3>Staying over</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-6.jpg">
                            <h3>Things to do</h3>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>