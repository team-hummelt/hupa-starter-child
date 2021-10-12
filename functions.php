<?php
// TODO SHOW SIDEBAR
const HUPA_SIDEBAR = true;
// TODO SHOW TOOLS
const HUPA_TOOLS = true;
// TODO SHOW CAROUSEL
const HUPA_CAROUSEL = true;
// TODO SHOW MAPS
const HUPA_MAPS = true;
// TODO SHOW CUSTOM FOOTER
const CUSTOM_FOOTER = true;
// TODO SHOW CUSTOM HEADER
const CUSTOM_HEADER = true;

	// style and scripts
	 add_action( 'wp_enqueue_scripts', 'bootscore_5_child_enqueue_styles' );
	 function bootscore_5_child_enqueue_styles() {
         
         // style.css
         wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
         
         // custom.js
         wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);

     } 
