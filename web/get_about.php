<?php
require ('safemysql.php');
$api_data = $_REQUEST;
extract($api_data);

$db = new SafeMysql(array('db'=>'wp_ekzeget'));
$sql = "SELECT * FROM `new_book` WHERE `name` LIKE ?s";
$kn_array = $db->getRow($sql,$name);
$testament = ($kn_array['testament']==0)?'Ветхий Завет':'Новый Завет';
$chapters = $kn_array['chapter'];
$kn = $kn_array['kn'];

$db1 = new SafeMysql(array('db'=>'wp_pass'));
$sql1 = "SELECT * FROM `kniga` WHERE `kn` LIKE ?s";
$description = $db1->getRow($sql1,$kn);
$description['testament'] = $testament;
$description['chapters'] = $chapters;
$json = json_encode($description);
echo $json;
?>