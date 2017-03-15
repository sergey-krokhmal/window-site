<?
require_once($root."/core/db/DB.php");

$db = new DbDriverPdo($db_config_params['wd']['params']);

$id = $params['id'] ?? false;
$id_found = false;

if ($id){
    $item = $db->selectFirst("select * from `products` where id = $id");
    if ($item) {
        $id_found = true;
    }   
}

if (!$id_found) {
    $main_content = $script_404;
}
