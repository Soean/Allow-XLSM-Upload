<?php
/**
 * Plugin Name: Allow XLSM Upload
 * Description: Adds upload support for .xlsm mime type (excel with macros)
 * Version:     1.0
 * Author:      Soeren Wrede
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Adds upload support for .xlsm mime type (excel with macros)
 * @param  array $existing_mimes supported types.
 * @return array supported types + xlsm.
 */
function allow_upload_xlsm_mime( $existing_mimes = array() ) {
	$existing_mimes['xlsm'] = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
	return $existing_mimes;
}
add_filter( 'upload_mimes', 'allow_upload_xlsm_mime' );
