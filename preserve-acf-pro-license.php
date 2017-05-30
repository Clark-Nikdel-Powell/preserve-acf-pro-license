<?php

/**
 * Plugin Name: Preserve ACF Pro License
 * Plugin URI: http://clarknikdelpowell.com
 * Description: A WP must-use plugin to preserve your ACF Pro license info after migrating data via WP Migrate DB or some other process.
 * Version: 1.1.0
 * Author: Glenn Welser
 * Author URI: hhttp://clarknikdelpowell.com/agency/people/glenn
 * License: GPL2
 *
 * Copyright (C) 2017  Glenn Welser  glenn@clarknikdelpowell.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
class Preserve_Acf_Pro_License {

	/**
	 * Setup WordPress hooks.
	 *
	 * @see https://deliciousbrains.com/tweaking-wp-migrate-db-pro-actions-filters/ WP Migrate DB Pro blog post about actions and filters.
	 * @see https://github.com/deliciousbrains/wp-migrate-db-pro-tweaks/blob/master/wp-migrate-db-pro-tweaks.php#L27 Example plugin demonstrating available hooks and filters.
	 *
	 * @since 1.0.0
	 */
	public function run() {

		/**
		 * Use the first action if you use WP Migrate DB Pro.
		 * Use the second action if you have some other process.
		 */
		add_action( 'wpmdb_migration_complete', array( $this, 'preserve_license' ) );
		add_action( 'plugins_loaded', array( $this, 'preserve_license' ) );

	}

	/**
	 * Update ACF Pro license via ACF Pro function.
	 *
	 * @since 1.0.0
	 *
	 * @return bool true is value has changed, false if not or if update failed
	 */
	public function preserve_license() {

		return acf_pro_update_license( ACF_PRO_LICENSE );

	}

}

// Instantiate
$eat_this_license_and_like_it = new Preserve_Acf_Pro_License();
$eat_this_license_and_like_it->run();
