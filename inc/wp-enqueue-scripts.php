<?php

if(function_exists('theme_scripts_style')):

	/**
	 * Theme external style and script.
	 */
	function theme_scripts_style(){

		wp_enqueue_script( 'jquery' );

		/* Bootstrap [asset/helper/bootstrap-3.3.7-dist/] */
		wp_enqueue_style(	'bootstrap-css', get_stylesheet_directory_uri() . '/asset/helper/bootstrap-3.3.7-dist/css/bootstrap.min.css' );
		wp_enqueue_script(	'bootstrap-js', get_template_directory_uri() . '/asset/helper/bootstrap-3.3.7-dist/js/bootstrap.min.js', [], '', true );

		/* Font awesome [asset/helper/font-awesome-4.7.0/] */
		wp_enqueue_style(	'font-awesome', get_stylesheet_directory_uri() . '/asset/helper/font-awesome-4.7.0/css/font-awesome.min.css' );
		
		/* Main css  */
		wp_enqueue_style( 'theme', get_stylesheet_uri() );
		
		/*  Main js */
		wp_enqueue_script(	'theme', get_template_directory_uri() . '/asset/js/main.js', [], '', true );

	}
	add_action( 'wp_enqueue_scripts', 'theme_scripts_style' );

endif;