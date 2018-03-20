<?php
require ('safemysql.php');
$api_data = $_REQUEST;
extract($api_data, EXTR_OVERWRITE); //convert the array key to a variable, the variable name is equals to the database field name
/*
$db     = new SafeMysql(array('db'=>'wp_ekzeget'));
$sql = "SELECT `kn` FROM `new_book` WHERE `name` LIKE ?";
$kn = db->getRow($sql,$name);
*/
/*
$sql = "SELECT * FROM `kniga` WHERE `kn` LIKE ?";
$description = db->getRow($sql,$kn);
*/
//$json = json_encode($description);
$json = json_encode($api_data);
return $json;
?>