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
    class="<?php echo esc_attr($className); ?> ccc26_venue-info"     
>
    <div class="ccc26_wrap">
        <div class="ccc26_venue-column gallery">
            <figure>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/gabriella-clare-marino-KxL4vlRQAGk-unsplash.jpg">
            </figure>
            <ul>
                <li>
                    <figure>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/untitled-1.jpg">
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/untitled-2.jpg">
                    </figure>
                </li>
            </ul>
        </div>
        <div class="ccc26_venue-column content">
            <h2>Forme &amp; Chase Restaurant &amp; Bar</h2>
            <div class="ccc26_venue-content">
                <p><strong>Phasellus pretium nisl mauris, malesuada tempus nulla consectetur sed. Nulla bibendum augue lorem, in volutpat metus pretium ut.</strong></p>
                <p>In faucibus diam risus, et rutrum augue dapibus nec. Proin elementum tellus at enim consectetur lacinia. Ut porttitor volutpat ex, non porttitor leo commodo quis. Aenean condimentum, tortor scelerisque aliquam consequat, lectus nisi tincidunt ipsum, ut interdum enim urna ut odio. Ut auctor nisl id convallis venenatis. Duis aliquam nulla mauris, non dapibus elit tristique vitae. Integer porta vitae mauris ac convallis. Aliquam a risus sit amet nunc facilisis ultrices. Curabitur commodo varius justo, at vulputate nisi pretium at. Fusce commodo, urna ut scelerisque ultrices, risus ante interdum odio, non sodales tortor velit eget risus. Donec dapibus, turpis pellentesque pretium semper, ipsum arcu varius lectus, id egestas lorem justo at enim.</p>
            </div>
            <div class="ccc26_venue-details">
                <ul>
                    <li x-data="{ expanded: false }">
                        <h3 
                            id="ccc26_details-title-01"
                            @click="expanded = !expanded"
                        >
                            Opening Times
                        </h3>
                        <div id="ccc26_details-content-01" class="ccc26_venue-detail-content" :class="expanded ? 'expanded' : 'collapsed'">
                            <div>
                                <div class="ccc26_venue-detail-content-container">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac urna ante. Pellentesque ex risus, pharetra a laoreet pulvinar, mollis eget arcu. Donec varius commodo porttitor.
                                </div>
                            </div>
                        </div>
                    </li>
                    <li x-data="{ expanded: false }">
                        <h3 
                            id="ccc26_details-title-02"
                            @click="expanded = !expanded"
                        >
                            Contact
                        </h3>
                        <div id="ccc26_details-content-02" class="ccc26_venue-detail-content" :class="expanded ? 'expanded' : 'collapsed'">
                            <div>
                                <div class="ccc26_venue-detail-content-container">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac urna ante. Pellentesque ex risus, pharetra a laoreet pulvinar, mollis eget arcu. Donec varius commodo porttitor.
                                </div>
                            </div>
                        </div>
                    </li x-data="{ expanded: false }">
                    <li x-data="{ expanded: false }">
                        <h3
                            id="ccc26_details-title-03"
                            @click="expanded = !expanded"
                        >
                            How to get there
                        </h3>
                        <div id="ccc26_details-content-03" class="ccc26_venue-detail-content" :class="expanded ? 'expanded' : 'collapsed'">
                            <div>
                                <div class="ccc26_venue-detail-content-container">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac urna ante. Pellentesque ex risus, pharetra a laoreet pulvinar, mollis eget arcu. Donec varius commodo porttitor.
                                </div>
                            </div>
                        </div>
                    </li>
                    <li x-data="{ expanded: false }">
                        <h3
                            id="ccc26_details-title-04"
                            @click="expanded = !expanded"
                        >
                            Accessibility Information
                        </h3>
                        <div id="ccc26_details-content-04" class="ccc26_venue-detail-content" :class="expanded ? 'expanded' : 'collapsed'">
                            <div>
                                <div class="ccc26_venue-detail-content-container">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac urna ante. Pellentesque ex risus, pharetra a laoreet pulvinar, mollis eget arcu. Donec varius commodo porttitor.
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>