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
    class="<?php echo esc_attr($className); ?> ccc26_search ccc26_background-purple"     
>
    <div class="ccc26_wrap">
        <header>
            <h2>Looking for something</h2>
            <div class="ccc26_search-intro">
                <p>Searching for something in particular for your trip to Coventry? Let us help you…</p>
            </div>
        </header>
        <div class="ccc26_search-cats-check">
            <ul>
                <li><input type="checkbox" id="all" name="all" checked /><label for="all">What's On</label></li>
                <li><input type="checkbox" id="whatson" name="whatson" checked /><label for="whatson">What's On</label></li>
                <li><input type="checkbox" id="shop" name="shop" checked /><label for="shop">Shop 'till you drop</label></li>
                <li><input type="checkbox" id="dine" name="dine" checked /><label for="dine">Eating out</label></li>
                <li><input type="checkbox" id="staying" name="staying" checked /><label for="staying">Staying over</label></li>
                <li><input type="checkbox" id="todo" name="todo" checked /><label for="todo">Things to do</label></li>
                <li><input type="checkbox" id="heritage" name="heritage" checked /><label for="heritage">Heritage in Coventry</label></li>
            </ul>
        </div>
        <div class="ccc26_search-cats">
            <ul>
                <li class="active"><a href="#">All</a></li>
                <li><a href="#">What's On</a></li>
                <li><a href="#">Shop 'till you drop</a></li>
                <li><a href="#">Eating out</a></li>
                <li><a href="#">Staying over</a></li>
                <li><a href="#">Things to do</a></li>
                <li><a href="#">Heritage in Coventry</a></li>
            </ul>
        </div>
        <div class="ccc26_search-form">
            <form action="<?php echo home_url( '/' ); ?>">
                <input type="text" name="s" placeholder="Search..." />
                <button type="submit">Go</button>
                <input type="hidden" name="post_type" value="directory">
            </form>
        </div>
        <div class="ccc26_search-tips">
            <h3>Not sure what you want to do?</h3>
            <p>Let us choose for you...</p>
            <div class="ccc26_search-lucky-dip">
                <a href="<?php bloginfo('url'); ?>/?random=1"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M782.87-98.52 526.91-354.48q-29.43 21.74-68.15 34.61Q420.04-307 375.48-307q-114.09 0-193.55-79.46-79.45-79.45-79.45-193.54 0-114.09 79.45-193.54Q261.39-853 375.48-853q114.09 0 193.54 79.46 79.46 79.45 79.46 193.54 0 45.13-12.87 83.28T601-429.7l256.52 257.09-74.65 74.09ZM375.48-413q69.91 0 118.45-48.54 48.55-48.55 48.55-118.46t-48.55-118.46Q445.39-747 375.48-747t-118.46 48.54Q208.48-649.91 208.48-580t48.54 118.46Q305.57-413 375.48-413Z"/></svg> Lucky Dip</a>
            </div>
        </div>
    </div>
</section>