<?php

/*
Plugin Name: PHPurchase to Woocommerce Migration
Plugin URI: http://litextension.com/
Description:
Version: 1.0.0
Author: LitExtension
Author URI: http://litextension.com/
License: GPLv2
*/

/*
Copyright (C) 2015 LitExtension

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*/

function pwm_menu()
{
    add_options_page('LitExtension: PHPurchase to Woocommerce Migration', 'PHPurchase to Woocommerce Migration', 'activate_plugins', 'pwm_page', 'pwm_page');
}
add_action('admin_menu', 'pwm_menu');

function pwm_page(){
    $source_cart = 'PHPurchase';
    $product_link = 'http://litextension.com/woocommerce-migration-tool/phpurchase-to-woocommerce.html';
    include 'views/index.php';
}

function pwm_css_js(){
    wp_enqueue_style('pwm-style', plugins_url('css/style.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'pwm_css_js');

function pwm_url($path){
    return plugins_url($path, __FILE__);
}