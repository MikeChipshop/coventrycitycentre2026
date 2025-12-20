<?php

if ( ! function_exists( 'twentynineteen_setup' ) ) :
    function twentynineteen_setup() {

    }
endif;
add_action( 'after_setup_theme', 'twentynineteen_setup' );
function twentynineteen_setup(){
	load_theme_textdomain( 'coventrycitycentre2026', get_template_directory() . '/languages' );
  }

/***************************************************
/ Add Featured Thumbs
/***************************************************/
if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );


/***************************************************
/ Image Sizes
/***************************************************/

if ( function_exists( 'add_image_size' ) ) {
	//add_image_size( 'square', 620, 620, true );
}

/****************************************************
ENQUEUES
*****************************************************/

function dot_load_scripts() {

    wp_register_script( 'site-common', get_template_directory_uri() . '/js/site-common.js', array('jquery'),'',true  );	
    wp_register_script( 'alpine', 'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js', '','',array(
            'in_footer' => true,
            'strategy'  => 'defer',
        )  );
    
	wp_enqueue_script( 'site-common' );
    wp_enqueue_script( 'alpine' );

	wp_register_style( 'main-css', get_template_directory_uri() . '/style.css?v=1','','', 'screen' );
	wp_register_style( 'font-proxima-nova', 'https://use.typekit.net/fgj5ohh.css','','', 'screen' );
	
	wp_enqueue_style( 'main-css' );	
	wp_enqueue_style( 'font-proxima-nova' );

}

add_action('wp_enqueue_scripts', 'dot_load_scripts');

function dot_block_styles() {
	wp_enqueue_style( 'acf-font', get_template_directory_uri() . '/css/acf-styles.css');
	wp_enqueue_style( 'font-proxima-nova', 'https://use.typekit.net/fgj5ohh.css');

    wp_enqueue_script( 'alpine', 'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js', '','',array(
            'in_footer' => true,
            'strategy'  => 'defer',
        )  );
}
add_action( 'enqueue_block_editor_assets', 'dot_block_styles' );

add_theme_support('editor-styles');
add_editor_style( 'css/editor-style.css' );


/****************************************************   
EXCERPTS
*****************************************************/

function new_excerpt_more($more) {
	global $post;
	remove_filter('excerpt_more', 'new_excerpt_more');
	return '';
}
add_filter('excerpt_more','new_excerpt_more',11);

add_filter( 'excerpt_length', function($length) {
    return 10;
} );


/****************************************************
GALLERIES
*****************************************************/

/* Remove inline styles printed when the gallery shortcode is used. */
function twentyten_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
add_filter( 'gallery_style', 'twentyten_remove_gallery_css' );

/***************************************************
/ Remove Auto <p>
/***************************************************/

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');

/***************************************************
/ Remove UL's from navigation menus
/***************************************************/

function remove_ul ( $menu ){
    return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
}
add_filter( 'wp_nav_menu', 'remove_ul' );

/***************************************************
/ Site Navigation Menus
/***************************************************/

if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
          'main_menu' => 'Main Menu',
        )
    );
}

/***************************************************
/ Add data object to menu items
/***************************************************/

add_filter('wp_nav_menu_objects', 'wpe_wp_nav_menu_objects', 10, 2);

function wpe_wp_nav_menu_objects( $items, $args ) {	
    foreach( $items as &$item ) {     
        $data = get_field('mega_menu_id', $item);      
        
        // append icon
        if( $data ) {            
            $item->classes[] = 'megaid-' . $data;            
        }        
    }
    return $items;    
}

/***************************************************
/ Options Pages
/***************************************************/
add_action('acf/init', function() { 
    if(function_exists('acf_add_options_page')) {
        acf_add_options_sub_page('Global');
    }
});

/***************************************************
/ Remove and Hide Sticky Posts
/***************************************************/

add_action( 'admin_print_styles', 'hide_sticky_option' );
function hide_sticky_option() {
global $post_type, $pagenow;
if( 'post.php' != $pagenow && 'post-new.php' != $pagenow && 'edit.php' != $pagenow )
    return;
?>
<style type="text/css">.edit-post-post-status .components-panel__row:nth-of-type(3) { display:none!important }
.quick-edit-row .inline-edit-col-right div.inline-edit-col > :last-child > label.alignleft:last-child{ display:none!important; }</style>
<?php
}

// Unsticky all posts
update_option( 'sticky_posts', array() );

add_filter( 'big_image_size_threshold', '__return_false' );

add_filter( 'get_the_archive_title', function ($title) {    
	if ( is_category() ) {    
			$title = single_cat_title( '', false );    
		} elseif ( is_tag() ) {    
			$title = single_tag_title( '', false );    
		} elseif ( is_author() ) {    
			$title = '<span class="vcard">' . get_the_author() . '</span>' ;    
		} elseif ( is_tax() ) { //for custom post types
			$title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
		} elseif (is_post_type_archive()) {
			$title = post_type_archive_title( '', false );
		}
	return $title;    
});

add_filter( 'wp_kses_allowed_html', 'acf_add_allowed_svg_tag', 10, 2 );
function acf_add_allowed_svg_tag( $tags, $context ) {
    if ( $context === 'acf' ) {
        $tags['svg']  = array(
            'xmlns'       => true,
            'fill'        => true,
            'viewbox'     => true,
            'role'        => true,
            'aria-hidden' => true,
            'focusable'   => true,
        );
        $tags['path'] = array(
            'd'    => true,
            'fill' => true,
        );
    }

    return $tags;
}

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

add_action( 'init', 'register_acf_blocks', 5 );
function register_acf_blocks() {
    register_block_type( __DIR__ . '/inc/blocks/carousel-grid' );
    register_block_type( __DIR__ . '/inc/blocks/hero' );
    register_block_type( __DIR__ . '/inc/blocks/highlights' );
    register_block_type( __DIR__ . '/inc/blocks/image-carousel' );
    register_block_type( __DIR__ . '/inc/blocks/image-grid' );
    register_block_type( __DIR__ . '/inc/blocks/information' );
    register_block_type( __DIR__ . '/inc/blocks/mini-grid' );
    register_block_type( __DIR__ . '/inc/blocks/navigation-grid' );
    register_block_type( __DIR__ . '/inc/blocks/pos' );
    register_block_type( __DIR__ . '/inc/blocks/search' );
    register_block_type( __DIR__ . '/inc/blocks/venue-info' );
    register_block_type( __DIR__ . '/inc/blocks/video-banner' );
}

/***************************************************
/ Directory Type
/***************************************************/

add_action( 'init', 'register_cpt_directory' );

function register_cpt_directory() {

    $labels = array(
        'name' => _x( 'Directory', 'directory' ),
        'singular_name' => _x( 'Directory', 'directory' ),
        'add_new' => _x( 'Add New', 'directory' ),
        'add_new_item' => _x( 'Add New', 'directory' ),
        'edit_item' => _x( 'Edit', 'directory' ),
        'new_item' => _x( 'New', 'directory' ),
        'view_item' => _x( 'View', 'directory' ),
        'search_items' => _x( 'Search', 'directory' ),
        'not_found' => _x( 'None found', 'directory' ),
        'not_found_in_trash' => _x( 'None found in bin', 'directory' ),
        'parent_item_colon' => _x( 'Parent:', 'directory' ),
        'menu_name' => _x( 'Directory', 'directory' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Post type for directory items',
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions','excerpt', 'author' ),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
		'menu_icon' => 'book',
		'capability_type' => 'post',
		'show_in_rest' => true
    );

    register_post_type( 'directory', $args );
}

// Custom Taxonomy: Section
add_action( 'init', 'create_section_taxonomy', 0 );
function create_section_taxonomy() {

    $labels = array(
        'name'               => _x( 'Section', 'taxonomy general name' ),
        'singular_name'      => _x( 'Section', 'taxonomy singular name' ),
        'search_items'       => __( 'Search Sections' ),
        'all_items'          => __( 'All Sections' ),
        'parent_item'        => __( 'Parent Section' ),
        'parent_item_colon'  => __( 'Parent Section:' ),
        'edit_item'          => __( 'Edit Section' ),
        'update_item'        => __( 'Update Section' ),
        'add_new_item'       => __( 'Add New Section' ),
        'new_item_name'      => __( 'New Section Name' ),
        'menu_name'          => __( 'Sections' ),
    );  

    register_taxonomy( 'section', array( 'directory' ), array(
        'hierarchical'       => true,
        'labels'             => $labels,
        'show_ui'            => true,
        'show_admin_column'  => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'section' ),
        'show_in_rest'       => true,
    ) );
}

add_action('init','random_add_rewrite');
function random_add_rewrite() {
   global $wp;
   $wp->add_query_var('random');
   add_rewrite_rule('random/?$', 'index.php?random=1', 'top');
}

add_action('template_redirect','random_template');
function random_template() {
   if (get_query_var('random') == 1) {
           $posts = get_posts('post_type=directory&orderby=rand&numberposts=1');
           foreach($posts as $post) {
                   $link = get_permalink($post);
           }
           wp_redirect($link,307);
           exit;
   }
}