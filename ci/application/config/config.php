<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
 | Base Site URL
 |--------------------------------------------------------------------------
 |
-|
+|
 */
$config['base_url'] = 'https://projeto-andressarocha.c9users.io/ci/';
 

$config['index_page'] = 'index.php';


$config['uri_protocol']	= 'REQUEST_URI';

$config['url_suffix'] = '';

$config['language']	= 'english';


$config['charset'] = 'UTF-8';


$config['enable_hooks'] = FALSE;


$config['subclass_prefix'] = 'MY_';


$config['composer_autoload'] = FALSE;


$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';


$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';

$config['allow_get_array'] = TRUE;


$config['log_threshold'] = 0;

$config['log_path'] = '';


$config['log_file_extension'] = '';


$config['log_file_permissions'] = 0644;


$config['log_date_format'] = 'Y-m-d H:i:s';


$config['error_views_path'] = '';


$config['cache_path'] = '';


$config['cache_query_string'] = FALSE;


$config['encryption_key'] = '';


$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ci_session';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = NULL;
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;


$config['cookie_prefix']	= '';
$config['cookie_domain']	= '';
$config['cookie_path']		= '/';
$config['cookie_secure']	= FALSE;
$config['cookie_httponly'] 	= FALSE;


$config['compress_output'] = FALSE;


$config['time_reference'] = 'local';


$config['rewrite_short_tags'] = FALSE;


$config['proxy_ips'] = '';
