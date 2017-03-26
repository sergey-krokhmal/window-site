<?
require_once($root."/core/db/DB.php");

$db = new DbDriverPdo($db_config_params['wd']['params']);

const ABOUT_TITLE = 'Клиенты о нас';
const ABOUT_DIR = 'reviews/';

$photos = $db->selectArray("select * from `galery` order by id asc");

$main_content = $app_path."templates/about/galery.php";