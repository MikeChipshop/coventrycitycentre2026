<?php
require_once( __DIR__ . '/inc/blocks.php');
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
	wp_register_script( 'splide', get_template_directory_uri() . '/js/splide.min.js', '','',true  );

	wp_enqueue_script( 'site-common' );
	wp_enqueue_script( 'splide' );

	wp_register_style( 'main-css', get_template_directory_uri() . '/style.css?v=1','','', 'screen' );
	wp_register_style( 'splide-css', get_template_directory_uri() . '/css/splide.min.css','','', 'screen' );
	wp_register_style( 'gibson-css', 'https://use.typekit.net/uut7zfc.css','','', 'screen' );
	
	wp_enqueue_style( 'main-css' );
	wp_enqueue_style( 'splide-css' );	
	wp_enqueue_style( 'gibson-css' );

}

add_action('wp_enqueue_scripts', 'dot_load_scripts');

function dot_block_styles() {
	wp_enqueue_style( 'acf-font', get_template_directory_uri() . '/css/acf-styles.css');
	wp_enqueue_style( 'gibson-font', 'https://use.typekit.net/uut7zfc.cssp');
	wp_enqueue_style( 'splide-css', get_template_directory_uri() . '/css/splide.min.css');
	wp_register_script( 'splide', get_template_directory_uri() . '/js/splide.min.js', '','',true  );
	wp_enqueue_script( 'splide' );
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