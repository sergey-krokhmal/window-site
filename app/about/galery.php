<?
require_once($root."/core/db/DB.php");

$db = new DbDriverPdo($db_config_params['wd']['params']);

const ABOUT_TITLE = 'Галерея';
const ABOUT_DIR = 'galery/';

$photos = $db->selectArray("select * from `galery` order by id asc");