<?php
/**
 * Class Theme_Init
 *
 * @package KingdomOne
 */

namespace KingdomOne;

/**
 * Theme Initialization
 * Enqueues styles and scripts
 */
class Theme_Init {

	/**
	 * Theme_Init constructor.
	 */
	public function __construct() {
		$this->load_required_files();
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'dequeue_scripts' ), 40 );
	}

	/**
	 * Load the required files
	 */
	private function load_required_files() {
		$files = array(
			'login-handler'           => 'Login_Handler',
			'admin-dashboard-handler' => 'Admin_Dashboard_Handler',
		);

		foreach ( $files as $file => $class ) {
			require_once get_theme_file_path( "/includes/class-{$file}.php" );
			if ( $class ) {
				$class = "KingdomOne\\{$class}";
				new $class();
			}
		}
	}

	/**
	 * Enqueue the styles and scripts
	 */
	public function enqueue_styles() {
		$k1_global = require_once get_stylesheet_directory() . '/build/global.asset.php';
		wp_enqueue_style(
			'k1-global',
			get_stylesheet_directory_uri() . '/build/global.css',
			array_unique( array( ...$k1_global['dependencies'], 'cs' ) ),
			$k1_global['version']
		);
		wp_enqueue_script(
			'k1-global',
			get_stylesheet_directory_uri() . '/build/global.js',
			$k1_global['dependencies'],
			$k1_global['version'],
			array( 'strategy' => 'defer' )
		);
		wp_localize_script(
			'k1-global',
			'k1SiteData',
			array(
				'root_url' => get_site_url(),
			)
		);
	}

	/**
	 * Dequeue the parent theme's styles
	 */
	public function dequeue_scripts() {
		wp_dequeue_style( 'x-child' );
	}
}