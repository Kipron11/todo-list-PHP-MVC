<?php
//TODO Custom Routing,
//TODO  Composer,
//TODO Controllers,
//TODO View/Layouts,
//TODO Models,
//TODO Migrations
//TODO Form Widget classes,
//TODO Processing of request data,
//TODO  validations,
//TODO  Reg/Login,
//TODO  Simple Active Record,
//TODO  Session Flash messages,
//TODO  MiddleWares,
//TODO App events,
//TODO  Framework reusable/installable core

require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;

$app = new Application();


$app->router->get('/', function () {
	return 'HomePage';
});
$app->router->get('/todos', function () {
	return 'Todos';
});


$app->run();