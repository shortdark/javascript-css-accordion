<?php
/**
 * @package javascript-css-accordion
 * @version 0.0.01
 * Plugin Name: Javascript CSS Accordion
 * Plugin URI: http://www.shortdark.net/wordpress-plugin/javascript-css-accordion/
 * Description: This WordPress plugin allows the user to create an accordion on their website that uses plain javascript, not jQuery.
 * Author: Neil Ludlow
 * Text Domain: javascript-css-accordion
 * Version: 0.0.01
 * Author URI: http://www.shortdark.net/
 */

/**************************
 ** PREVENT DIRECT ACCESS
 **************************/

defined('ABSPATH') or die('No script kiddies please!');


/**********************
 ** ASSEMBLE THE PAGE
 **********************/

add_action('wp_head', 'jca_add_to_head');
function jca_add_to_head() {
    echo '<style>
.sscustom-container, .sscustom-panel {
    padding: 25px 16px;
}
.sscustom-hide {
    display: none!important;
}
.sscustom-show-block, .sscustom-show {
    display: block!important;
}
.sscustom-black, .sscustom-hover-black:hover {
    color: #333!important;
    background-color: #fff!important;
}
.sscustom-left-align {
    text-align: left!important;
}
.sscustom-block {
    display: block;
    width: 100%;
    border: 1px solid #eee!important;
    font-weight: bold;
    font-size: 30px;
}
.sscustom-block-wrap {
    display: block;
    width: 100%;
    border: 1px solid #eee!important;
    margin: 20px 0;
}
.sscustom-btn, .w3-button {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.sscustom-btn, .sscustom-button {
    border: none;
    display: inline-block;
    padding: 8px 16px;
    vertical-align: middle;
    overflow: hidden;
    text-decoration: none;
    color: inherit;
    background-color: inherit;
    text-align: center;
    cursor: pointer;
}
.ss-symbol {
    position:absolute;
    right:0px;
    padding:0px 30px;
    color:#ec1a5c;
}
</style>';
}

add_action('wp_footer', 'jca_add_to_footer');
function jca_add_to_footer() {
    echo '<script type=\'text/javascript\'>
function accordionDisplay(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("sscustom-show") == -1) {
    x.className += " sscustom-show";
   y = document.getElementsByClassName(id+\'-plus\');
   y[0].style.display = \'none\';
    z = document.getElementsByClassName(id+\'-minus\');
    z[0].style.display = \'inline\';
  } else {
    x.className = x.className.replace(" sscustom-show", "");
   y = document.getElementsByClassName(id+\'-plus\');
   y[0].style.display = \'inline\';
    z = document.getElementsByClassName(id+\'-minus\');
    z[0].style.display = \'none\';
  }
}
</script>';
}


<div onclick="accordionDisplay('FAQ1')" class="sscustom-block-wrap"><span class="sscustom-btn sscustom-block sscustom-black sscustom-left-align">How much does a mobile app cost?<span class="FAQ1-plus ss-symbol" style="display: inline;">+</span><span class="FAQ1-minus ss-symbol" style="display: none;">-</span></span>
<div id="FAQ1" class="sscustom-container sscustom-hide">
A mobile app generally can cost anywhere upwards of £5,000 very much dependant on design, functionality, framework used and the size of the development team. Each costing is bespoke to the requirements of the project.
</div>
</div>

// This assembles the plugin page.
function jca_add_to_content($content) {
    $content .= '<div onclick="accordionDisplay(\'FAQ1\')" class="sscustom-block-wrap"><span class="sscustom-btn sscustom-block sscustom-black sscustom-left-align">Test title<span class="FAQ1-plus ss-symbol" style="display: inline;">+</span><span class="FAQ1-minus ss-symbol" style="display: none;">-</span></span>
<div id="FAQ1" class="sscustom-container sscustom-hide">
Test content!
</div>
</div>';
    return $content;
}
// Add HTML to Page the content.
add_filter('the_content', 'jca_add_to_content');


/****************************
 ** LOAD PLUGIN TEXT DOMAIN
 ****************************/
function sdatf_load_textdomain() {
    load_plugin_textdomain('add-target-fixer', false, dirname(plugin_basename(__FILE__)) . '/languages');
}
add_action('init', 'sdatf_load_textdomain');