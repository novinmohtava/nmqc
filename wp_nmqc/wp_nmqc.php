<?php
/*
  Plugin Name: پلاگین ارتباط آسان نوین محتوا
  Description: با استفاده از این پلاگین به راحتی با کاربران وبسایت خود ارتباط برقرار نمایید.  <a href='http://www.novinmohtava.com/parvazproject/help/47' target='_blank'>آموزش استفاده</a>
  Author: novinmohtava.com
  Author URI: https://novinmohtava.com
  Version: 0.1
 */

/*
 * Back-end - Setting 
 */
add_action('admin_menu', 'admin_to_menu_nmqc');
function admin_to_menu_nmqc(){
    add_menu_page('پلاگین تماس سریع', 'پلاگین تماس سریع', 'manage_options', 'nmqc-admin-menu', 'nmqc_admin_menu' , 'dashicons-smartphone');
}
function nmqc_admin_menu(){
    echo 110;
    echo 113;   
} 

/*/
 * Back-end - Widget
 */

/*
 * Editor and Front-end
 */

function footag_func( $atts ) {
    if ( isset($atts['phone'])){
        return __();
    }
}
add_shortcode( 'nmqc', 'footag_func' );



