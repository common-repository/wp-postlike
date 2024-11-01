<?php
/*
Plugin Name: WP-Postlike
Plugin URI: http://fatesinger.com/799
Description: Adds an AJAX like for your WordPress blog's post/page.
Version: 2.0.0
Author: Bigfa
Author URI: http://fatesinger.com
*/

define('WPL_VERSION', '2.0.0');
define('WPL_URL', plugins_url('', __FILE__));
define('WPL_PATH', dirname(__FILE__));
define('WPL_ADMIN_URL', admin_url());

/**
 * 加载函数
 */
require WPL_PATH . '/functions.php';
