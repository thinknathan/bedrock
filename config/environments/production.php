<?php
/** Production */
ini_set('display_errors', 0);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', false);
/** Disable file modifications via plugin/theme editor */
define('DISALLOW_FILE_EDIT', true);
define('WP_POST_REVISIONS', 3);
