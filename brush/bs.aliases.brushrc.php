<?php

$projectname = 'bs';
$websiteuri  = 'brendasmeby.com';
$remoteuser  = 'brendasmeby';
$remotehost  = '173.236.95.18';
$webroot     = 'web';


$aliases['lc'] = array (
  'uri' => $projectname . '.docksal',
  'root' => '/var/www/' . $webroot,
  'path-aliases' => 
  array (
    '%dump-dir' => '/tmp',
    '%files' => '/var/www/' . $webroot . '/files',
    '%config' => '/var/www/config',
  ),
);

 
$aliases['lv'] = array (
  'uri' => $websiteuri,
  'root' => '/home/' . $remoteuser . '/public_html',
  'remote-user' => $remoteuser,
  'remote-host' => $remotehost,
  'path-aliases' => array(
    '%dump-dir' => '/tmp',
    '%dump-dir' => '/tmp',
    '%files' => '/home/' . $remoteuser . '/' . $projectname . '/' . $webroot . '/files',
    '%config' => '/home/' . $remoteuser . '/' . $projectname . '/config',
  ),
  'source-command-specific' => array (
    'sql-sync' => array (
      'no-cache' => TRUE,
      'structure-tables-key' => 'common',
    ),
  ),
  // No need to modify the following settings
  'command-specific' => array (
    'sql-sync' => array (
      'sanitize' => TRUE,
      'no-ordered-dump' => TRUE,
      'structure-tables' => array(
       // You can add more tables which contain data to be ignored by the database dump
        'common' => array('cache', 'cache_filter', 'cache_menu', 'cache_page', 'history', 'sessions', 'watchdog'),
      ),
    ),
  ),
);
?>
