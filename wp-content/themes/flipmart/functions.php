<?php 

require_once('inc/redux/redux-core/framework.php');
require_once('inc/redux/sample/config.php');


?>

<?php 
function  flipmart_scripts() {
	wp_enqueue_style('font-css', get_template_directory_uri().'/assets/css/font-awesome.css', array(), '1.0', 'all');
	wp_enqueue_style('bootstrap-min', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0', 'all');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/main.css', array(), '1.0', 'all');
	wp_enqueue_style('blue-css', get_template_directory_uri().'/assets/css/blue.css', array(), '1.0', 'all');
	wp_enqueue_style('owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), '1.0', 'all');
	wp_enqueue_style('owl-transitions', get_template_directory_uri().'/assets/css/owl.transitions.css', array(), '1.0', 'all');
	wp_enqueue_style('animate-min', get_template_directory_uri().'/assets/css/animate.min.css', array(), '1.0', 'all');
	wp_enqueue_style('rateit-css', get_template_directory_uri().'/assets/css/rateit.css', array(), '1.0', 'all');
	wp_enqueue_style('bootstrap-select', get_template_directory_uri().'/assets/css/bootstrap-select.min.css', array(), '1.0', 'all');
	

	//js file
	wp_enqueue_script( 'jquery-main', get_template_directory_uri() . '/assets/js/jquery-1.11.1.min.js"', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'bootstrap-main', get_template_directory_uri() . '/assets/js/bootstrap.min.js"', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'jqueryhover-main', get_template_directory_uri() . '/assets/js/bootstrap-hover-dropdown.min.js"', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'jqueryowl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js"', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'echomain-main', get_template_directory_uri() . '/assets/js/echo.min.js"', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'easing-main', get_template_directory_uri() . '/assets/js/jquery.easing-1.3.min.js"', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'jqueryslider-main', get_template_directory_uri() . '/assets/js/bootstrap-slider.min.js"', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'rateit-main', get_template_directory_uri() . '/assets/js/jquery.rateit.min.js"', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'jquerylightbox-main', get_template_directory_uri() . '/assets/js/lightbox.min.js"', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'selectjs-main', get_template_directory_uri() . '/assets/js/bootstrap-select.min.js"', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'wowjs-main', get_template_directory_uri() . '/assets/js/wow.min.js"', array( 'jquery' ), 1.1, true );
	wp_enqueue_script( 'jsscript-main', get_template_directory_uri() . '/assets/js/scripts.js"', array( 'jquery' ), 1.1, true );

	
	
	
}
add_action( 'wp_enqueue_scripts', 'flipmart_scripts' );










?>