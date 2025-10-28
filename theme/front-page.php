<?php get_header(); ?>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>    
            <main class="ccc26_page-content">
                <section class="ccc26_navigation-grid">
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
                <section class="ccc26_carousel-grid ccc26_background-yellow">
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
                <section class="ccc26_search  ccc26_background-purple">
                    <div class="ccc26_wrap">
                        <header>
                            <h2>Looking for something</h2>
                            <div class="ccc26_search-intro">
                                <p>Searching for something in particular for your trip to Coventry? Let us help you…</p>
                            </div>
                        </header>
                        <div class="ccc26_search-cats">
                            <ul>
                                <li><a href="#">What's On</a></li>
                                <li class="active"><a href="#">Shop 'till you drop</a></li>
                                <li><a href="#">Eating out</a></li>
                                <li><a href="#">Staying over</a></li>
                                <li><a href="#">Things to do</a></li>
                                <li><a href="#">Heritage in Coventry</a></li>
                            </ul>
                        </div>
                        <div class="ccc26_search-form">
                            <form action="#" method="get">
                                <input type="text" placeholder="Name" />
                                <input type="text" placeholder="Keyword" />
                                <button type="submit">Go</button>
                            </form>
                        </div>
                        <div class="ccc26_search-tips">
                            <h3>Not sure what you want to do?</h3>
                            <p>Let us choose for you...</p>
                            <div class="ccc26_search-lucky-dip">
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M782.87-98.52 526.91-354.48q-29.43 21.74-68.15 34.61Q420.04-307 375.48-307q-114.09 0-193.55-79.46-79.45-79.45-79.45-193.54 0-114.09 79.45-193.54Q261.39-853 375.48-853q114.09 0 193.54 79.46 79.46 79.45 79.46 193.54 0 45.13-12.87 83.28T601-429.7l256.52 257.09-74.65 74.09ZM375.48-413q69.91 0 118.45-48.54 48.55-48.55 48.55-118.46t-48.55-118.46Q445.39-747 375.48-747t-118.46 48.54Q208.48-649.91 208.48-580t48.54 118.46Q305.57-413 375.48-413Z"/></svg> Lucky Dip</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="ccc26_information">
                    <div class="ccc26_wrap">
                        <div class="ccc26_information-top">
                            <div class="ccc26_information-column">
                                <h2>Test title</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lorem sem, cursus at purus sit amet, eleifend</p>
                            </div>
                            <div class="ccc26_information-column">
                                <h2>Test title</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lorem sem, cursus at purus sit amet, eleifend</p>
                            </div>
                        </div>
                        <div class="ccc26_information-top">
                            <div class="ccc26_information-column">
                                <div class="ccc26_information-map">
                                    <img src="#" alt="Map">
                                </div>
                            </div>
                            <div class="ccc26_information-column">
                                <h2>Test title</h2>
                                <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></p>
                                <p>Sed a elementum nulla, non suscipit arcu. Nulla erat diam, vestibulum eget ex quis, convallis molestie mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In et purus in nulla faucibus rutrum. Mauris metus sem, finibus id accumsan ut, auctor nec nulla. Maecenas malesuada odio egestas enim varius ornare. Fusce iaculis condimentum turpis, a placerat massa.</p>
                                <p>Fusce bibendum arcu mi, in molestie felis egestas congue. Proin at ultricies neque, id faucibus augue. Cras efficitur rhoncus nisi, sed sagittis metus efficitur eget.</p>
                                <div class="ccc26_information-nav">
                                    <ul>
                                        <li><a href="#">Link 1</a></li>
                                        <li><a href="#">Link 2</a></li>
                                        <li><a href="#">Link 3</a></li>
                                        <li><a href="#">Link 2</a></li>
                                        <li><a href="#">Link 3</a></li>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                    </div>
                </section>
                <section class="ccc26_pos">
                    <div class="ccc26_wrap ccc26_pos-columns">
                        <div class="ccc26_pos-column ccc26_background-deep-blue">
                            <div class="ccc26_pos-column-wrap">
                                <h2><span>Follow Us</span><br /> on <em>Socials</em></h2>
                            </div>
                            <div class="ccc26_pos-column-content">
                               <p>Sed a elementum nulla, non suscipit arcu. Nulla erat diam, vestibulum eget ex quis, convallis molestie mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                <p><a href="#">@CoventryCity</a></p>
                            </div>
                            <?php get_template_part( 'inc/social', 'list' ); ?>
                        </div>
                        <div class="ccc26_pos-column ccc26_background-pink">
                            <div class="ccc26_pos-column-wrap">
                                <h2><span>Sign Up</span><br /> for <em>Updates</em></h2>
                            </div>
                            <div class="ccc26_pos-column-content">
                                <p>Sed a elementum nulla, non suscipit arcu. Nulla erat diam, vestibulum eget ex quis, convallis molestie mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                            
                            </div>
                            
                        </div>
                    </div>
                </section>
                <?php the_content(); ?> 
            </main>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>