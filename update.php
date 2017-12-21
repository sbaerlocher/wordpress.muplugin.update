<?php
/*
 * @author  Simon Bärlocher <s.baerlocher@sbaerlocher.ch>
 * Plugin Name: Update 
 * Plugin URI:  https://github.com/sbaerlocher/wordpress.muplugin.update
 * Description: Plugin which turns on auto update for plugins, themes and translations.
 * Version:     1.0.0
 * License:     MIT
 * License URI: https://sbaerlo.ch/er/license
 * Author:      Simon Bärlocher
 * Author URI:  https://github.com/sbaerlocher
 * Text Domain: mailer
 * GitHub Plugin URI: https://github.com/sbaerlocher/wordpress.muplugin.update
 * GitHub Branch: master
 */

if(!defined( 'ABSPATH' )) exit;

add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
add_filter( 'auto_update_translation', '__return_true' );
