<?php
/**
 * Development environment config settings
 *
 * Enter any WordPress config settings that are specific to this environment 
 * in this file.
 * 
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */
  
// ** MySQL settings - You can get this info from your web host ** //
define('DB_NAME', '');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
 define('WP_DEBUG', true);
 define('WP_DEBUG_DISPLAY', true);
 
 /* Set Home */
 define( 'WP_HOME', 'http://local.d3v' );
 define( 'WP_SITEURL', 'http://local.d3v/' );
 
 /* Disable the theme and plugin installers and editors */
 define( 'DISALLOW_FILE_MODS', false );
 define( 'DISALLOW_FILE_EDIT', false );
 
 /* Force SSL */
 define('FORCE_SSL_LOGIN', false);
 define('FORCE_SSL_ADMIN', false);
 
 # Disable all automatic updates:
 define( 'AUTOMATIC_UPDATER_DISABLED', true );
 # Disable all core updates:
 define( 'WP_AUTO_UPDATE_CORE', false );