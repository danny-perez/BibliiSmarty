<?php
require ('safemysql.php');
$db     = new SafeMysql(array('db'=>'wp_ekzeget'));
$api_data = $_REQUEST;
extract($api_data, EXTR_OVERWRITE); //convert the array key to a variable, the variable name is equals to the database field name
