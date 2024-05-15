<?php
/*
Plugin Name: CI Feet and inches calculator
Plugin URI: https://www.calculator.io/feet-and-inches-calculator/
Description: A feet and inches calculator helps with math problems. Add feet and inches, subtract, multiply, or divide them with ease.
Version: 1.0.0
Author: Feet and Inches Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_feet_and_inches_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Feet and Inches Calculator by www.calculator.io";

function display_calcio_ci_feet_and_inches_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Feet and Inches Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_feet_and_inches_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_feet_and_inches_calculator', 'display_calcio_ci_feet_and_inches_calculator' );