<?php


if( !function_exists ('symple_shortcodes_scripts') ) :
	function symple_shortcodes_scripts() {

		$scripts_dir = get_template_directory(). '/symple-shortcodes/';
		

		// Make sure jquery is loaded
		wp_enqueue_script( 'jquery' );

		// Register scripts
		wp_register_script( 'symple_tabs', $scripts_dir . 'js/symple_tabs.js', array ( 'jquery', 'jquery-ui-tabs'), '1.0', true );
		wp_register_script( 'symple_toggle', $scripts_dir . 'js/symple_toggle.js', 'jquery', '1.0', true );
		wp_register_script( 'symple_accordion', $scripts_dir . 'js/symple_accordion.js', array ( 'jquery', 'jquery-ui-accordion'), '1.0', true );
		wp_register_script( 'symple_googlemap',  $scripts_dir . 'js/symple_googlemap.js', array('jquery'), '1.0', true );
		wp_register_script( 'symple_googlemap_api', 'https://maps.googleapis.com/maps/api/js?sensor=false', array('jquery'), '1.0', true );
		wp_register_script( 'symple_skillbar', $scripts_dir . 'js/symple_skillbar.js', array ( 'jquery' ), '1.0', true );
		wp_register_script( 'symple_scroll_fade', $scripts_dir . 'js/symple_scroll_fade.js', array ( 'jquery' ), '1.0', true );

		// Enqueue CSS
		wp_enqueue_style( 'symple_shortcode_styles',get_template_directory_uri() . '/symple-shortcodes/css/symple_shortcodes_styles.css' );
		wp_enqueue_style( 'symple_shortcodes_font_awesome', get_template_directory_uri() . '/symple-shortcodes/css/font-awesome.min.css.css' );
		
	}
	add_action('wp_enqueue_scripts', 'symple_shortcodes_scripts');
endif;