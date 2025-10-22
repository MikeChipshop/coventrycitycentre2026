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

