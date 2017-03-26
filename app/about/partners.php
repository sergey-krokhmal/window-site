<?
require_once($root."/core/db/DB.php");

$db = new DbDriverPdo($db_config_params['wd']['params']);

const ABOUT_TITLE = 'Наши партнеры';

$partners = $db->selectArray("select * from `partners` order by id asc");