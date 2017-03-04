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

if (count($_POST) > 0) {
    foreach($item as $key => $value) {
        if (isset($_POST[$key])) {
            $new_val = $db->quote($_POST[$key] ?? $value);
            $item[$key] = $_POST[$key];
            $updates[] = "$key = $new_val";
        }
    }
    $set_part = implode(',', $updates);
    $query = "update `products` set $set_part where id = $id";
    $db->run($query);
}
if ($id_found) {
    require_once($root."/app/templates/admin/products/edit.php");
} else {
    require_once($root."/app/shared/404.php");
}
