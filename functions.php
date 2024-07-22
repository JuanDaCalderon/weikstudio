<?php
/**
 * weikstudio functions and definitions
 *
 *
 * @package weikstudio
 */

 /**
 * Enqueue scripts and styles.
 */
if ( ! function_exists( 'weikstudio_bootstrap_scripts' ) ) :
	/**
	 * Enqueue Bootstrap scripts and styles.
	 *
	 * @return void
	 */
	function weikstudio_bootstrap_scripts() {
		wp_enqueue_style('weikstudio-bootstrap', get_parent_theme_file_uri('assets/css/bootstrap.min.css'), array(), wp_get_theme()->get('Version'), 'all');
		wp_enqueue_style('weikstudio-global', get_parent_theme_file_uri('assets/css/weikstudio/global.css'));
		wp_enqueue_style('weikstudio-header', get_parent_theme_file_uri('assets/css/weikstudio/header.css'));
		wp_enqueue_style('weikstudio-footer', get_parent_theme_file_uri('assets/css/weikstudio/footer.css'));
		wp_dequeue_script( 'all' );
		wp_enqueue_script('weikstudio-bootstrap', get_parent_theme_file_uri('assets/js/bootstrap.bundle.min.js'), array(), wp_get_theme()->get('Version'), true);
	}
endif;

add_action( 'wp_enqueue_scripts', 'weikstudio_bootstrap_scripts' );
