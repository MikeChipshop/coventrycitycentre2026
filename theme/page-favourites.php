<?php get_header(); ?>
    <style>
        .is-fav {
    background-color: pink;
    color: #fff;
    border-color: #fff;
}

#fav-items h2 {
    padding-bottom: 16px;
    font-weight: 700;
    font-size: 24px;
}

.fav-spinner {
    width: 40px;
    height: 40px;
    border: 4px solid #ddd;
    border-top-color: #333;
    border-radius: 50%;
    animation: spin 0.8s linear infinite;
    margin: 20px auto;
}

@keyframes spin {
    to { transform: rotate(360deg); }
}

.fav-post {
    opacity: 0;
    transform: translateY(10px);
    transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), 
                opacity 0.35s ease,
                max-height 0.35s ease;
    max-height: 500px;
    overflow: hidden;
}

.fav-post.is-visible {
    opacity: 1;
    transform: translateY(0);
}

.fav-post.removing {
    opacity: 0;
    transform: translateY(-10px) scale(0.95);
    max-height: 0;
    margin: 0;
    padding: 0;
}
    </style>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>   
        <main class="ccc26_page-content">
            <section class="ccc26_mini-grid">
                <div class="ccc26_wrap">
                    <nav>
                        <ul id="fav-items" style="border:1px dashed #969696ff;margin:20px;padding:20px;text-align:center;"></ul>
                    </nav>
                </div>
            </section>
            <div style="visibility:hidden;">
                <button class="ccc26_toggle-favourite" data-id="3">ADD +</button>
                <button class="ccc26_toggle-favourite" data-id="2">ADD +</button>
                <button class="ccc26_toggle-favourite" data-id="77">ADD +</button>
                <button class="ccc26_toggle-favourite" data-id="14">ADD +</button>
                <button class="ccc26_toggle-favourite" data-id="6">ADD +</button>
            </div>
        </main>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>