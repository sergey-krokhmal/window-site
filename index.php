<?
	require_once($_SERVER['DOCUMENT_ROOT']."/core/routes.php");
	require_once($root."/core/db/DB.php");
	
	$db = new DbDriverPdo($db_config_params['wd']['params']);
    
    // Получить uri запрос
	$url_path = $_SERVER['REQUEST_URI'];
    
    $route_found = false;
    
    // Для всех маршрутов
	foreach ($routes as $map) {
        // Найти маршрут по uri
		if (preg_match($map['pattern'], $url_path, $matches) /*&& $map['http_method'] == $_SERVER['REQUEST_METHOD']*/) {
			array_shift($matches);
            
            $params = array();
			foreach ($matches as $index => $value) {
				if (isset($map['aliases'][$index])){
					$params[$map['aliases'][$index]] = $value;
					array_shift($matches);
				}
			}
            
            // Если нашли маршрут и в нем присутствует имя скрипта
			if(isset($map['script'])) {
                // Устанавливаем этот скрипт как обработчик контента страницы
                $script = $app_path.$map['script'].".php";
                $main_content = $app_path."templates/".$map['script'].".php";
                $route_found = true;
			} else {
                $main_content = $script_404;
            }
            if (file_exists($script)){
                require_once($script);
            }
            
            // Если маршрут для самостоятельной страницы - загружаем только ее
            if ($map['page'] ?? false) {
                require_once($script);
            } elseif ($map['admin'] ?? false) {
                // Если маршрут относиться к админке, то берем компоновщик админки (для нее другие шапка и подвал)
                require_once($app_path."admin/index.php");
            } else {
                // Иначе берем главный компоновщик
                require_once($app_path."index.php");
            }
            
            // Цикл поиска маршрута прерываем
			break;
		}
	}
    
    if ($route_found == false) {
        $main_content = $script_404;
        //require_once($app_path."index.php");
    }
?>