<?
require_once($root."/core/db/DB.php");

$db = new DbDriverPdo($db_config_params['wd']['params']);

$items = $db->selectArray("select * from `products` order by name asc");