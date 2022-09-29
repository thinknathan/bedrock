<?php

/**
 * Configuration overrides for WP_ENV === 'production'
 */

use Roots\WPConfig\Config;

ini_set('display_errors', 0);
Config::define('WP_DEBUG_DISPLAY', true);
Config::define('SCRIPT_DEBUG', true);
Config::define('DISALLOW_INDEXING', false);
