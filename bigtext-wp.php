<?php
/**
 * Plugin Name: BigText WP
 * Plugin URI: 
 * Description: Easily use the BigText jQuery script by Zach Leatherman
 * Version: 0.1
 * Author: Keller Digital
 * Author URI: http://kellerdigital.com
 * License: MIT
 */
/*
Copyright 2013 Zach Leatherman

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/


function bigtext() {

	wp_enqueue_script( 'bigtext', plugins_url( 'js/bigtext.js' , __FILE__ ), array( 'jquery' ), null, true );
	wp_enqueue_script( 'call-bigtext', plugins_url( 'js/call-bigtext.js' , __FILE__ ), array( 'jquery' ), null, true );
	wp_enqueue_style(	'bigtext-style', plugins_url( 'bigtext-style.css' , __FILE__ ) );

}
add_action( 'wp_enqueue_scripts', 'bigtext');



//[bigtext] shortcode
function bigtext_func( $atts, $content = null ){
	return '<div class="bigtext"><span>' . $content . '</span></div>';
}
add_shortcode( 'bigtext', 'bigtext_func' );



?>