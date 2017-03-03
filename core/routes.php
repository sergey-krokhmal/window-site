<?
// Конфигурация маршрутов URL проекта.
$routes = array
(
	// Главная страница сайта (http://localhost/)
	/*array(
		// паттерн в формате Perl-совместимого реулярного выражения
		'pattern' => '~^/$~',
		// HTTP метод
		'http_method' => 'GET',
		// Имя класса обработчика 
		'class' => 'Index',
		// Имя метода класса обработчика
		'method' => 'index'
	),*/
	
	// ----------Продажи магазина----------
	
	// GET /shopSales
	array(
		'pattern' => '~^/shopSales$~',
		'http_method' => 'GET',
		'class' => 'ShopSale',
		'method' => 'getAll',
	),
	
	// GET /shopSales?start=12-2016
	array(
		'pattern' => '~^/shopSales\?start=(\d{1,2}-\d{4})$~',
		'http_method' => 'GET',
		'class' => 'ShopSale',
		'method' => 'getMonth',
		'query' => array('start'),
	),
	
	array(
		'pattern' => '~^/shopSaleResults\?start=(\d{1,2}-\d{4})$~',
		'http_method' => 'GET',
		'class' => 'ShopSale',
		'method' => 'getTotalComulative',
		'query' => array('start'),
	),
	
	// PUT /ShopSales/4
	array(
		'pattern' => '~^/shopSales/(\d+)$~',
		'http_method' => 'PUT',
		'class' => 'ShopSale',
		'method' => 'update',
		'aliases' => array('id'),
	),
	
	// ----------Персонал----------
	
	// GET /employees
	array(
		'pattern' => '~^/employees$~',
		'http_method' => 'GET',
		'class' => 'Employee',
		'method' => 'getAll',
	),
	
	// GET /employees?eId=3
	array(
		'pattern' => '~^/employees\?eId=(\d+)$~',
		'http_method' => 'GET',
		'class' => 'Employee',
		'method' => 'getEmployee',
		'query' => array('eId'),
	),
	
	// PUT /employees/3
	array(
		'pattern' => '~^/employees/(\d+)$~',
		'http_method' => 'PUT',
		'class' => 'Employee',
		'method' => 'update',
		'aliases' => array('id'),
	),
	
	// POST /employees
	array(
		'pattern' => '~^/employees$~',
		'http_method' => 'POST',
		'class' => 'Employee',
		'method' => 'insert',
		'aliases' => array('id'),
	),
	
	// ----------Скрипты----------
	// GET /admin
	array(
		'pattern' => '~^/admin/login$~',
		//'http_method' => 'GET',
		'script' => 'app/admin/login'
	),
    
    array(
		'pattern' => '~^/admin$~',
		//'http_method' => 'GET',
		'script' => 'app/admin/index'
	),
    
    array(
		'pattern' => '~^/$~',
		//'http_method' => 'GET',
		'script' => 'app/index'
	),

	// Пример (http://localhost/forum/web-development/php/12345.xhtml)
	array(
		'pattern' => '~^/forum(/[a-z0-9_/\-]+/)([0-9]+)$~',
		'class' => 'Forum',
		'method' => 'viewTopick',
		// Будут созданы переменные:
		// forum_url = '/web-development/php/'
		// topic_id = 12345
		'aliases' => array('forum_url', 'topic_id'),
	),
);
?>