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

    wp_enqueue_style( 'woohire-style', plugin_dir_url( __FILE__ ) . "assets/css/woohire-style.css", null, time() );
    wp_enqueue_script( 'woohire-js', plugin_dir_url( __FILE__ ) . "assets/js/woohire-script.js", array( 'jquery' ), time(), true );

}

add_action( 'wp_enqueue_scripts', 'woo_hire_script_style' );



// function that runs when shortcode is called
function woohire_shortcode() { 
  
    // Things that you want to do.
    $html = '
    <div class="accordion-container">
    <h2>jQuery Accordion</h2>
    <div class="set">
      <a href="#">
        Vestibulum 
        <i class="fa fa-plus"></i>
      </a>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
      </div>
    </div>
    <div class="set">
      <a href="#">
        Phasellus 
        <i class="fa fa-plus"></i>
      </a>
      <div class="content">
        <p> Aliquam cursus vitae nulla non rhoncus. Nunc condimentum erat nec dictum tempus. Suspendisse aliquam erat hendrerit vehicula vestibulum.</p>
      </div>
    </div>
    <div class="set">
      <a href="#">
        Praesent 
        <i class="fa fa-plus"></i>
      </a>
      <div class="content">
        <p>Pellentesque aliquam ligula libero, vitae imperdiet diam porta vitae. sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
      </div>
    </div>
    <div class="set">
      <a href="#">
        Curabitur 
        <i class="fa fa-plus"></i> 
      </a>
      <div class="content">
        <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae luctus odio pretium scelerisque. </p>
      </div>
    </div>
  </div>
    '; 
      
    // Output needs to be return
    return $html;
}
// register shortcode
add_shortcode('woohire', 'woohire_shortcode');
