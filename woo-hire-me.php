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

    wp_enqueue_style( 'font-awesome', plugin_dir_url( __FILE__ ) . "assets/css/font-awesome.min.css", null, time() );
    wp_enqueue_style( 'woohire-style', plugin_dir_url( __FILE__ ) . "assets/css/woohire-style.css", null, time() );
    wp_enqueue_script( 'woohire-js', plugin_dir_url( __FILE__ ) . "assets/js/woohire-script.js", array( 'jquery' ), time(), true );

}

add_action( 'wp_enqueue_scripts', 'woo_hire_script_style' );



// function that runs when shortcode is called
function woohire_shortcode() { 
  
    // Things that you want to do.
    $html = '
    <!-- Start Accordion Serction -->
    <div class="accordion-container">
       <h2>Choose the Service & Package</h2>
       <div class="set">
         <a href="#">
           WordPress Website Development 
           <i class="fa fa-plus"></i>
         </a>
         <div class="content">
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
          
           <!-- Start Tab section  -->
           <div class="tabs">
               <ul class="tabs-nav">
                 <li><a href="#tab-1">Basic</a></li>
                 <li><a href="#tab-2">Standard</a></li>
                 <li><a href="#tab-3">Premium</a></li>
               </ul>
             <div class="tabs-stage">
                 <section id="tab-1">
                 <div class="pricing-plans">
   
                 <div class="pricing-card basic">
                 <div class="heading">
                   <h4>BASIC</h4>
                   <p>for small websites or blogs</p>
                 </div>
                 <p class="price">$100</p>
                 <ul class="features">
                  <li class="fea-items">Domain and Hosting setup</li>
                  <li class="fea-items">WordPress installation & Demo Input</li>
                  <li class="fea-items">Content Upload</li>
                  <li class="fea-items">Number of Pages : 5</li>
                  <li class="fea-items">Speed Optimization</li>
                  <li class="fea-items">Multi-layer Security</li>
                  <li class="fea-items">Revision: 3</li>
                  <li class="fea-items">Support: 3 Months</li>
                  <li class="fea-items">Delivery Time: 3 Days</li>
                 </ul>
                 <a class="cta-btn" href = "link"> Order Now </a>
               </div>
                 </div>
                 <!-- Start Pricing Table Section -->
   
                 </section>
                 <section id="tab-2">
                 <!-- Start Pricing Table Section -->
                 <div class="pricing-plans">
                 
                 
                       <div class="pricing-card standard">
                         <div class="heading">
                           <h4>STANDARD</h4>
                           <p>for medium-sized businesses</p>
                         </div>
                         <p class="price">
                           $5
                           <sub>/month</sub>
                         </p>
                         <ul class="features">
                           <li>
                             <i class="fa-solid fa-check"></i>
                             <strong>Unlimited</strong> domain name
                           </li>
                           <li>
                             <i class="fa-solid fa-check"></i>
                             <strong>50 GB</strong> of disk space
                           </li>
                           <li>
                             <i class="fa-solid fa-check"></i>
                             <strong>500GB </strong>of bandwidth
                           </li>
                           <li>
                             <i class="fa-solid fa-check"></i>
                             <strong>10 MySQL</strong> database
                           </li>
                           <li>
                             <i class="fa-solid fa-check"></i>
                             <strong>50 email</strong> accounts
                           </li>
                           <li>
                             <i class="fa-solid fa-check"></i>
                             <strong>cPanel</strong> control panel
                           </li>
                           <li>
                             <i class="fa-solid fa-check"></i>
                             <strong>Free SSL</strong> certificate
                           </li>
                           <li>
                             <i class="fa-solid fa-check"></i>
                             <strong>24/7</strong> support
                           </li>
                         </ul>
                         <button class="cta-btn">SELECT</button>
                       </div>
   
                     </div>
                 </section>
                 <section id="tab-3">
                 <div class="pricing-plans">
                 <div class="pricing-card premium">
                 <div class="heading">
                   <h4>PREMIUM</h4>
                   <p>for small businesses</p>
                 </div>
                 <p class="price">
                   $10
                   <sub>/month</sub>
                 </p>
                 <ul class="features">
                   <li>
                     <i class="fa-solid fa-check"></i>
                     <strong>Unlimited</strong> domain name
                   </li>
                   <li>
                     <i class="fa-solid fa-check"></i>
                     <strong>100 GB</strong> of disk space
                   </li>
                   <li>
                     <i class="fa-solid fa-check"></i>
                     <strong>1TB </strong>of bandwidth
                   </li>
                   <li>
                     <i class="fa-solid fa-check"></i>
                     <strong>Unlimited MySQL</strong> database
                   </li>
                   <li>
                     <i class="fa-solid fa-check"></i>
                     <strong>Unlimited email</strong> accounts
                   </li>
                   <li>
                     <i class="fa-solid fa-check"></i>
                     <strong>cPanel</strong> control panel
                   </li>
                   <li>
                     <i class="fa-solid fa-check"></i>
                     <strong>Free SSL</strong> certificate
                   </li>
                   <li>
                     <i class="fa-solid fa-check"></i>
                     <strong>24/7 priority</strong> support
                   </li>
                   <li>
                     <i class="fa-solid fa-check"></i>
                     <strong>Advanced</strong> security features
                   </li>
                 </ul>
                 <button class="cta-btn">SELECT</button>
               </div>
                 </div>
   
                 </section>
             </div>
           </div>
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
     <!-- End Accordion Serction -->
   
    '; 
      
    // Output needs to be return
    return $html;
}
// register shortcode
add_shortcode('woohire', 'woohire_shortcode');
