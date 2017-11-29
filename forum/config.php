<?php
// phpBB 3.2.x auto-generated configuration file
// Do not change anything in this file!
// Hacked by Swoops ;)
require('sconfig.php');

$dbms = 'phpbb\\db\\driver\\mysqli';
$dbhost = $CONFIG['mysqlhost'];
$dbport = $CONFIG['mysqlport'];
$dbname = $CONFIG['db'];
$dbuser = $CONFIG['mysqluser'];
$dbpasswd = $CONFIG['mysqlpass'];
$table_prefix = 'rsps_';
$phpbb_adm_relative_path = 'adm/';
$acm_type = 'phpbb\\cache\\driver\\file';

@define('PHPBB_INSTALLED', true);
// @define('PHPBB_DISPLAY_LOAD_TIME', true);
@define('PHPBB_ENVIRONMENT', 'production');
// @define('DEBUG_CONTAINER', true);
