<?php

$database_config_arr = array();
$database_config_arr['host'] 	= '127.0.0.1';
$database_config_arr['port'] 	= '';
$database_config_arr['user'] 	= 'root';
$database_config_arr['pass'] 	= 'a87760982';
$database_config_arr['db'] 		= 'php_test';
$database_config_arr['charset'] = 'utf8';



//=======================
$smarty_template_dir    = 'templates/';
$smarty_compile_dir     = 'templates_c/';
$smarty_config_dir    	= 'Configs/';
$smarty_cache_dir     	= 'runtime/Cache/';
$smarty_caching       	= FALSE;
$smarty_delimiter     	= explode("|","{%|%}");



ini_set('date.timezone','Asia/Shanghai');  //设置时区





?>