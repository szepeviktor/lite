<?php
/**
 * General Functions
 *
 * @package Plugins/Site/Events/Functions
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Get the updater
 *
 * This function provides an abstraction layer for add-ons, so that they are not
 * required to include their own bespoke copies of it.
 *
 * @since 2.0.12
 *
 * @return mixed
 */
function sugar_calendar_get_updater() {

	// Name of core updater function
	$updater = '\\Sugar_Calendar\\Standard\\License\\get_updater';

	// Return the updater if callable
	if ( function_exists( $updater ) && is_callable( $updater ) ) {
		return call_user_func( $updater );
	}

	// Return false if updater not found
	return false;
}
