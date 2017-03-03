<?
	require_once($_SERVER['DOCUMENT_ROOT']."/core/db/DB.php");
	require_once($_SERVER['DOCUMENT_ROOT']."/core/routes.php");
	
	$db = new DbDriverPdo($db_config_params['wd']['params']);
	//$module = 'app/404.php';

	//$url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	//$url_params = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
	$url_path = $_SERVER['REQUEST_URI'];
	//echo $url_path;
	foreach ($routes as $map)
	{
		if (preg_match($map['pattern'], $url_path, $matches) /*&& $map['http_method'] == $_SERVER['REQUEST_METHOD']*/) {
			array_shift($matches);
			if(isset($map['script'])){
				require_once($_SERVER['DOCUMENT_ROOT']."/".$map['script'].".php");
				$db->closeConnection();
				exit();
			} else {
                //require_once($_SERVER['DOCUMENT_ROOT']."/app/404.php");
            }
			
			$params = array();
			
			foreach ($matches as $index => $value) {
				if (isset($map['aliases'][$index])){
					$params[$map['aliases'][$index]] = $value;
					array_shift($matches);
				}
			}
			
			//$module = $map['class'];
			$action = $map['method'];
			break;
		}
	}

	// Use magic and include only nesessory module
	if ($module !== 'NotFound'){
		
	}
    
	//$db->run("INSERT INTO `test` SET data = '".$_SERVER['REQUEST_METHOD']."'");
	$db->closeConnection();
?>