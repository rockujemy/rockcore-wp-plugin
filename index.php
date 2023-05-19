<?php
declare(strict_types=1);

/*
Plugin Name: Rockujemmy Core
Author: Grzegorz Jamróz
Author URI: https://www.rockujemy.pl
Description: Plugin provides the necessary components for another Rockujemy plugins.
Version: 1.0.0
Text Domain: rockujemy-core-plugin
*/

/** Prevent direct access to index.php */

use RockujemyCore\Plugin;

if (!defined('WPINC')) {
    die();
}

define('ROCKUJEMY_CORE_GET_PLUGIN_DIRECTORY', dirname(__FILE__));
define('ROCKUJEMY_CORE_GET_PLUGIN_DIRECTORY_URI', plugin_dir_url(__FILE__));

require_once __DIR__ . '/lib/bootstrap.php';

register_activation_hook(__FILE__, [new Plugin(), 'activate']);
register_deactivation_hook(__FILE__, [new Plugin(), 'deactivate']);


