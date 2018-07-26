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

// add_action( 'manage_posts_custom_column' , 'rating_columns' );
//
// function rating_columns( $column ) {
//     global $post;
//
//     switch ( $column ) {
//         case 'profile_birthday':
//             $metaData = get_post_meta( $post->ID, 'Ngày sinh', true );
//
//             echo $metaData;
//         break;
//     }
// }


// function rsci_meta_filter( $meta, $post, $is_update ) {
//     echo '<pre>';
//     print_r($meta);
//     echo '</pre>';
//     $meta_array = array();
//     $repeater_array = array();
//      foreach ($meta as $key => $value) {
//          if($key=='relationship'){
//              print_r($value);
//          }
//      }
//     // foreach ($meta as $key => $value) {
//     //     print_r($key);
//     //     // カスタムフィールド名が 'textfield' だった時
//     //     if ($key == 'textfield') {
//     //     // ACF用のフィールドキーに変換
//     //         $meta_array['field_52528d5b8ad30'] = $value;
//     //     // カスタムフィールド名が 'select' だった時
//     //     } elseif ($key == 'select') {
//     //     // カンマで分割して配列として登録
//     //         $meta_array['field_52528dc88ad31'] = preg_split('/,+/', $value);
//     //     // 繰り返しフィールド用のデータを配列に入れていく処理
//     //     } elseif ($key == 'text_1') {
//     //         $repeater_array[0]['repeater_text'] = $value;
//     //     } elseif ($key == 'text_2') {
//     //         $repeater_array[1]['repeater_text'] = $value;
//     //     } elseif ($key == 'text_3') {
//     //         $repeater_array[2]['repeater_text'] = $value;
//     //     } elseif ($key == 'num_1') {
//     //         $repeater_array[0]['repeater_number'] = $value;
//     //     } elseif ($key == 'num_2') {
//     //         $repeater_array[1]['repeater_number'] = $value;
//     //     } elseif ($key == 'num_3') {
//     //         $repeater_array[2]['repeater_number'] = $value;
//     //     // ACF以外のメタデータはそのまま通す
//     //     } else {
//     //         $meta_array[$key] = $value;
//     //     }
//     // }
//
//
//     // 繰り返しフィールドの配列を戻す
//     echo '<pre>';  	print_r($meta_array);
//     echo '</pre>';    	return $meta_array;
// }
// add_filter( 'really_simple_csv_importer_save_meta', 'rsci_meta_filter', 10, 3 );
// function really_simple_csv_importer_save_meta_filter( $meta, $post, $is_update ) {
//
//     // serialize metadata
//     $meta_array = array();
//     if (isset($meta['product_singer'])) $meta_array[] = $meta['product_singer'];
//     if (isset($meta['_product_singer'])) $meta_array[] = $meta['_product_singer'];
//     $meta = array( 'meta_key' => $meta_array );
//     print_r($meta);
//     return $meta;
// }
// add_filter( 'really_simple_csv_importer_save_meta', 'really_simple_csv_importer_save_meta_filter', 10, 3 );
