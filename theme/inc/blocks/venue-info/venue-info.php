<?php    
    $id = 'ccc26_block-' . $block['id'];
    if( !empty($block['anchor']) ) :$id = $block['anchor']; endif;

    $className = 'ccc26_block';
    if( !empty($block['className']) ) : $className .= ' ' . $block['className']; endif;

    $description = get_field('description');

    $openingHours = get_field('opening_hours');
    $customOpeningHours = get_field('custom_opening_hours');

    $telephone = get_field('telephone'); 
    $website = get_field('website'); 
    $email = get_field('email');   

    $AccessibilityInformation = get_field('accessibility_information');
?>

<section 
    id="<?php echo esc_attr($id); ?>" 
    class="<?php echo esc_attr($className); ?> ccc26_venue-info"     
>
    <div class="ccc26_wrap">
        <div class="ccc26_venue-column gallery">
            <figure>
                <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
            </figure>
            <!-- 
            <?php $images = get_field('gallery_images');
            $size = 'full';
            if( $images ): ?>                
                <ul class="ccc26_venue-thumbnails">
                    <?php foreach( $images as $image_id ): ?>
                        <li>
                            <figure>
                                <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                            </figure>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
                    -->
        </div>
        <div class="ccc26_venue-column content">
            <h2><?php the_title(); ?></h2>
            <div class="ccc26_venue-content">
                <?php echo $description; ?>
            </div>
            <div class="ccc26_venue-details">
                <ul>
                    <?php if ( ( $openingHours ) || ( $customOpeningHours ) ) : ?>
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
                                        
                                        <ol class="ccc26_opening-hours-list">       
                                            <?php if( have_rows('opening_hours') ): ?>                                 
                                                <?php while( have_rows('opening_hours') ) : the_row(); ?>
                                                    <?php
                                                        $day = get_sub_field('day');
                                                        $open = get_sub_field('open');
                                                        $close = get_sub_field('close');
                                                    ?>
                                                    <li>
                                                        <div class="label"><?php echo $day; ?></div>
                                                        <div class="times">
                                                            <span class="open"><?php echo $open; ?></span>
                                                            <span class="close"><?php echo $close; ?></span>
                                                        </div>                                                    
                                                    </li>
                                                <?php endwhile; ?> 
                                            <?php endif; ?>
                                            
                                            <?php if( have_rows('custom_opening_hours') ): ?>                                 
                                                <?php while( have_rows('custom_opening_hours') ) : the_row(); ?>
                                                    <?php
                                                        $label = get_sub_field('label');
                                                        $times = get_sub_field('times');
                                                    ?>
                                                    <li>
                                                        <div class="label"><?php echo $label; ?></div>
                                                        <div class="times"><?php echo $times; ?></div>
                                                    </li>
                                                <?php endwhile; ?> 
                                            <?php endif; ?>
                                        </ol>        
                                        <div class="ccc26_opening-hours-note">
                                            Disclaimer: Kindly visit their website or contact them for most up to date information/timings.
                                        </div>                            
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endif; ?>
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
                                    <div class="ccc26_venue-detail-content-container contact">
                                        <ul>
                                            <?php if( $telephone ): ?>
                                                <li>Telephone: <a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a></li>
                                            <?php endif; ?>
                                            <?php if( $website ): ?>
                                                <li>Website: <a href="<?php echo $website; ?>" target="_blank"><?php echo $website; ?></a></li>
                                            <?php endif; ?>
                                            <?php if( $email ): ?>
                                                <li>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

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

                                    <div class="ccc26_venue-location-intro">
                                        <?php the_field('address'); ?>
                                    </div>

                                    <div class="ccc26_venue-location-parking">
                                        <h4>Parking</h4>
                                        <?php $parking = get_field( 'parking' );?>
                                        <a href="<?php bloginfo('url'); ?>/parking/<?php echo esc_attr($parking['value']); ?>"><?php echo esc_attr($parking['label']); ?></a>
                                    </div>

                                    <div class="ccc26_venue-location-nearby">
                                        <?php $nearby = get_field('nearby'); ?>
                                        <?php if( $nearby ): ?>
                                            <h4>Nearby</h4>
                                            <ul>
                                            <?php foreach( $nearby as $nearbyitem ): 
                                                $permalink = get_permalink( $nearbyitem->ID );
                                                $title = get_the_title( $nearbyitem->ID );
                                                ?>
                                                <li>
                                                    <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>

                                    <?php if(get_field('map_type') === 'smartthing'): ?>
                                        <iframe src="<?php the_field('map_url'); ?>" width="100%" height="600" frameborder="0"  allow="geolocation"  scrolling="no">Your browser does not support iframes.</iframe>
                                    <?php else: ?>

                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </li>                    
                    
                    <?php if( have_rows('additional_sections') ): ?>     
                        <?php $count = 0; ?>                          
                        <?php while( have_rows('additional_sections') ) : the_row(); ?>
                            <li x-data="{ expanded: false }">
                                <?php
                                    $title = get_sub_field('title');
                                    $content = get_sub_field('content');
                                ?>
                                <h3
                                    id="ccc26_details-title-as0<?php echo $count; ?>"
                                    @click="expanded = !expanded"
                                    :class="{ 'active': expanded }"
                                >
                                    <div class="ccc26_details-chevron">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.3 13.86">
                                            <path d="M.03,12.23c-.15-1.46.34-1.99,1.29-2.46l5.82-2.87L1.16,4.05C.26,3.73-.01,2.91,0,1.91.05,1.25.23.55.75.2c.41-.28,1.22-.26,1.76,0l10.5,5.04c.34,1.04.46,2.42-.07,3.35L2.17,13.78c-.38.18-1.22,0-1.49-.17-.31-.2-.61-.88-.66-1.37Z"/>
                                        </svg>
                                    </div>
                                    <div class="ccc26_details-title">
                                        <?php echo $title; ?>
                                    </div>
                                </h3>
                                <div id="ccc26_details-content-as0<?php echo $count; ?>" class="ccc26_venue-detail-content" :class="expanded ? 'expanded' : 'collapsed'">
                                    <div>
                                        <div class="ccc26_venue-detail-content-container">
                                            <?php echo $content; ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php $count++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>