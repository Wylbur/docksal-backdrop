<?php
/**
 * @file
 * Main Backdrop CMS configuration file.
 */

$settings['update_free_access'] = TRUE;

$settings['hash_salt'] = 'ohhellsyeah';

/**
 * Base URL (optional).
 */
// $base_url = 'http://www.example.com'; // NO trailing slash!

ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);

ini_set('session.gc_maxlifetime', 200000);

ini_set('session.cookie_lifetime', 2000000);

/**
 * Fast 404 pages:
 *
 */
$settings['404_fast_paths_exclude'] = '/\/(?:styles)|(?:system\/files)\//';
$settings['404_fast_paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
$settings['404_fast_html'] = '<!DOCTYPE html><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';

/**
 * Drupal backwards compatibility.
 */
$settings['backdrop_drupal_compatibility'] = TRUE;

/**
 * Testing to see if we are on the LIVE site
 */ 
$live_host = "/home/user/repo";
if (is_dir($live_host)) {
  /* LIVE Site instructions*/

  /**
   * If there is a Docksal settings file, then include it
   */
  $live_settings = __DIR__ . "/settings.live.php";
  if (file_exists($live_settings)) {
    include $live_settings;
  }

} else {
  /**
   * If there is a Docksal settings file, then include it
   */
  $docksal_settings = __DIR__ . "/settings.docksal.php";
  if (file_exists($docksal_settings)) {
    include $docksal_settings;
  }
}

/**
 * Include a local settings file.
 */
if (file_exists(__DIR__ . '/settings.local.php')) {
  include __DIR__ . '/settings.local.php';
}