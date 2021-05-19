<?php
/*
Plugin Name: math
Plugin URI: https://akismet.com/
Description: i say just love ourself
Version: 1.0.0
Author: Automattic
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: akismet
*/

add_action('admin_menu','add_menu_uppertunity');
function add_menu_uppertunity(){
    add_menu_page(
        'ریاضیات محث',
        'معادلات ریاضی',
        'manage_options',
        'slug_menu',
      'math',
        'dashicons-palmtree'

    );
    add_submenu_page(
        'slug_menu'
        ,'صفحه عملیات فاکتوریل'
        ,'فاکتوریل '
        ,'manage_options'
        ,'slug_menu_math1'
        ,'fact'
        ,'1'


    );
    add_submenu_page(
        'slug_menu'
        ,'صفحه عملیات اعداد اول'
        ,'اعداد اول '
        ,'manage_options'
        ,'slug_menu_math2'
        ,'aval'
        ,'2'


    );
    add_submenu_page(
        'slug_menu'
        ,' کاربران ویژه '
        ,'کاربران وِژه'
        ,'manage_options'
        ,'slug_menu_math3'
        ,'maghsomalih'
        ,'3'


    );

}

function math(){

        include 'views\main_plugin_math.php';
    }
function fact(){
    include 'fact\fact.php';
}
function aval(){

    include 'aval\aval.php';
}
function maghsomalih(){


    include 'maghsomalih\maghsomalih.php';



    }
add_action('add_meta_boxes','add_meta_box_image');
    function add_meta_box_image(){
        add_meta_box(
            'meta_box_img'
            ,'معادلات دو مجهولی ریاضی'
            ,'show_meta'
            ,'post'
            ,'advanced'
            ,'high'
        );




    }













