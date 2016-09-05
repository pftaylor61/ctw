<?php 
/*
 * The material for the Slidibg Widgets has been taken from wpeden.com's Sliding Widget plugin. The oiriginal plugin credits are listed below.
 */

/*
Plugin Name: Sliding Widgets
Plugin URI: http://wpeden.com/product/wordpress-sliding-widget-area/
Description: Sliding Widgets - WordPress Plugin to create sliding widget area dynamically
Author: codename065
Version: 1.4.4
Author URI: http://wpeden.com/
*/

include("libs/class.plugin.php");
 
$wpsw_plugindir = str_replace('\\','/',dirname(__FILE__));
$parray = explode('/',$wpsw_plugindir);
$wpbs_plugin = new ahm_plugin(end($parray));
error_reporting(0);

function wpsw_header(){
    
    $wssopt = get_option('wpbs_opt');
    
    if($wssopt != FALSE){
        extract($wssopt);
        if(empty($disable) || $disable != 1 ){ ?>
            <style type="text/css">
            /* Common css */
            #wpbs__cont{
                width: <?php echo $width;?>px;
                height: <?php echo $height;?>px;
                background:<?php echo !empty($bg) ? $bg : OCWSCTW_BGCOL; ?>;
                -webkit-border-top-right-radius: 6px;
                -webkit-border-bottom-right-radius: 6px;
                -moz-border-radius-topright: 6px;
                -moz-border-radius-bottomright: 6px;
                border-top-right-radius: 6px;
                border-bottom-right-radius: 6px;
                z-index:999999;
            }
            </style>

            <?php 
            //include the css file for the left,right,bottom and top
            if($position == '') 
                $pos = "left"; 
            else 
                $pos = $position;
            
            include("tpls/".$pos."_css.php");
        }
    }
}

function wpsw_widget_area(){
    $wssopt = get_option('wpbs_opt',array());
    if($wssopt != FALSE){
        extract($wssopt);
        if(empty($disable) || $disable != 1){ 

        register_sidebar(array(
                        'name'          => 'Sliding Widget Area',
                        'id'            => 'wliding-widget',
                        'description'   => 'This widget area is for placing widgets into the Sliding area.',
                        'class'         => '',
                        'before_widget' => '<div id="sbox1" class="widget %2$s">',
                        'after_widget'  => '</div>',
                        'before_title'  => '<h3 class="widgettitle">',
                        'after_title'   => '</h3>' ));
        }
    }
}
 

function wpsw_sliders(){
    /* 
     * OCWS notes:
     * the original code had these default values at 50, instead of 30.
     * Also the default position was given as left. I changed it to right.
     */
    $wssopt = get_option('wpbs_opt');
    if($wssopt != FALSE){
        extract($wssopt);
        if(!$disable){ 
            if(empty($spos))$spos = 50;
            if(empty($icon_box_width))$icon_box_width = 30;
            if(empty($icon_box_height))$icon_box_height = 30;
            if($position == '')
                $pos = "right";
            else 
                $pos = $position;

            // the slider div in appropriate file like left div is in left.php,right in right.php ..
            include("tpls/".$pos.".php");
        }
    }
}
 
function wpsw_menu(){
    /*
    add_menu_page(  "Sliding Widgets",
                    "Sliding Widgets",
                    "administrator",
                    "wpsw_panel",
                    "wpsw_settings",
                    "dashicons-text"
                );
     * 
     */
    add_theme_page( "Sliding Widgets",
                    "Sliding Widgets",
                    "administrator",
                    "wpsw_panel",
                    "wpsw_settings" );
}

/*
 * Settings page
 */
function wpsw_settings(){
    include("tpls/settings.php");
}

/*
 * Save settings
 */
function wpsw_save_settings(){
    update_option('wpbs_opt',$_POST['wpbs__opt']);
    die('Sliding Widgets Settings Updated');
}


function wpsw_admin_scripts(){
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-form');
    wp_enqueue_script('sw-mini-color-js',  plugins_url("sliding-widgets/js/admin/jquery.miniColors.js"));
    wp_enqueue_style('sw-mini-color-css',  plugins_url("sliding-widgets/css/admin/jquery.miniColors.css"));
    wp_enqueue_style('sw-admin-css',  plugins_url("sliding-widgets/css/admin/admin.css"));
}

function wpsw_front_scripts(){
    wp_enqueue_style('sw-site-css',  plugins_url("sliding-widgets/css/site/style.css"));
}

add_action('admin_menu','wpsw_menu');
add_action('wp_enqueue_scripts','wpsw_front_scripts');
add_action('admin_enqueue_scripts','wpsw_admin_scripts');
add_action('wp_head','wpsw_header');
add_action('wp_footer','wpsw_sliders');
add_action('wp_ajax_wpsw_save_settings','wpsw_save_settings');
add_action('init','wpsw_widget_area');
