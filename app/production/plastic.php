<?
require_once($root."/core/db/DB.php");

$db = new DbDriverPdo($db_config_params['wd']['params']);

$model_url = $params['model'] ?? 'rehau_blitz';

$model_type = 'plastic';

$productions = $db->selectArray("select * from `production` order by id asc");

$model = $db->selectFirst("select * from `production` where url = '$model_url'");
$model_name = $model['name'];
$model_image = $model['image'];
$model_params = unserialize($model['params']);

$constructs = $db->selectArray("select c.* from `construct` c where c.type = 'plastic'");

