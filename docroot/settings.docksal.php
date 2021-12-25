<?php 

$database = 'mysql://user:user@db/default';

$config_directories['active'] = '/var/www/config/active';
$config_directories['staging'] = '/var/www/config/staging';

//$conf['stage_file_proxy_origin'] = 'https://domain.org';

//$conf['stage_file_proxy_origin_dir'] = 'files';

$config['system.core']['page_compression'] = 0;
$config['system.core']['preprocess_css'] = 0;
$config['system.core']['preprocess_js'] = 0;
$config['system.core']['page_cache_background_fetch'] = 0;
$config['system.core']['cache'] = 0;

$settings['hash_salt'] = 'ohmygosh';

$database_charset = 'utf8mb4';

$settings['trusted_host_patterns'] = array(
  'docksal-backdrop\.docksal$',
);

$base_url = 'http://docksal-backdrop.docksal'; // NO trailing slash!

$settings['update_free_access'] = FALSE;

$config['system.core']['file_file_path'] = 'files';
$config['system.core']['file_temporary_path'] = '/tmp';
$config['system.core']['file_private_path'] = '../private';
