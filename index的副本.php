<?php

require_once 'common.inc.php';

error_reporting(E_ERROR);


echo __FILE__.'</br>';

$ip = $_SERVER["REMOTE_ADDR"];


echo $ip;


$sql = "select * from test_table";

$data = $db->getAll($sql);

print_r($data);





$smarty->assign('test_data',1123);

$smarty->display('test.html');






?>