<?php
/*
 * Plugin Name: Required Site Functions
 * Description: Adds specific content functions to the theme.
 * Plugin URI: https://miniman-webdesign.co.uk
 * Version: 1.2
 * Author: Mike Bishop
 * Author URI: https://miniman-webdesign.co.uk
 * License: Private
*/

/***************************************************
/ PAGINATE
/***************************************************/

if ( ! function_exists( 'miniman_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 * Based on paging nav function from Twenty Fourteen
 */

function miniman_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $GLOBALS['wp_query']->max_num_pages,
		'current'  => $paged,
		'mid_size' => 3,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => __( '&laquo;', 'yourtheme' ),
		'next_text' => __( '&raquo;', 'yourtheme' ),
		'type'      => 'list',
	) );

	if ( $links ) :

	?>
	<nav class="navigation paging-navigation" role="navigation">
		<?php echo $links; ?>
	</nav><!-- .navigation -->
	<?php
	endif;
}
endif;

/***************************************************
/ Give ACF a Boost
/***************************************************/

add_filter('acf/settings/remove_wp_meta_box', '__return_true');

/***************************************************
/ GRABBING PARENT PAGE ID
/***************************************************/

function is_tree($pid) {
	global $post;
	if(is_page()&&($post->post_parent==$pid||is_page($pid)))
    	return true;
	else
    	return false;
};

/***************************************************
/ <p> and <br /> Fixes
/***************************************************/

function ptobr($string){
	return preg_replace("/<\/p>[^<]*<p>/", "<br /><br />", $string);
}
function stripp($string){
	return preg_replace('/(<p>|<\/p>)/i','',$string) ;
}
add_filter('wp_nav_menu_args', 'prefix_nav_menu_args');

function prefix_nav_menu_args($args = ''){
    $args['container'] = false;
    return $args;
}

/***************************************************
/ Move YOAST to bottom
/***************************************************/

function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');


/***************************************************
/ Title Tag
/***************************************************/

add_theme_support( 'title-tag' );