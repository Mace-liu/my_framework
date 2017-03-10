<?php

require_once dirname(__FILE__).'/Database/pdo.class.php';
require_once dirname(__FILE__).'/Database/mysql.class.php';
require_once dirname(__FILE__).'/Database/mysqli.class.php';

require_once dirname(__FILE__).'/Smarty/Smarty.class.php';


$db = new PdoMysql($database_config_arr['host'],$database_config_arr['port'],$database_config_arr['user'],$database_config_arr['pass'],$database_config_arr['db'],$database_config_arr['charset']);


//smarty
$smarty = new smarty();
$smarty->template_dir   = $smarty_template_dir;
$smarty->compile_dir    = $smarty_compile_dir;
$smarty->config_dir     = $smarty_config_dir;
$smarty->cache_dir      = $smarty_cache_dir;
$smarty->caching        = $smarty_caching;
$smarty->left_delimiter = $smarty_delimiter[0];
$smarty->right_delimiter= $smarty_delimiter[1];

$smarty->assign("t_dir",$smarty_template_dir );


//mysqli测试


// $db = new ConnectMysqli($database_config_arr['host'],$database_config_arr['port'],$database_config_arr['user'],$database_config_arr['pass'],$database_config_arr['db'],$database_config_arr['charset']);

// $sql = "SELECT  * from test_table";

// $list = $db->getAll($sql);

// $db->p($list);




?>