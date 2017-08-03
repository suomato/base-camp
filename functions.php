<?php

require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/lib/helpers.php'); // Require helpers.php before anything else

// Require all config files
require_once_dir('config', $recursive = true);

