<?
	require_once($_SERVER["DOCUMENT_ROOT"]."/db/DB.php");
	$db = getDb();
	$arr = $db->selectArray("SELECT * FROM `test`");
	echo "<pre>";
	var_dump($arr);
	echo "<pre>";
	echo "work!<br>";
	echo extension_loaded('mcrypt');
?>