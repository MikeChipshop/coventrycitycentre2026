<?php 

function ccc26_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'coventrycitycentre2026',
				'title' => __( 'Coventry City Centre 2026', 'coventrycitycentre2026' ),
			),
		)
	);
}
add_filter( 'block_categories_all', 'ccc26_block_category', 10, 2);


function register_acf_block_types() {	
	
    // Hero
	acf_register_block_type(array(
        'name'              => 'ccc26_hero',
        'title'             => __('Hero'),
		'description'       => __('A custom Hero block'),
		'mode'			=> 'preview',
		'render_template'   => 'inc/blocks/hero/hero.php',
		'enqueue_style' => get_template_directory_uri() . '/inc/blocks/hero/hero.css',
        'category'          => 'coventrycitycentre2026',
		'icon'              => array(
			'src' => 'superhero-alt',
			'foreground' => '#314540',
		),
		'keywords' => array( 'layout', 'Coventry', 'City', 'Centre', 'hero' ),
		'supports' => array( 
			'align' => false,
			'jsx' 	=> true,
		 ),
	));	

	// Mini Grid
	acf_register_block_type(array(
        'name'              => 'ccc26_mini-grid',
        'title'             => __('Mini Grid'),
		'description'       => __('A custom mini grid block'),
		'mode'			=> 'preview',
		'render_template'   => 'inc/blocks/mini-grid/mini-grid.php',
		'enqueue_style' => get_template_directory_uri() . '/inc/blocks/mini-grid/mini-grid.css',
        'category'          => 'coventrycitycentre2026',
		'icon'              => array(
			'src' => 'superhero-alt',
			'foreground' => '#314540',
		),
		'keywords' => array( 'layout', 'Coventry', 'City', 'Centre', 'grid', 'mini' ),
		'supports' => array( 
			'align' => false,
			'jsx' 	=> true,
		 ),
	));	

	// Carousel Grid
	acf_register_block_type(array(
        'name'              => 'ccc26_carousel-grid',
        'title'             => __('Carousel Grid'),
		'description'       => __('A custom carousel grid block'),
		'mode'			=> 'preview',
		'render_template'   => 'inc/blocks/carousel-grid/carousel-grid.php',
		'enqueue_style' => get_template_directory_uri() . '/inc/blocks/carousel-grid/carousel-grid.css',
        'category'          => 'coventrycitycentre2026',
		'icon'              => array(
			'src' => 'slides',
			'foreground' => '#314540',
		),
		'keywords' => array( 'layout', 'Coventry', 'City', 'Centre', 'grid', 'Carousel' ),
		'supports' => array( 
			'align' => false,
			'jsx' 	=> true,
		 ),
	));	

	// Search
	acf_register_block_type(array(
        'name'              => 'ccc26_search',
        'title'             => __('Search'),
		'description'       => __('A custom search block'),
		'mode'			=> 'preview',
		'render_template'   => 'inc/blocks/search/search.php',
		'enqueue_style' => get_template_directory_uri() . '/inc/blocks/search/search.css',
        'category'          => 'coventrycitycentre2026',
		'icon'              => array(
			'src' => 'search',
			'foreground' => '#314540',
		),
		'keywords' => array( 'layout', 'Coventry', 'City', 'Centre', 'search' ),
		'supports' => array( 
			'align' => false,
			'jsx' 	=> true,
		 ),
	));	
	
	// Venue Info
	acf_register_block_type(array(
        'name'              => 'ccc26_venue-info',
        'title'             => __('Venue Info'),
		'description'       => __('A custom venue info block'),
		'mode'			=> 'preview',
		'render_template'   => 'inc/blocks/venue-info/venue-info.php',
		'enqueue_style' => get_template_directory_uri() . '/inc/blocks/venue-info/venue-info.css',
        'category'          => 'coventrycitycentre2026',
		'icon'              => array(
			'src' => 'admin-multisite',
			'foreground' => '#314540',
		),
		'keywords' => array( 'layout', 'Coventry', 'City', 'Centre', 'venue', 'information' ),
		'supports' => array( 
			'align' => false,
			'jsx' 	=> true,
		 ),
	));	

	// Video Banner
	acf_register_block_type(array(
        'name'              => 'ccc26_video-banner',
        'title'             => __('Video Banner'),
		'description'       => __('A custom Video Banner block'),
		'mode'			=> 'preview',
		'render_template'   => 'inc/blocks/video-banner/video-banner.php',
		'enqueue_style' => get_template_directory_uri() . '/inc/blocks/video-banner/video-banner.css',
        'category'          => 'coventrycitycentre2026',
		'icon'              => array(
			'src' => 'superhero-alt',
			'foreground' => '#314540',
		),
		'keywords' => array( 'layout', 'Coventry', 'City', 'Centre', 'video', 'banner' ),
		'supports' => array( 
			'align' => false,
			'jsx' 	=> true,
		 ),
	));		
}

if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}

