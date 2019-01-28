<?php
function baka_style(){
	wp_enqueue_style('baka_default_style', get_stylesheet_uri());
	#Bootstrap_Files
	wp_enqueue_style('bootstrap_stylei',get_theme_file_uri('/css/bootstrap.min.css'));
	wp_enqueue_style('bootstrap_styleii',get_theme_file_uri('/css/font-aweswome.min.css'));
	wp_enqueue_style('bootstrap_styleiii',get_theme_file_uri('/css/owl.theme.default.min.css'));

	#Font Files

	// #JS  
	wp_enqueue_scripts('bootstrap_style1',get_theme_file_uri('/js/bootstrap.min.js'),array(),false,'all');
	wp_enqueue_scripts('bootstrap_style2',get_theme_file_uri('/js/custom.js'),array(),false,'all');
	wp_enqueue_scripts('bootstrap_style3',get_theme_file_uri('/js/jquery.js'),array(),false,'all');
	wp_enqueue_scripts('bootstrap_style4',get_theme_file_uri('/js/owl.carousel.min.js'),array(),false,'all');
	wp_enqueue_scripts('bootstrap_style5',get_theme_file_uri('/js/smoothscroll.js'),array(),false,'all');
	
}
add_action('wp_enqueue_scripts',baka_style());
?>