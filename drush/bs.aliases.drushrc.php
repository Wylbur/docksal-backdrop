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
    '%dump-dir' => '/tmp',
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
    '%dump-dir' => '/tmp',
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

