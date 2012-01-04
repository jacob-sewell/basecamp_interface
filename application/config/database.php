<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = ENVIRONMENT;
$active_record = TRUE;

$db['development_local']['hostname'] = 'localhost';
$db['development_local']['username'] = 'root';
$db['development_local']['password'] = 'root';
$db['development_local']['database'] = 'website_name';
$db['development_local']['dbdriver'] = 'mysql';
$db['development_local']['dbprefix'] = '';
$db['development_local']['pconnect'] = TRUE;
$db['development_local']['db_debug'] = TRUE;
$db['development_local']['cache_on'] = FALSE;
$db['development_local']['cachedir'] = '';
$db['development_local']['char_set'] = 'utf8';
$db['development_local']['dbcollat'] = 'utf8_general_ci';
$db['development_local']['swap_pre'] = '';
$db['development_local']['autoinit'] = TRUE;
$db['development_local']['stricton'] = FALSE;

$db['development_server']['hostname'] = '';
$db['development_server']['username'] = '';
$db['development_server']['password'] = '';
$db['development_server']['database'] = '';
$db['development_server']['dbdriver'] = 'mysql';
$db['development_server']['dbprefix'] = '';
$db['development_server']['pconnect'] = TRUE;
$db['development_server']['db_debug'] = TRUE;
$db['development_server']['cache_on'] = FALSE;
$db['development_server']['cachedir'] = '';
$db['development_server']['char_set'] = 'utf8';
$db['development_server']['dbcollat'] = 'utf8_general_ci';
$db['development_server']['swap_pre'] = '';
$db['development_server']['autoinit'] = TRUE;
$db['development_server']['stricton'] = FALSE;

$db['production']['hostname'] = '';
$db['production']['username'] = '';
$db['production']['password'] = '';
$db['production']['database'] = '';
$db['production']['dbdriver'] = 'mysql';
$db['production']['dbprefix'] = '';
$db['production']['pconnect'] = TRUE;
$db['production']['db_debug'] = TRUE;
$db['production']['cache_on'] = FALSE;
$db['production']['cachedir'] = '';
$db['production']['char_set'] = 'utf8';
$db['production']['dbcollat'] = 'utf8_general_ci';
$db['production']['swap_pre'] = '';
$db['production']['autoinit'] = TRUE;
$db['production']['stricton'] = FALSE;


/* End of file database.php */
/* Location: ./application/config/database.php */