<?
// Конфигурация маршрутов URL проекта.

$root = $_SERVER['DOCUMENT_ROOT'];

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
    
	// ----------Скрипты----------
	// GET /admin
	array(
		'pattern' => '~^/admin/login$~',
		'script' => 'app/admin/login',
        'page' => true
	),
    
    array(
		'pattern' => '~^/admin$~',
		'script' => 'app/admin/main',
        'admin' => true
	),
    
    // ----------Товары------------
    array(
		'pattern' => '~^/admin/products/(\d+)$~',
		'script' => 'app/admin/products/item',
        'aliases' => array('id'),
        'admin' => true
	),
    
    array(
		'pattern' => '~^/admin/products/edit/(\d+)$~',
		'script' => 'app/admin/products/edit',
        'aliases' => array('id'),
        'admin' => true
	),
    
    array(
		'pattern' => '~^/admin/products$~',
		'script' => 'app/admin/products/list',
        'admin' => true
	),
    
    array(
		'pattern' => '~^/*$~',
		'script' => 'app/main'
	),
    
    array(
		'pattern' => '~^/404$~',
		'script' => 'app/shared/404'
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