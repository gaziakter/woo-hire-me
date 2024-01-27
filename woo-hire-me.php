<?php 
/**
 * Plugin Name:       Woo Hire Me
 * Plugin URI:        https://gaziakter.com/plugin/plugin-demo
 * Description:       Basic plugin demo for use future
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Gazi Akter
 * Author URI:        https://gaziakter.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       woo-hire
 * Domain Path:       /languages
 */

 if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// //Enquew Style and Script
function woo_hire_script_style() {

    wp_enqueue_style( 'woo-hire-style', plugin_dir_url( __FILE__ ) . "assets/woo-hire-style.css", null, time() );
    wp_enqueue_script( 'woo-hire-js', plugin_dir_url( __FILE__ ) . "assets/woo-hire-script.js", array( 'jquery' ), time(), true );

}

add_action( 'wp_enqueue_scripts', 'woo_hire_script_style' );



// Create hire_me shortcode 
function woo_hire_create_shortcode() {
    echo "This is short code";
    ?>
    <div class="woo-hire-menu">
        <ul>
            <li id="select_service">Select Service</li>
                <ul id="sevice_list">
                    <li>Web Development</li>
                    <li>Web Development</li>
                    <li>Web Development</li>
                    <li>Web Development</li>
                </ul>

        </ul>
        <ul>
            <li>Select package</li>
            <li>Basic - Web Development</li>
        </ul>
        <ul>
            <li><a href="#">Checkout</a></li>
        </ul>
    </div>
  <?php
}
add_shortcode('hire_me', 'woo_hire_create_shortcode');



