<?
require_once($root."/core/db/DB.php");
require_once("item.php");

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
