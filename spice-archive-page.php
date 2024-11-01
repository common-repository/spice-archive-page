<?php
/*
Plugin Name: Spice Archive page
Description: This is spice archive page plugin. Display your post in your page, post and shortcode enabled area.
Version: 0.1
Author: Spicewp
Author URI: https://spicewp.com
License: GPLv2 or later
Text Domain: spice-archive-page
Domain Path: /languages
*/

/*
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
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

// Make sure we don't expose any info if called directly

define( 'SPICEAR__PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'SPICEAR__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define("SPICEAR", "spice-archive-page");

/*
* Loading a text domain code for plugin translation 
*/

add_action('plugins_loaded', 'spice_archive_load_textdomain');
function spice_archive_load_textdomain() {
	load_plugin_textdomain( 'SPICEAR', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}

// Include info-page
include(SPICEAR__PLUGIN_DIR.'/shortcodes-and-info.php');

function spicearchive_fun( $atts){
	ob_start();
	// Define shortcode attributes.
	$short_code_atts = shortcode_atts( 
	apply_filters( 'spice_archive_page_shortcode', array(
		'type' => 'yearly',
		'limit' => '1000',
	) )
	, $atts );
	
	$spice_archive_type = $short_code_atts['type']; // Post type daily, monthly, yearly
	$spice_archive_limit = $short_code_atts['limit'];
	
	$args = apply_filters( 'spice_archive_page_shortcode',array(
    'type'            => $spice_archive_type,
	'limit'           => $spice_archive_limit,
    
));

	wp_get_archives( apply_filters( 'spice_archive_page_args', $args ) );
	return ob_get_clean();
}
add_shortcode( 'spicearchive', 'spicearchive_fun' );




?>