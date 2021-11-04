<?php 

$database = 'mysql://user:user@db/default';

$config_directories['active'] = '/var/www/docroot/config/active';
$config_directories['staging'] = '/var/www/docroot/config/staging';

//$conf['stage_file_proxy_origin'] = 'https://sapaseniors.org';

//$conf['stage_file_proxy_origin_dir'] = 'files';

//$config['system.core']['file_private_path'] = 'private';

$settings['hash_salt'] = 'N8QLPBCcluMMUCB-UrqAfDAqwaP1u3VN1HiubLObGh8';

$settings['trusted_host_patterns'] = array(
  'bd\.docksal$',
);

$database_charset = 'utf8mb4';

$base_url = 'http://bd.docksal'; // NO trailing slash!

$settings['update_free_access'] = FALSE;

$config['system.core']['file_file_path'] = 'files';
$config['system.core']['file_temporary_path'] = '/tmp';
$config['system.core']['file_private_path'] = '../private';
