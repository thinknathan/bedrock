<?php
/**
 * Configuration overrides for WP_ENV === 'production'
 */

use Roots\WPConfig\Config;

Config::define('WP_DEBUG_DISPLAY', false);
Config::define('SCRIPT_DEBUG', false);
Config::define('DISALLOW_FILE_EDIT', true);
Config::define('WP_POST_REVISIONS', 3);

ini_set('display_errors', '0');
