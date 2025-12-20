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
                    <figure>
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </a>
                        <button class="ccc26_favourite-button ccc26_toggle-favourite" data-id="123"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                    </figure>
                    <h2><a href="#">Forme &amp; Chase</a></h2>
                    <div><a href="#">Find out more ></a></div>                    
                </li>
                <li>
                    <figure>
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </a>
                        <button class="ccc26_favourite-button ccc26_toggle-favourite" data-id="766"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                    </figure>
                    <h2><a href="#">Nineteen 58</a></h2>
                    <div><a href="#">Find out more ></a></div> 
                </li>
                <li>
                    <figure>
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </a>
                        <button class="ccc26_favourite-button ccc26_toggle-favourite" data-id="456"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                    </figure>
                    <h2><a href="#">Steakout</a></h2>
                    <div><a href="#">Find out more ></a></div> 
                </li>
                <li>
                    <figure>
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </a>
                        <button class="ccc26_favourite-button ccc26_toggle-favourite" data-id="97"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                    </figure>
                    <h2><a href="#">Cosy Club</a></h2>
                    <div><a href="#">Find out more ></a></div> 
                </li>
                <li>
                    <figure>
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </a>
                        <button class="ccc26_favourite-button ccc26_toggle-favourite" data-id="23"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                    </figure>
                    <h2><a href="#">7Bone Burger</a></h2>
                    <div><a href="#">Find out more ></a></div>                     
                </li>
                <li>
                    <figure>
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </a>
                        <button class="ccc26_favourite-button ccc26_toggle-favourite" data-id="456"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                    </figure>
                    <h2><a href="#">Umami Kitchen</a></h2>
                    <div><a href="#">Find out more ></a></div>                     
                </li>
                <li>
                    <figure>
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </a>
                        <button class="ccc26_favourite-button ccc26_toggle-favourite" data-id="345"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                    </figure>
                    <h2><a href="#">Flying Standard</a></h2>
                    <div><a href="#">Find out more ></a></div>                     
                </li>
                <li>
                    <figure>
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </a>
                        <button class="ccc26_favourite-button ccc26_toggle-favourite" data-id="564"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                    </figure>
                    <h2><a href="#">Earl of Mercia</a></h2>
                    <div><a href="#">Find out more ></a></div>                    
                </li>
                <li>
                    <figure>
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </a>
                        <button class="ccc26_favourite-button ccc26_toggle-favourite" data-id="12"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                    </figure>
                    <h2><a href="#">The Spon Gate</a></h2>
                    <div><a href="#">Find out more ></a></div>                     
                </li>
                <li>                
                    <figure>
                        <a href="#">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-grid-1.jpg">
                        </a>
                        <button class="ccc26_favourite-button ccc26_toggle-favourite" data-id="11"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Z"/></svg></button>
                    </figure>
                    <h2><a href="#">Entree Steakhouse</a></h2>
                    <div><a href="#">Find out more ></a></div>               
                </li>
            </ul>
        </nav>
    </div>
</section>