<?php 

$projectname = 'bs';
$websiteuri  = 'brendasmeby.com';
$remoteuser  = 'brendasmeby';
$remotehost  = '173.236.95.18';
$webroot     = 'web';


$aliases['lc'] = array(
  'uri' => $projectname . '.docksal',
  'root' => '/var/www/' . $webroot,
  'path-aliases' => array(
    '%drush' => '/var/www/drush/drush',
    '%drush-script' => '/var/www/drush/drush.php',
    '%files' => '/var/www/' . $webroot . '/files',
    '%config' => '/var/www/config',
  ),
  'command-specific' => array (
    'sql-sync' => array (
      'no-dump' => TRUE,
    ),
  ),
);


$aliases['lv'] = array(
  'uri' => $websiteuri,
  'root' => '/home/' . $remoteuser . '/public_html',
  'remote-user' => $remoteuser,
  'remote-host' => $remotehost,
  'path-aliases' => array(
    '%drush' => '/home/' . $remoteuser . '/' . $projectname . '/drush/drush',
    '%drush-script' => '/home/' . $remoteuser . '/' . $projectname . '/drush/drush.php',
    '%files' => '/home/' . $remoteuser . '/' . $projectname . '/' . $webroot . '/files',
    '%config' => '/home/' . $remoteuser . '/' . $projectname . '/config',
  ),
  'command-specific' => array (
    'sql-sync' => array (
      'no-dump' => TRUE,
    ),
  ),
);


$aliases['s5'] = array(
  'uri' => 'https://brendasmeby.com',
  'root' => '/home/brendasmeby/public_html',
  'remote-host' => '143.95.148.52',
  'remote-user' => 'brendasmeby',
  'path-aliases' => array(
    '%drush' => '/home/brendasmeby/bs/drush/drush',
    '%drush-script' => '/home/brendasmeby/bs/drush/drush.php',
    '%files' => 'files',
    '%config' => '/home/brendasmeby/bs/config',
  ),
  'command-specific' => array (
    'sql-sync' => array (
      'no-dump' => TRUE,
    ),
  ),
);