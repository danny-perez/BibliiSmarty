<?php
require ('safemysql.php');
//$api_data = $_REQUEST;
//extract($api_data);
//$stih='stih_'.$stih;
//$db = new SafeMysql(array('db'=>'wp_stih'));
//$sql = "SELECT `st_no`,`st_text`,`parallel` FROM `$stih` WHERE 1";
//$st_text = $db->getAll($sql);

//$json = json_encode($st_text);
header('Content-Type:application/json;charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: Get');
Header("HTTP/1.0 200 OK");
$json = json_encode('ddffdfdfdssdf');
echo $json;
?>