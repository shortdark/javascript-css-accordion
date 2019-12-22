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

add_action('wp_head', 'sdjca_add_to_head');
function sdjca_add_to_head() {
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

add_action('wp_footer', 'sdjca_add_to_footer');
function sdjca_add_to_footer() {
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

// This adds the content from the shortcode onto the page
function sdjca_add_content_from_shortcode( $atts, $content = null ) {
        ob_start();
        ?><div onclick="accordionDisplay('FAQ<?php echo $atts['id']; ?>')" class="sscustom-block-wrap">
<span class="sscustom-btn sscustom-block sscustom-black sscustom-left-align"><?php echo $atts['title']; ?><span class="FAQ<?php echo $atts['id']; ?>-plus ss$
<div id="FAQ<?php echo $atts['id']; ?>" class="sscustom-container sscustom-hide"><?php echo $atts['content']; ?></div>
</div><?php
        return ob_get_clean();
}
add_shortcode( 'sdjca', 'sdjca_add_content_from_shortcode' );



/****************************
 ** LOAD PLUGIN TEXT DOMAIN
 ****************************/
function sdjca_load_textdomain() {
    load_plugin_textdomain('javascript-css-accordion', false, dirname(plugin_basename(__FILE__)) . '/languages');
}
add_action('init', 'sdjca_load_textdomain');
