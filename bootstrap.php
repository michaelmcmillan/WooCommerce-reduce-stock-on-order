<?php
/**
 * Plugin Name: WooCommerce Reduce Stock on Order 
 * Plugin URI: https://github.com/michaelmcmillan/WooCommerce-reduce-stock-on-order 
 * Description: A plugin which avoids collisions in checkout by reducing stock when an order is placed. 
 * Version: 0.0.1
 * Author: Michael McMillan
 * License: MIT
 */
//if (!defined('ABSPATH') or !defined('WPINC')) exit;

require_once plugin_dir_path (__FILE__) . 'class-wc-reduce-stock.php';
