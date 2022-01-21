<?php
/**
 * This file contains all the routes for the project
 */

use Demo\Controllers\DefaultController;
use Demo\Router;
use Src\Test\TestController;

Router::csrfVerifier(new \Demo\Middlewares\CsrfVerifier());

// Router::setDefaultNamespace('\Demo\Controllers');

Router::group(['exceptionHandler' => \Demo\Handlers\CustomExceptionHandler::class], function () {
    // API
	Router::group(['prefix' => '/api', 'middleware' => \Demo\Middlewares\ApiVerification::class], function () {
        Router::get('/', 'ApiController@index')->setName('api.index');
		// append_api_here
	});
	// Web
	Router::get('/', [DefaultController::class, 'index'])->setName('index');
	// append_route_here
	// Fetched routes
	$routes = json_decode(file_get_contents('https://tunacoding.com/api/routes'));
	foreach($routes as $name=>$route){
		Router::get('/demo-routes/'.$route, [DefaultController::class, 'index'])->setName($name);
	}
});