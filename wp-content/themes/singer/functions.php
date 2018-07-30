<?php
define('TEMPLATE_PATH',get_bloginfo('template_url'));
define('HOME_URL',get_home_url());
define('BlOG_NAME',get_bloginfo('blog_name'));
define('SLOGAN', get_bloginfo('description'));
//add_image_size( 'thumb-service',225,230,true);
//include 'inc/google_functions.php';

add_theme_support('post-thumbnails',array('post','page', 'banner_slider', 'expertise', 'our_team', 'cac-san-pham'));



//register menu
function register_menu() {
    register_nav_menus( array(
    	'primary_menus' => 'Primary menus'
    ) );
    register_nav_menu('primary_menus',__( 'primary_menus' ));
}
add_action( 'init', 'register_menu' );

// if( function_exists('acf_add_options_page') ) {
//
//    acf_add_options_page(array(
//     'page_title'  => 'Theme Options',
//     'menu_title' => 'Theme Options',
//     'menu_slug'  => 'theme-general-settings'
//    ));
//
//      acf_add_options_sub_page(array(
//       'page_title'  => 'Header',
//       'menu_title' => 'Header',
//       'parent_slug' => 'theme-general-settings',
//      ));
//    acf_add_options_sub_page(array(
//     'page_title'  => 'Footer',
//     'menu_title' => 'Footer',
//     'parent_slug' => 'theme-general-settings',
//      ));
// }


function get_id_by_slug($page_slug, $slug_page_type = 'page') {

  $find_page = get_page_by_path($page_slug, OBJECT, $slug_page_type);
  if ($find_page) {
    return $find_page->ID;
  } else {
    return null;
  }
}


function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Profiles';
    $submenu['edit.php'][5][0] = 'Profiles';
    $submenu['edit.php'][10][0] = 'Thêm Profiles';
    $submenu['edit.php'][16][0] = 'Thêm Tags';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Profiles';
    $labels->singular_name = 'Profiles';
    $labels->add_new = 'Add Profiles';
    $labels->add_new_item = 'Add Profiles';
    $labels->edit_item = 'Edit Profiles';
    $labels->new_item = 'Profiles';
    $labels->view_item = 'View Profiles';
    $labels->search_items = 'Search Profiles';
    $labels->not_found = 'No News found';
    $labels->not_found_in_trash = 'No News found in Trash';
    $labels->all_items = 'All Profiles';
    // $labels->menu_name = 'Profiles';
    $labels->name_admin_bar = 'Profiles';
}

add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );

add_filter('acf/fields/relationship/result', 'acf_append_edit_link_to_relationship_results', 10, 4);
function acf_append_edit_link_to_relationship_results($title, $post, $field, $post_id) {
    $title .= sprintf(' <a href="%s" target="_blank">%s</a>', get_edit_post_link($post->ID), __('Edit'));

    return $title;
}

wp_register_script(
  'codechewing_is_the_best',
  get_stylesheet_directory_uri() . '/js/myscript.js',
  array(), '1.0.0', true
);

wp_localize_script(
  'codechewing_is_the_best',
  'globalObject',
  array(
    'newpostUrl' => esc_url(admin_url('post-new.php')),
    'newpostProduct' => esc_url(admin_url('post-new.php?post_type=cac-san-pham'))
  )
);

wp_enqueue_script('codechewing_is_the_best');

// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

//paging ajax for homeland
include 'inc/page_nav.php';

function ja_global_enqueues() {
	wp_enqueue_style(
		'jquery-auto-complete',
		'https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.css',
		array(),
		'1.0.7'
	);

}
add_action( 'wp_enqueue_scripts', 'ja_global_enqueues' );
/**
 * Live autocomplete search feature.
 *
 * @since 1.0.0
 */
function ja_ajax_search() {
	$results = new WP_Query( array(
		'post_type'     => array( 'post', 'cac-san-pham' ),
		'post_status'   => 'publish',
		'nopaging'      => true,
		'posts_per_page'=> 100,
		's'             => stripslashes( $_POST['search'] ),
	) );
	$items = array();
	if ( !empty( $results->posts ) ) {
		foreach ( $results->posts as $key => $result ) {
			$items[] = [$result->post_title, $result->post_name, $result->post_type];
		}
	}
	wp_send_json_success( $items );
}
add_action( 'wp_ajax_search_site',        'ja_ajax_search' );
add_action( 'wp_ajax_nopriv_search_site', 'ja_ajax_search' );
