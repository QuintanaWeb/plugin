<?php
/**
 * WordCamp Pontevedra 2022 demo plugin.
 *
 * @link              hhttps://quintanaweb.com/
 * @since             1.0.0
 * @package           QW-OptiPer
 *
 * @wordpress-plugin
 * Plugin Name:       QW-OptiPer
 * Plugin URI:        https://quintanaweb.com/plugin/
 * Description:       Plugin para optimizar el fichero <code>functions.php</code> y alguna cosa más del aspecto visual del entorno. Puedes activarlo a placer (o no) tu eliges.
 * Version:           1.0.5
 * Author:            QuintanaWeb
 * Author URI:        https://quintanaweb.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       quintanaweb
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Begins execution of plugin.
 *
 * @return void
 */
function run_pontewordcamp() {
	if ( is_admin() ) {
		include_once plugin_dir_path( __FILE__ ) . '/class-pontewordcamp-updater.php';
		$config  = array(
			'github_uri' => 'https://api.github.com/repos/QuintanaWeb/plugin/releases',
			'token'      => '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',
		);
		$updater = new Ponte_WordCamp_Updater( $config, __FILE__ );
		$updater->fgr_check_update();
	}
}

run_pontewordcamp();
