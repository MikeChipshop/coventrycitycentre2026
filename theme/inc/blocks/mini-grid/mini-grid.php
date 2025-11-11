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
    class="<?php echo esc_attr($className); ?> ccc26_mini-grid"     
>
    <div class="ccc26_wrap">
        <nav>
            <ul>
                <li>
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </figure>
                        <h2>Forme &amp; Chase</h2>
                        <div>Find out more ></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </figure>
                        <h2>Nineteen 58</h2>
                        <div>Find out more ></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </figure>
                        <h2>Steakout</h2>
                        <div>Find out more ></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </figure>
                        <h2>Cosy Club</h2>
                        <div>Find out more ></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </figure>
                        <h2>7Bone Burger</h2>
                        <div>Find out more ></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </figure>
                        <h2>Umami Kitchen</h2>
                        <div>Find out more ></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </figure>
                        <h2>Flying Standard</h2>
                        <div>Find out more ></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </figure>
                        <h2>Earl of Mercia</h2>
                        <div>Find out more ></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </figure>
                        <h2>The Spon Gate</h2>
                        <div>Find out more ></div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </figure>
                        <h2>Entree Steakhouse</h2>
                        <div>Find out more ></div>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</section>