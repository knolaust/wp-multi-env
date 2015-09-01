<?php
/**
 * Setup environments
 * 
 * Set environment based on the current server hostname, this is stored
 * in the $hostname variable
 * 
 * You can define the current environment via: 
 *     define('WP_ENV', 'production');
 * 
 * @package    Knol Aust WordPress Multi-Environment Config
 * @version    1.0
 * @author     Knol Aust <knolaust.com>
 */


/*
 * Set environment based on hostname
 *
 * If you just use localhost for your local test environment then in place of:
 *   case 'domain.dev':
 *
 * Just use:
 *   case 'localhost':
 *
 */
switch ($hostname) {
    case 'domain.dev':
        define('WP_ENV', 'development');
        break;
    
    case 'staging.domain.com':
        define('WP_ENV', 'staging');
        break;

    case 'www.domain.com':
    default: 
        define('WP_ENV', 'production');
}

