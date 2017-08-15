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
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
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
    case 'domain.d3v':
        define('WP_ENV', 'dev');
        break;
    
    case 'staging.smng.fyi':
        define('WP_ENV', 'stage');
        break;

    case 'www.domain.de':
    default: 
        define('WP_ENV', 'prod');
}

