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
                <p>Search for shops, places to eat, venues, and services in Coventry city centre.</p>
            </div>
        </header>
        
        <div class="ccc26_search-form">
            <form action="<?php echo home_url( '/' ); ?>">
                <div class="ccc26_search-cats-check">
                    <ul>
                        <li><input type="checkbox" id="all" checked /><label for="all">All</label></li>
                        <li><input type="checkbox" id="whatson" name="section[]" /><label for="whatson">What's On</label></li>
                        <li><input type="checkbox" id="shop" name="section[]" value="shop" /><label for="shop">Shop 'till you drop</label></li>
                        <li><input type="checkbox" id="dine" name="section[]" value="dine" /><label for="dine">Eating out</label></li>
                        <li><input type="checkbox" id="staying" name="section[]" /><label for="staying">Staying over</label></li>
                        <li><input type="checkbox" id="todo" name="section[]" value="experience" /><label for="todo">Things to do</label></li>
                        <li><input type="checkbox" id="heritage" name="section[]" value="heritage" /><label for="heritage">Heritage in Coventry</label></li>
                    </ul>
                </div>
                <div class="ccc26_search-form-fields">
                    <input type="text" name="s" placeholder="Search..." />
                    <button type="submit">Go</button>
                    <input type="hidden" name="post_type" value="directory">
                </div>
            </form>
        </div>
        <div class="ccc26_search-tips">
            <h3>Not sure what you want to do?</h3>
            <p>Let us choose for you...</p>
            <div class="ccc26_search-lucky-dip">
                <a href="<?php bloginfo('url'); ?>/?random=1">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M560-160v-80h104L537-367l57-57 126 126v-102h80v240H560Zm-344 0-56-56 504-504H560v-80h240v240h-80v-104L216-160Zm151-377L160-744l56-56 207 207-56 56Z"/></svg> 
                    Lucky Dip</a>
            </div>
        </div>
    </div>
</section>