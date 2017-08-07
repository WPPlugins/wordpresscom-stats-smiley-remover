<?php
/*
Plugin Name: WordPress.com Stats Smiley Remover
Plugin URI: http://thisismyurl.com/downloads/wordpress-com-stats-smiley-remover/
Description: The WordPress.com Stats Smiley Remover quickly removes the smiley face placed in the footer of your site by the WordPress.com Stats plugin.
Author: Christopher Ross
Author URI: http://thisismyurl.com/
Version: 14.11
*/


/**
 *
 * WordPress.com Stats Smiley Remover core file
 *
 * This file contains all the logic required for the plugin
 *
 * @link		http://wordpress.org/extend/plugins/wordpresscom-stats-smiley-remover/
 *
 * @package 	WordPress.com Stats Smiley Remover
 * @copyright	Copyright (c) 2008, Chrsitopher Ross
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 *
 * @since 		WordPress.com Stats Smiley Remover 1.0
 *
 *
 */


/**
 * Places the external CSS file into the enqueue function for WordPress.
 *
 * @author     Christopher Ross <info@thisismyurl.com>
 * @version    Release: @14.11@
 * @see        wp_enqueue_scripts()
 * @since      Class available since Release 14.11
 */
class thissimyurl_WPSmileyRemover {
	
	 /**
	  * Standard Constructor
	  *
      * @access public
      * @static
	  * @uses http://codex.wordpress.org/Function_Reference/add_action
      * @since Method available since Release 14.11
	  */
    public function __construct() {
 
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_style' ) );
     
    }
 
 
 	/**
	  * Standard Constructor
	  *
      * @access public
      * @static
	  * @uses http://codex.wordpress.org/Function_Reference/wp_enqueue_style
      * @since Method available since Release 14.11
	  */
    public function enqueue_style() {
		
        wp_enqueue_style( 'thisismyurl-wpsmileyremover', plugins_url( 'wordpresscom-stats-smiley-remover.css', __FILE__ ) );
    
	}
 
}

new thissimyurl_WPSmileyRemover;