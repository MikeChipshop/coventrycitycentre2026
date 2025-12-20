<?php    
    $id = 'ccc26_block-' . $block['id'];
    if( !empty($block['anchor']) ) :$id = $block['anchor']; endif;

    // Create class attribute allowing for custom "className" and "align" values.
    $className = 'ccc26_block';
    if( !empty($block['className']) ) : $className .= ' ' . $block['className']; endif;
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
                <p><strong>Cuisine: Restaurant & Bar</strong></p>
                <p>In the old days of journalism, some of the best scoops were cooked up over a working breakfast, a liquid lunch or an after-work drink. Forme & Chase is open all day – so you’ll have plenty of opportunity to relax here and make some stories of your own. The time you discovered our to-die-for menu. The old friends you met, and the new friends you made over Paparazzi cocktails at the bar. The deal you sealed with a special lunch. That romantic dinner à deux that changed your life.</p>
                <p>Bar snacks, light lunch, dinner & afternoon teas.</p>
            </div>
            <div class="ccc26_venue-details">
                <ul>
                    <li x-data="{ expanded: false }">
                        <h3 
                            id="ccc26_details-title-01"
                            @click="expanded = !expanded"
                            :class="{ 'active': expanded }"
                        >
                            <div class="ccc26_details-chevron">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.3 13.86">
                                    <path d="M.03,12.23c-.15-1.46.34-1.99,1.29-2.46l5.82-2.87L1.16,4.05C.26,3.73-.01,2.91,0,1.91.05,1.25.23.55.75.2c.41-.28,1.22-.26,1.76,0l10.5,5.04c.34,1.04.46,2.42-.07,3.35L2.17,13.78c-.38.18-1.22,0-1.49-.17-.31-.2-.61-.88-.66-1.37Z"/>
                                </svg>
                            </div>
                            <div class="ccc26_details-title">
                                Opening Times
                            </div>
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
                            :class="{ 'active': expanded }"
                        >
                            <div class="ccc26_details-chevron">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.3 13.86">
                                    <path d="M.03,12.23c-.15-1.46.34-1.99,1.29-2.46l5.82-2.87L1.16,4.05C.26,3.73-.01,2.91,0,1.91.05,1.25.23.55.75.2c.41-.28,1.22-.26,1.76,0l10.5,5.04c.34,1.04.46,2.42-.07,3.35L2.17,13.78c-.38.18-1.22,0-1.49-.17-.31-.2-.61-.88-.66-1.37Z"/>
                                </svg>
                            </div>
                            <div class="ccc26_details-title">
                                Contact
                            </div>
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
                            :class="{ 'active': expanded }"
                        >
                            <div class="ccc26_details-chevron">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.3 13.86">
                                    <path d="M.03,12.23c-.15-1.46.34-1.99,1.29-2.46l5.82-2.87L1.16,4.05C.26,3.73-.01,2.91,0,1.91.05,1.25.23.55.75.2c.41-.28,1.22-.26,1.76,0l10.5,5.04c.34,1.04.46,2.42-.07,3.35L2.17,13.78c-.38.18-1.22,0-1.49-.17-.31-.2-.61-.88-.66-1.37Z"/>
                                </svg>
                            </div>
                            <div class="ccc26_details-title">
                                How to get there
                            </div>
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
                            :class="{ 'active': expanded }"
                        >
                            <div class="ccc26_details-chevron">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.3 13.86">
                                    <path d="M.03,12.23c-.15-1.46.34-1.99,1.29-2.46l5.82-2.87L1.16,4.05C.26,3.73-.01,2.91,0,1.91.05,1.25.23.55.75.2c.41-.28,1.22-.26,1.76,0l10.5,5.04c.34,1.04.46,2.42-.07,3.35L2.17,13.78c-.38.18-1.22,0-1.49-.17-.31-.2-.61-.88-.66-1.37Z"/>
                                </svg>
                            </div>
                            <div class="ccc26_details-title">
                                Accessibility Information
                            </div>
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