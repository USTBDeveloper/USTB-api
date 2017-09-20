<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
//验证密码
$router->get('/getInfo','AuthController@getInfo');
//获取创新学分
$router->get('/getInnovativeCredit','AuthController@getInnovativeCredit');
//获得所有成绩
$router->get('/getScore','AuthController@getScore');