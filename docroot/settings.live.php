<?php 

$database = 'mysql://user:pass@localhost/db';

$config_directories['active'] = 'config/active';
$config_directories['staging'] = 'config/staging';

$settings['file_private_path'] = 'private';

$settings['hash_salt'] = 'N8QLPBCcluMMUCB-UrqAfDAqwaP1u3VN1HiubLObGh8';

$settings['trusted_host_patterns'] = array(
  'domain\.com$'
);

$database_charset = 'utf8mb4';

$base_url = 'https://domain.com'; // NO trailing slash!