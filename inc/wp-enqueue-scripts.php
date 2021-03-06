<?php

if(!function_exists('theme_scripts_style')):

	/**
	 * Theme external style and script.
	 */
	function theme_scripts_style(){

		wp_enqueue_script( 'jquery' );

		/* Font awesome [asset/helper/font-awesome-4.7.0/] */
		wp_enqueue_style(	'font-awesome',	HELPERS .'font-awesome-4.7.0/css/font-awesome.min.css' );

		/* Bootstrap [asset/helper/bootstrap-3.3.7-dist/] */
		wp_enqueue_style(	'bootstrap',	HELPERS .'bootstrap-3.3.7-dist/css/bootstrap.min.css' );
		wp_enqueue_script(	'bootstrap',	HELPERS .'bootstrap-3.3.7-dist/js/bootstrap.min.js', array(), true, true );

		/* Bootstrap [asset/helper/bootstrap-3.3.7-dist/] */
		wp_enqueue_style(	'owlcarousel',	HELPERS .'OwlCarousel2-2.2.0/owl.carousel.css' );
		wp_enqueue_script(	'owlcarousel',	HELPERS .'OwlCarousel2-2.2.0/owl.carousel.min.js', array(), true, true );

		/* Main css  */
		wp_enqueue_style( 'theme', get_stylesheet_uri() );
		
		/*  Main js */
		wp_enqueue_script(	'theme',		ASSETS . 'js/main.js',  array(), true, true );
		wp_localize_script(	'theme', 'o', array('homeurl'=>get_bloginfo('url')) );
	}
	add_action( 'wp_enqueue_scripts', 'theme_scripts_style' );

endif;