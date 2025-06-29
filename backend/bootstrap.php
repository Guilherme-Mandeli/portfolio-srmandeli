<?php
// Defines ENV to indicate the project environment
if ( ! defined('ENV') ) {
    define('ENV', 'development'); // development | production
}

// Defines BASE_PATH pointing to the project root
if ( ! defined('BASE_PATH') ) {
    define( 'BASE_PATH', realpath(__DIR__) );
}

// Database connection
return require_once BASE_PATH . '/config/database.php';
